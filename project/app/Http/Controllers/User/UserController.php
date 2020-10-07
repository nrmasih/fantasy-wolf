<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use App\Models\Countrys;
use Image;

class UserController extends Controller {
    private $uploadPath = "public/uploads/users/";
    private $HTTP_status = 200;
    private $status = '';
    private $message = '';
    private $response = [];

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        return view('user.dashboard', compact('user'));
    }

    public function profile() {
        $user = Auth::user();
        $country = Countrys::orderby('country_id', 'ASC')->get();
        return view('user.profile', compact('user','country'));
    }

    public function UpdatePhoto(Request $request) {
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('photo');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path($this->uploadPath.'thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);
        $destinationPath = public_path($this->uploadPath);
        $image->move($destinationPath, $input['imagename']);
        $User = User::where("id", Auth::user()->id)->first();
        $User->photo = $input['imagename'];
        $res = $User->save();
        if (!empty($res)) {
            $this->response['url'] = url($this->uploadPath.'thumbnail/'.$input['imagename']);
            $this->message = 'Profile Image updated successfully!';
            $this->status = 1;
        } else {
            $this->response = '';
            $this->message = 'Something problem!';
            $this->status = 0;
        }
      return response()->json(['status' => $this->status, 'message' => $this->message, 'response' => $this->response], $this->HTTP_status);      
    }
    public function updateProfile(Request $request) {
        $validator = Validator::make($request->all(), [
                    'first_name' => 'required'
        ]);
        if ($validator->fails()) {
            $this->status = 0;
            $this->message = $validator->errors()->all();
            $this->response = '';
        } else {
            $username = '';
            if (!empty($request->first_name)) {
                $username .= $request->first_name;
            }
            if (!empty($request->last_name)) {
                $username .= ' ' . $request->last_name;
            }
            $input = $request->all();
            $input['name'] = $username;   
            //$input['email'] = $username;
            $User = User::where("id",Auth::user()->id)->first();
            $User->fill($input);
            $res = $User->save();
            if (!empty($res)) {
                 $this->response['url'] = '';
                $this->message = 'Profile updated successfully! ';
                $this->status = 1;
            } else {
                $this->response = '';
                $this->message = 'Something problem!';
                $this->status = 0;
            }
        }
        return response()->json(['status' => $this->status, 'message' => $this->message, 'response' => $this->response], $this->HTTP_status);
    }

}
