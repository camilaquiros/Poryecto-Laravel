<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function editUserProfile()
  {
    $userToEdit = User::find(auth()->user()->id);
    return view('editProfile', compact('userToEdit'));
 }

 public function updateUserProfile( Request $request)
 {
  $userToUpdate = User::find(auth()->user()->id);
  $userToUpdate->full_name = $request['full_name'];
  $userToUpdate->username = $request['username'];
  $userToUpdate->country = $request['country'];
  $userToUpdate->state = $request['state'];
  $userToUpdate->email = $request['email'];
  $userToUpdate->shipping_address = $request['shipping_address'];
  $userToUpdate->save();
  return redirect('/profile');
}
}
