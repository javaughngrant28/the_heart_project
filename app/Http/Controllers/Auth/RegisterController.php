<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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

            'fist_name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'last_name' => ['required', 'string', 'min:3'],

            'address' => ['required', 'string', 'min:8'],

            'trn' => ['required', 'string', 'min:10', 'unique:users','regex:/^[-0-9\+]+$/'],

            'date' => ['required'],

            'f_number' => ['required', 'min:7','regex:/^[-0-9\+]+$/'],

            'gender' => ['required'] ,

            'qualification' => ['required','mimes:doc,docx,dot'],

            'pfp' => ['required', 'mimes:jpg,jpeg,png'],
        ]);


    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $pfp_path = $data['pfp']->store('public');
        $doc_path = $data['qualification']->store('public');
        return User::create([
            'f_name' => $data['fist_name'],
            'l_name' => $data['last_name'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'address' => $data['address'],
            'trn' => $data['trn'],
            'd_o_b' => $data['date'],
            'tel_number' => $data['f_number'],
            'gender' => $data['gender'],
            'user_qualification_path' => $doc_path,
            'user_pfp_path' => $pfp_path,
        ]);
    }
}
