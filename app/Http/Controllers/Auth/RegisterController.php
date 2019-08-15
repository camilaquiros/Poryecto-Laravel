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
            'fullName' => ['required', 'string', 'max:255'],
            'userName' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => [],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8', 'confirmed']
        ], [
          'required' => 'El campo :attribute es obligatorio',
          'string' => 'El campo :attribute debe ser en formato texto',
          'max' => 'El campo :attribute puede tener como máximo :max caracteres ',
          'email' => 'El campo :attribute debe tener un formato de email válido',
          'unique:users' => 'Este :atribute ya se encuentra registrado',
          'confirmed' => 'Las contraseñas no coinciden',
          'min' => 'El campo :attribute debe tener como mínimo :min caracteres ',




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
            'user_name' => $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
