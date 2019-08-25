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
  $userToUpdate = User::find(auth()->user()->id)
  ->update($request->all());
  return redirect('/profile');
}
}
