<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\User;
use App\Pet;
use Auth;
use App\Favorite;
class PhotoController extends Controller
{
  public function __construct() {
        $this->middleware(['auth']);
    }
    public function index()
    {
    }

    public function upload(Request $request)
	{
		// Validamos
		$request->validate([
			'photo' => 'required | image | mimes:jpeg,png,jpg,gif,svg',
			// 'poster' => 'required | mimes:jpg,png,jpeg',
		], [
    'required' => 'Este campo es obligatorio',
    'image' =>'Debes subir una imagen',
  ]);

		// Forma para guardar #3
		$photoSaved = Pet::create($request->all());

		$imagen = $request["photo"];

		// Armo un nombre único para este archivo
		$imagenFinal = uniqid("img_") . "." . $imagen->extension();

		// Subo el archivo en la carpeta elegida
		$imagen->storePubliclyAs("public/mascotas", $imagenFinal);

		// Le asigno la imagen a la película que guardamos
		$photoSaved->photo = $imagenFinal;
    $photoSaved->user_id = \Auth::user()->id;
		$photoSaved->save();

		// Redireccionamos
		return redirect('/profile');
	}
  }
