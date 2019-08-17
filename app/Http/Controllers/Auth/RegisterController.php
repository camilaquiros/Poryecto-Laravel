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
    public function validator(array $data)
    {
        return Validator::make($data, [
            'fullName' => ['required', 'alpha', 'max:255'],
            'userName' => ['required', 'alpha_dash', 'max:20', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required',  'min:8', 'confirmed'],
            'country' => ['required']
        ], [
          'required' => 'Completá este dato',
          'alpha' => 'Este dato debe contener solo letras',
          'alpha_dash' => 'Este dato solo puede contener letras, numeros, guiones o guiones bajos',
          'max' => 'Este dato puede tener como máximo :max caracteres',
          'email' => 'Usá el formato nombre@ejemplo.com.',
          'unique:users,email' => 'Este correo electronico ya se encuentra registrado',
          'unique:users,username' => 'Este usuario ya se encuentra registrado',
          'confirmed' => 'Las contraseñas no coinciden',
          'min' => 'Ingresá al menos :min caracteres',
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
        return User::create([
            'full_name' => $data['fullName'],
            'username' => $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
        ]);
    }
}
