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
        $data = [
            'full_name' => $request->input('reg_full_name'),
            'email' => $request->input('reg_email'),
            'pword' => $request->input('password'),
            'date_created' => date("Y-m-d"),
            'date_modified' => date("Y-m-d")
        ];
        bec_user::create($data);
        return response("Success!!");
    }
}
