<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Usertbl;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    } 

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = [
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        ];

        if(Auth::attempt($user_data))
        {
            return redirect('produk');
        }
        else
        {
            return back()->with('error', 'Email atau Password salah');
        } 
    }

    function logout()
    {
        Auth::logout();
        return redirect('welcome');
    }

}
