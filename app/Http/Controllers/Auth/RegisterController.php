<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/profile';

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
    public function validator(array $data)
    {
        return Validator::make($data, [
            'fullName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'alpha_dash', 'max:20', 'min:8', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required',  'min:8'],
            //'password_confirmation' => ['required',  'min:8', 'same:password', 'required_with:password'],
            'country' => ['required'],
            'avatar' => ['required']
        ], [
          'required' => 'Este campo es obligatorio',
          'alpha' => 'Este campo debe contener solo letras',
          'numeric'=> 'Este campo debe contener solo números',
          'alpha_dash' => 'Este campo solo puede contener letras, numeros, guiones o guiones bajos',
          'max' => 'Este campo puede tener como máximo :max caracteres',
          'email' => 'Usá el formato nombre@ejemplo.com.',
          'unique:users' => 'Este dato ya se encuentra registrado',
          'confirmed' => 'Las contraseñas no coinciden',
          'min' => 'Este campo debe tener como mínimo :min caracteres'
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(array $data)
    {

        $user = User::create([
            'full_name' => $data['fullName'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'avatar' => $data['avatar'],
        ]);

        return $user;
    }
}
