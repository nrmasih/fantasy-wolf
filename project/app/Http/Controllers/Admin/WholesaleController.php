<?php

namespace App\Http\Controllers\Admin;

use Datatables;
//use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Models\Wholesale;
class WholesaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //*** JSON Request
    public function datatables()
    {
         $datas = Wholesale::orderBy('id','desc')->get();
         //--- Integrating This Collection Into Datatables
         return Datatables::of($datas)
                            /*->editColumn('price', function(Subscription $data) {
                                $price = round($data->price,2);
                                return $price;
                            })
                            ->editColumn('allowed_products', function(Subscription $data) {
                                $allowed_products = $data->allowed_products == 0 ? "Unlimited": $data->allowed_products;
                                return $allowed_products;
                            })*/
                            ->addColumn('action', function(Wholesale $data) {
                                return '<div class="action-list"><a href="' . route('admin-wholesale-view',$data->id) . '" class="view" > <i class="fas fa-eye"></i>View</a></div>';
                            }) 
                            ->rawColumns(['action'])
                            ->toJson(); //--- Returning Json Data To Client Side
    }

    //*** GET Request
    public function index()
    {
        return view('admin.wholesale.index');
    }
    
    public function view($id)
    {
        $ps = Wholesale::where('id',$id)->first();
        return view('admin.wholesale.view',compact('ps'));
    }
    

    //*** GET Request
    public function create()
    {
        return view('admin.subscription.create');
    }

    //*** POST Request
    public function store(Request $request)
    {

        //--- Logic Section
        $data = new Subscription();
        $input = $request->all();

        if($input['limit'] == 0)
         {
            $input['allowed_products'] = 0;
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
        $data = Subscription::findOrFail($id);
        return view('admin.subscription.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
        //--- Logic Section
        $data = Subscription::findOrFail($id);
        $input = $request->all();
        if($input['limit'] == 0)
         {
            $input['allowed_products'] = 0;
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
        $data = Subscription::findOrFail($id);
        $data->delete();
        //--- Redirect Section     
        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);      
        //--- Redirect Section Ends     
    }
}
