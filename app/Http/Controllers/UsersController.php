<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Usertbl;

class UsersController extends Controller
{
    
    public function index()
    { 
        $data = Usertbl::paginate(10);
        return view('users.index', ['users' => $data]);
    }
 
    public function create()
    {        
        return view('users.register');
    }
 
    public function store(Request $request)
    {

        \Validator::make($request->all(), [
            'email'             => 'required|unique:tbl_user|email:rfc|max:50',
            'password'          => [
                                        'required',
                                        'string',
                                        'min:10',             // must be at least 10 characters in length
                                        'regex:/[a-z]/',      // must contain at least one lowercase letter
                                        'regex:/[A-Z]/',      // must contain at least one uppercase letter
                                        'regex:/[0-9]/',      // must contain at least one digit
                                        'regex:/[@$!%*#?&]/', // must contain a special character
                                    ],
            'password2'         => 'required_with:password|same:password',
            'nohp'              => 'required|numeric|regex:/^[0-9]+$/',
            // 'alamat'            => 'required|string',
        ])->validate();

        $new_user           = new Usertbl;  
        $new_user->email    = $request->get('email');
        $new_user->password = \Hash::make($request->get('password'));
        $new_user->nohp     = $request->get('nohp');
        $new_user->alamat   = $request->get('alamat');
        $new_user->save(); 
        return redirect()->route('users.index')->with('status1', 'User berhasil disimpan');
        
    }

     
    public function show($id)
    {
        //
    }

     
    public function edit($id)
    {
        //
    }

     
    public function update(Request $request, $id)
    {
        //
    }

     
    public function destroy($id)
    {
        //
    }
}
