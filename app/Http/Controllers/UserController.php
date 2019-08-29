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
    public function show($id)
    {
        $userToFind = User::find($id);
        return view('information', compact('userToFind'));
    }

    public function edit()
    {
        $userToEdit = User::find(\Auth::user()->id);
        return view('editProfile', compact('userToEdit'));
    }

    public function update(Request $request)
    {
        $userToUpdate = User::find(\Auth::user()->id);
        $userToUpdate->full_name = $request->input('full_name');
        $userToUpdate->country = $request->input('country');
        $userToUpdate->state = $request->input('state');
        $userToUpdate->shipping_address = $request->input('shipping_address');
        $userToUpdate->save();
        return redirect('/profile');
    }
}
