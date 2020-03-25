<?php

namespace App\Http\Controllers\Auth;

// use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Usertbl;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email'                         => 'required|unique:tbl_user|email:rfc|max:50',
            'password'                      => [
                                                'required',
                                                'string',
                                                'min:10',             // must be at least 10 characters in length
                                                'regex:/[a-z]/',      // must contain at least one lowercase letter
                                                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                                                'regex:/[0-9]/',      // must contain at least one digit
                                                'regex:/[@$!%*#?&]/', // must contain a special character
                                            ],
            'password_confirmation'         => 'required_with:password|same:password',
            'nohp'                          => 'required|numeric|regex:/^[0-9]+$/',
        ]);
    } 


    protected function create(array $data)
    {
        // return Usertbl::create([
        //     'email' => $data['email'],
        //     'nohp' => $data['nohp'],
        //     'password' => Hash::make($data['password']),
        //     'alamat' => $data['alamat'],
        // ]);

        $new_user           = new Usertbl;  
        $new_user->email    = $data['email'];
        $new_user->password = Hash::make($data['password']);
        $new_user->nohp     = $data['nohp'];
        $new_user->alamat   = $data['alamat'];
        return $new_user->save(); 

    }
}
