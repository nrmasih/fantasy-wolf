<?php

namespace App\Http\Controllers\Admin;

use Datatables;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Helper;
class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //*** JSON Request
    public function datatables($type)
    {
         
         $exttype = array('Large','B1','B2','B3','B4','B5','B6','B7','Testi','Slider','Ext');
         if($type=='Large'){
         $datas = Banner::whereIn('type',$exttype)->orderBy('id','desc')->get();
         }else{
         $datas = Banner::where('type','=',$type)->orderBy('id','desc')->get();
         }
         //--- Integrating This Collection Into Datatables
         return Datatables::of($datas)
                            ->editColumn('photo', function(Banner $data) {
                                $photo = $data->photo ? url('assets/images/banners/'.$data->photo):url('assets/images/noimage.png');
                                return '<img height="80" width="120" src="' . $photo . '" alt="Image">';
                            })
                            ->addColumn('action', function(Banner $data) {
                                return '<div class="action-list"><a data-href="' . route('admin-sb-edit',$data->id) . '" class="edit" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit"></i>Edit</a><a href="javascript:;" data-href="' . route('admin-sb-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="delete"><i class="fas fa-trash-alt"></i></a></div>';
                            }) 
                            ->rawColumns(['photo', 'action'])
                            ->toJson(); //--- Returning Json Data To Client Side
    }

    //*** GET Request
    public function index()
    {
        return view('admin.banner.index');
    }

    //*** GET Request
    public function large()
    {
        return view('admin.banner.large');
    }

    //*** GET Request
    public function bottom()
    {
        return view('admin.banner.bottom');
    }

    //*** GET Request
    public function create()
    {
        return view('admin.banner.create');
    }

    //*** GET Request
    public function largecreate()
    {
        return view('admin.banner.largecreate');
    }

    //*** GET Request
    public function bottomcreate()
    {
        return view('admin.banner.bottomcreate');
    }

    //*** POST Request
    public function store(Request $request)
    {
        //--- Validation Section
        $rules = [
               'type'      => 'required',
                ];

        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        //--- Logic Section
        $data = new Banner();
        $input = $request->all();
        if ($file = $request->file('photo')) 
         {      
            $name = time().$file->getClientOriginalName();
            $file->move('assets/images/banners',$name);           
            $input['photo'] = $name;
        } 
        if ($file = $request->file('extimg')) 
         {      
            $name = time().$file->getClientOriginalName();
            $file->move('assets/images/banners',$name);           
            $input['extimg'] = $name;
        } 
        if ($file = $request->file('extimg2')) 
         {      
            $name = time().$file->getClientOriginalName();
            $file->move('assets/images/banners',$name);           
            $input['extimg2'] = $name;
        } 
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        $msg = 'New Data Added Successfully.';
        return response()->json($msg);      
        //--- Redirect Section Ends    
    }

    //*** GET Request
    public function edit($id)
    {
        $data = Banner::findOrFail($id);
        return view('admin.banner.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
        //--- Validation Section
        $rules = [
               'photo'      => 'mimes:jpeg,jpg,png,svg',
                ];

        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        //--- Logic Section
        $data = Banner::findOrFail($id);
        $input = $request->all();
            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/banners',$name);
                if($data->photo != null)
                {
                    if (file_exists(public_path().'/assets/images/banners/'.$data->photo)) {
                        unlink(public_path().'/assets/images/banners/'.$data->photo);
                    }
                }            
            $input['photo'] = $name;
            } 

            if ($files = $request->file('extimg')) 
            {              
                $names = time().$files->getClientOriginalName();
                $files->move('assets/images/banners',$name);
                if($data->extimg != null)
                {
                    if (file_exists(public_path().'/assets/images/banners/'.$data->extimg)) {
                        unlink(public_path().'/assets/images/banners/'.$data->extimg);
                    }
                }            
            $input['extimg'] = $names;
            } 
            
            if ($files = $request->file('extimg2')) 
            {              
                $names = time().$files->getClientOriginalName();
                $files->move('assets/images/banners',$name);
                if($data->extimg != null)
                {
                    if (file_exists(public_path().'/assets/images/banners/'.$data->extimg)) {
                        unlink(public_path().'/assets/images/banners/'.$data->extimg);
                    }
                }            
            $input['extimg2'] = $names;
            } 

        $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section     
        $msg = 'Data Updated Successfully.';
        return response()->json($msg);      
        //--- Redirect Section Ends            
    }

    //*** GET Request Delete
    public function destroy($id)
    {
        $data = Banner::findOrFail($id);
        //If Photo Doesn't Exist
        if($data->photo == null){
            $data->delete();
            //--- Redirect Section     
            $msg = 'Data Deleted Successfully.';
            return response()->json($msg);      
            //--- Redirect Section Ends     
        }
        //If Photo Exist
        if (file_exists(public_path().'/assets/images/banners/'.$data->photo)) {
            unlink(public_path().'/assets/images/banners/'.$data->photo);
        }
        $data->delete();
        //--- Redirect Section     
        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);      
        //--- Redirect Section Ends     
    }
}
