<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bec_user;

class AuthController extends Controller
{
    function performRegister(Request $request){
        $request ->validate([
            'reg_full_name' => 'required | max:50 | min: 6', 
            'reg_email'  => 'required | email | max:50 | min: 6',
            'password' => 'required | max:50 | min: 8 | confirmed',
            'password_confirmation' => 'required'
        ]);
       // $data = [
        //    'full_name' => $request->input('reg_full_name'),
       //     'email' => $request->input('reg_email'),
       //     'pword' => $request->input('password'),
       //     'date_created' => date("Y-m-d"),
       //     'date_modified' => date("Y-m-d")
       // ];
       // bec_user::create($data);

       $bec_user = new bec_user();
       $bec_user ->full_name = $request->input('reg_full_name'); 
       $bec_user ->email = $request->input('reg_email'); 
       $bec_user ->pword = $request->input('password'); 
       $bec_user ->date_created = $request->input("Y-m-d"); 
       $bec_user ->date_modified = $request->input("Y-m-d"); 
       $bec_user->save();

        return response("Success!!");

    }
    function performLogin(Request $request){
        $request->validate([
    
        'email' => 'required | email | max:50 | min: 6', 
        'password'  => 'required | max:50 | min: 6',
        ]);

        $user = bec_user::where('email',$request->input('email'))
                        ->where('pword',$request->input('password'))
                        ->first();

        if($user->is_active ==  0){
            return response('Your Account is inactive!');
        }else if ($user->is_banned == 1){
            return response('Your Account is banned!');
        }else {
            return response("Login Success!!");
        }
    }
}
