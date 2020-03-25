<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    { 
        $data = \App\Usertbl::paginate(10);
        return view('users.index', ['users' => $data]);
    }
 
    public function create()
    {        
        return view('users.register');
    }
 
    public function store(Request $request)
    {
        $new_user = new \App\Usertbl;  
        $new_user->email = $request->get('email');
        $new_user->password = \Hash::make($request->get('password'));
        $new_user->nohp = $request->get('nohp');
        $new_user->alamat = $request->get('alamat');
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
