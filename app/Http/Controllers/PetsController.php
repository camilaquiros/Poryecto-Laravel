<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pet;
use Auth;

class PetsController extends Controller
{
  public function create()
{
  return view('profile');
}

  public function store(Request $request)
{
  // Validamos
  $request->validate([
    'pets' => 'image',
  ], [
    'pets.required' => 'El archivo subido no es una imagen',
  ]);

  // Forma para guardar #3
  $petSaved = Pet::create($request->all());

  $photo = $request["pets"];

  // Armo un nombre único para este archivo
  $imagenFinal = uniqid("img_") . "." . $imagen->extension();

  // Subo el archivo en la carpeta elegida
  $imagen->storePubliclyAs("public/pets", $imagenFinal);

  // Le asigno la imagen a la película que guardamos
  $movieSaved->pets = $imagenFinal;
  $movieSaved->save();

  // Redireccionamos
  return redirect('/profile');
}

}
