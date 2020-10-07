<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\User;
use Validator,
    Redirect,
    Response;

class ApiController extends Controller {

    private $HTTP_status = 200;
    private $status = '';
    private $message = '';
    private $response = [];

    public function __construct() {
        
    }
    
    
    
    public function resetPassword(Request $request) {
        $validator = Validator::make($request->all(), [
                    'password' => 'required'
        ]);
        if ($validator->fails()) {
            $this->status = 0;
            $this->message = $validator->errors()->all();
            $this->response = '';
        }  else {
            $User = User::where("email",base64_decode($request->email))->first();
            $User->password=bcrypt($request->password);
            $res = $User->save();
            if (!empty($res)) {
                $this->response['url'] = route('front.index');
                $this->message = 'Password reset sucessfully!';
                $this->status = 1;
            } else {
                $this->response = '';
                $this->message = 'Something problem!';
                $this->status = 0;
            }
        }
        return response()->json(['status' => $this->status, 'message' => $this->message, 'response' => $this->response], $this->HTTP_status);
    }

    public function forgotPassword(Request $request) {
        $validator = Validator::make($request->all(), [
                    'email' => 'required'
        ]);
        if ($validator->fails()) {
            $this->status = 0;
            $this->message = $validator->errors()->all();
            $this->response = '';
        } else if (User::where('email', $request->email)->count() == 0) {

            $this->status = 0;
            $this->message = 'Email id not exists!';
            $this->response = '';
        } else {
            $res = 1;
            if (!empty($res)) {
                $ecode = base64_encode($request->email);
                $this->response['url'] = url('reset-password/' . $ecode);
                $this->message = 'Reset password link send to your email!';
                $this->status = 1;
            } else {
                $this->response = '';
                $this->message = 'Something problem!';
                $this->status = 0;
            }
        }
        return response()->json(['status' => $this->status, 'message' => $this->message, 'response' => $this->response], $this->HTTP_status);
    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
                    'first_name' => 'required',
                    'email' => 'required'
        ]);
        if ($validator->fails()) {
            $this->status = 0;
            $this->message = $validator->errors()->all();
            $this->response = '';
        } else if (User::where('email', $request->email)->count() > 0) {

            $this->status = 0;
            $this->message = 'Email id already exists!';
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
            $input['password'] = bcrypt($request->password);
            $input['status'] = 1;
            $User = new User;
            $User->fill($input);
            $res = $User->save();
            if (!empty($res)) {
                 $this->response['url'] = route('front.index');
                $this->message = 'Congratulations, You have registered successfully! ';
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
