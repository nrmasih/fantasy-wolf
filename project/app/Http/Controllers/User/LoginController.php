<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Models\User;
class LoginController extends Controller
{
    private $HTTP_status = 200;
    private $status = '';
    private $message = '';
    private $response = [];
    public function __construct()
    {
        //$this->middleware('guest', ['except' => ['logout', 'userLogout']]);

    }

    public function showLoginForm()
    {
        if(!empty(Auth::user()->id)){
          return redirect()->route('user-dashboard');  
        }else{
          return redirect()->route('front.index');  
        }
        return view('front.index');
    }

    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
                    'email' => 'required'
        ]);
        if ($validator->fails()) {
            $this->status = 0;
            $this->message = $validator->errors()->all();
            $this->response = '';
        } else if (User::where('email',$request->email)->where('status',0)->count() == 3) {
            $this->status = 0;
            $this->message = 'Your profile is deactivated!';
            $this->response = '';
        } else if (User::where('email',$request->email)->count() == 0) {
            $this->status = 0;
            $this->message = 'Email id not exists!';
            $this->response = '';
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password],true)) {               
                $this->response['url'] = route('user-dashboard');
                $this->message = 'Login successfully!';
                $this->status = 1;
            }else{
                $this->status = 0;
                $this->message = 'The email and password combination do not match.';
                $this->response = '';
            }
        }
        return response()->json(['status' => $this->status, 'message' => $this->message, 'response' => $this->response], $this->HTTP_status);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    
}
