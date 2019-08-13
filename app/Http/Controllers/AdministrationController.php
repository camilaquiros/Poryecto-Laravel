<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;


class AdministrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('administration.index');
    }

    public function listProducts()
    {
      $products = Product::all();
      return view('administration.products.list', compact("products"));
    }

    public function newProduct()
    {
      $subcategories = SubCategory::orderBy('name')->get();
      $categories = Category::orderBy('name')->get();
      return view('administration.products.new',compact('categories', 'subcategories'));
    }

    public function store(Request $request){
      // Validamos
		$request->validate([
			'title' => 'required',
			'description' => 'required',
			'category_id' => 'required',
      'offer' => 'required | boolean',
      'price' => 'required | numeric',
			'image' => 'required | image',
			'image' => 'required | mimes:jpg,png,jpeg',
      'subcategory_id' => 'required'
		], [
			'title.required' => 'El nombre del producto es obligatorio',
      'description.required' => 'El producto debe tener una descripcion',
			'category_id.required' => 'Selecciona una categoria',
			'price.numeric' => 'El precio solo admite números',
		]);

		// Guardar en DB

		// Forma para guardar #1
		// $movie = new Movie;
		// $movie->title = $request['title'];
		// $movie->rating = $request['rating'];
		// $movie->awards = $request['awards'];
		// $movie->length = $request['length'];
		// $movie->release_date = $request['release_date'];
		// $movie->genre_id = $request['genre_id'];
		// $movie->save();

		// Forma para guardar #2
		// Movie::create([
		// 	'title' => $request['title'],
		// 	'rating' => $request['rating'],
		// 	'awards' => $request['awards'],
		// 	'length' => $request['length'],
		// 	'release_date' => $request['release_date'],
		// 	'genre_id' => $request['genre_id']
		// ]);

		// Forma para guardar #3
		$productSaved = Product::create($request->all());

		$imagen = $request["image"];

		// Armo un nombre único para este archivo
		$imagenFinal = uniqid("img_") . "." . $imagen->extension();

		// Subo el archivo en la carpeta elegida
		$imagen->storePubliclyAs("public/img/Productos", $imagenFinal);

		// Le asigno la imagen a la película que guardamos
		$productSaved->image = $imagenFinal;
		$productSaved->save();

		// Redireccionamos
		return redirect('/administration/products');
    }
}
