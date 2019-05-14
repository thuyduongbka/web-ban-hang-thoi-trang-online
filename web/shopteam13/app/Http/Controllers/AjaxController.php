<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Customer;
use Mail,Hash;
use App\Http\Controllers\Controller;
use App\EMail;
use Illuminate\Support\Str;


class AjaxController extends Controller
{
    public function postLogin(Request $request){    // dang nhap 
    	$email = $request->get('email');
    	$password = $request->get('password');
        $arr = ['email' => $email, 'password'=>$password];
        if (Auth::guard('customer')->attempt($arr)){
            return response()->json([
                    'error' => false,
                    'message' => 'success'
                ], 200);
        } else {
        	$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
        	return response()->json([
                    'error' => true,
                    'message' => $errors                    
                ], 200);            
        }
    }
    
     public function postForgotPassword(Request $request){    // quen mk -> kiem tra ng dung ton tai
        $email = $request->get('email');
        $customer = Customer::where('email',$email)->first();
        if (!empty($customer)){
            $password = Str::random(6);
            $customer->password = Hash::make($password);
            $customer->update(); 
            EMail::html_email($password,$email); 
            return response()->json([
                    'error' => false,
                    'message' => 'success'
                ], 200);
        } else {
            $errors = new MessageBag(['errorlogin' => 'Email không tồn tại. Đăng ký để mua hàng']);
            return response()->json([
                    'error' => true,
                    'message' => $errors                    
                ], 200);            
        }
    }


    
    
}
