<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function check(){
        $email    = $request->email;
        $password = $request->password;
    }
}
