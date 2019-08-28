<?php
namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
  public function editUserProfile()
  {
    $userToEdit = User::find(\Auth::user()->id);
    return view('profile', compact('userToEdit'));
 }

 public function update(Request $request)
 {
   $rules =  [
       'username' => 'required|alpha_dash|max:20|min:5|unique:users,username',
       'email' => 'required|email|unique:users,email',
   ];

   $messages =  [
     'required' => 'Este campo es obligatorio',
     'alpha' => 'Este campo debe contener solo letras',
     'numeric'=> 'Este campo debe contener solo números',
     'alpha_dash' => 'Este campo solo puede contener letras, numeros, guiones o guiones bajos',
     'max' => 'Este campo puede tener como máximo :max caracteres',
     'email' => 'Usá el formato nombre@ejemplo.com.',
     'unique' => 'Este dato ya se encuentra registrado',
     'confirmed' => 'Las contraseñas no coinciden',
     'min' => 'Este campo debe tener como mínimo :min caracteres'
   ];

   $validator = \Validator::make(Input::all(),$rules,$messages);

		if($validator->fails()){
			return Redirect::to('/profile')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else{
      $userToUpdate = User::find(\Auth::user()->id);
      $userToUpdate->full_name = $request->input('full_name');
      $userToUpdate->country = $request->input('country');
      $userToUpdate->state = $request->input('state');
      $userToUpdate->email = $request->input('email');
      $userToUpdate->shipping_address = $request->input('shipping_address');
      $userToUpdate->save();
      return redirect('/profile');
    }
  }
}
