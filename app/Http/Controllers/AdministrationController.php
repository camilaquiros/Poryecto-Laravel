<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\Service;
use Auth;

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

    //productos ADMIN
    public function listProducts()
    {
      $products = Product::orderBy('title')->get();
      return view('administration.products.list', compact("products"));
    }

    public function newProduct()
    {
      /** $usuarioLog = Auth::user(),
      *if($usuarioLog == null){
      *  return view('index');
    *}
    */

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
      'offer' => 'required',
      'price' => 'required | numeric',
			'image' => 'required | image | mimes:jpg,png,jpeg',
      'subcategory_id' => 'required',
      'rating' => 'required | integer | between:1,5',
		], [
      'required' => 'Este campo es obligatorio',
      'image.mimes' => 'La imagen del producto debe ser un formato jpg,png o jpeg',
 			'numeric' => 'Este campo solo admite numeros',
      'rating.between' => 'Indique un numero del 1 al 5',
      'image.mimes' => 'la imagen debe ser formato: jpg,png o jpeg',
			'price.numeric' => 'El precio solo admite números',
      'integer' => 'Este campo solo admite numeros',
      'rating.digits_between' => 'Debe contener un numero entre 1 y 5',
      'image' => 'Este campo debe ser de tipo imagen'
		]);

		$productSaved = Product::create($request->all());
		$imagen = $request["image"];
		$imagenFinal = uniqid("img_") . "." . $imagen->extension();
    $imagen->storePubliclyAs("public/productos", $imagenFinal); //(arreglar)//
		$productSaved->image = $imagenFinal;
		$productSaved->save();

		return redirect('/administration/products');
    }

    public function editProduct ($id)
	  {
      $productToEdit = Product::find($id);
      $subcategories = SubCategory::orderBy('name')->get();
      $categories = Category::orderBy('name')->get();
		  return view('administration.products.edit', compact('productToEdit', 'categories', 'subcategories'));
	 }

   public function updateProduct ($id, Request $request)
	 {
     $request->validate([
      'title' => 'required',
 			'description' => 'required',
 			'category_id' => 'required',
      'offer' => 'required',
      'price' => 'required | numeric',
      'subcategory_id' => 'required',
      'rating' => 'required | integer | between:1,5',
 		], [
 			'required' => 'Este campo es obligatorio',
      'image.mimes' => 'La imagen del producto debe ser un formato jpg,png o jpeg',
 			'integer' => 'Este campo solo admite numeros',
      'rating.between' => 'Indique un numero del 1 al 5',
 		]);

		$productToUpdate = Product::find($id);
		$productToUpdate->title = $request['title'];
		$productToUpdate->description = $request['description'];
		$productToUpdate->category_id = $request['category_id'];
		$productToUpdate->subcategory_id = $request['subcategory_id'];
		$productToUpdate->offer = $request['offer'];
		$productToUpdate->price = $request['price'];
    $productToUpdate->rating = $request['rating'];
    if($request->hasFile('image')) {
        //compruebo si ya exite la imagen del producto
      if (\Storage::exists($productToUpdate->image))
        {
             // aquí la borro
             \Storage::delete($productToUpdate->image);
        }
        $imagen = $request->file('image');
        $nombreImagen = uniqid("img_") . "." . $imagen->extension();
        $imagen->storePubliclyAs("public/productos", $nombreImagen);
        $productToUpdate->image = $nombreImagen;
    }

		$productToUpdate->save();
		return redirect('/administration/products');
	}

  public function deleteProduct ($id){
    $productToDelete = Product::find($id);
    $productToDelete->delete();

    return redirect('/administration/products');
  }

  public function searchByCategory($id){
    $products = Product::where('category_id', '=', $id)->orderBy('title')->get();
    $category = Category::where('id', $id)->firstOrFail();
    return view('administration.products.ByCategory', compact('products', 'category'));
  }

  public function searchBySubCategory($id){
    $products = Product::where('subcategory_id', '=', $id)->orderBy('category_id')->get();
    $subcategory = SubCategory::where('id', $id)->firstOrFail();
    return view('administration.products.BySubCategory', compact('products', 'subcategory'));
  }

  //servicios ADMIN
  public function listServices()
  {
    $services = Service::all();
    return view('administration.services.list', compact("services"));
  }

  public function newService()
  {
    return view('administration.services.new');
  }

  public function storeService(Request $request){

  $request->validate([
    'name' => 'required',
    'longDescription' => 'required',
    'image' => 'required | image | mimes:jpg,png,jpeg',
  ], [
    'required' => 'Este campo es obligatorio',
    'image.mimes' => 'La imagen debe ser un formato jpg, png o jpeg',
  ]);

  $serviceSaved = Service::create($request->all());
  $imagen = $request["image"];
  $imagenFinal = uniqid("img_") . "." . $imagen->extension();
  $imagen->storePubliclyAs("public/Servicios", $imagenFinal);
  $serviceSaved->image = $imagenFinal;
  $serviceSaved->save();

  return redirect('/administration/services');
  }

  public function editService ($id)
  {
    $serviceToEdit = Service::find($id);
    $categories = Category::orderBy('name')->get();
    return view('administration.services.edit', compact('serviceToEdit', 'categories'));
 }

 public function updateService ($id, Request $request)
 {
  $request->validate([
     'name' => 'required',
     'description' => 'required',
   ], [
     'required' => 'Este campo es obligatorio',
     'alpha_num' => 'Este campo solo admite caracteres alfanumericos'
   ]);

  $serviceToUpdate = Service::find($id);
  $serviceToUpdate->name = $request['name'];
  $serviceToUpdate->longDescription = $request['longDescription'];
  if($request->hasFile('image')) {
      //compruebo si ya exite la imagen del producto
    if (\Storage::exists($serviceToUpdate->image))
      {
           // aquí la borro
           \Storage::delete($serviceToUpdate->image);
      }
      $imagen = $request->file('image');
      $nombreImagen = uniqid("img_") . "." . $imagen->extension();
      $imagen->storePubliclyAs("public/Servicios", $nombreImagen);
      $serviceToUpdate->image = $nombreImagen;
  }
  $serviceToUpdate->save();
  return redirect('/administration/services');
}

public function deleteService ($id){
  $serviceToDelete = Service::find($id);
  $serviceToDelete->delete();

  return redirect('/administration/services');
}

//categories ADMIN//

public function listCategories (){
  $categories = Category::all();
  return view('administration.categories.list', compact('categories'));
}

public function newCategory()
{
  return view('administration.categories.new');
}

public function storeCategory(Request $request){

$request->validate([
  'name' => 'required',
], [
  'name.required' => 'El nombre de la categoria es obligatoria',
]);

$categorySaved = Category::create($request->all());
$categorySaved->save();

return redirect('/administration/categories');
}

public function editCategory ($id)
{
  $categoryToEdit = Category::find($id);
  return view('administration.categories.edit', compact('categoryToEdit'));
}

public function updateCategory ($id, Request $request)
{
$categoryToUpdate = Category::find($id);
$categoryToUpdate->name = $request['name'];
$categoryToUpdate->save();
return redirect('/administration/categories');
}

public function deleteCategory ($id){
$categoryToDelete = Category::find($id);
$categoryToDelete->delete();

return redirect('/administration/categories');
}

//sub-categories ADMIN//

public function listSubcategories (){
  $subcategories = SubCategory::all();
  return view('administration.subcategories.list', compact('subcategories'));
}

public function newSubcategory()
{
  return view('administration.subcategories.new');
}

public function storeSubcategory(Request $request){
  $request->validate([
    'name' => 'required',
  ], [
    'name.required' => 'El nombre de la subcategoria es obligatorio',
  ]);
  $subcategorySaved = SubCategory::create($request->all());
  $subcategorySaved->save();

  return redirect('/administration/subcategories');
}

public function editSubcategory ($id)
{
  $subcategoryToEdit = SubCategory::find($id);
  return view('administration.subcategories.edit', compact('subcategoryToEdit'));
}

public function updateSubcategory ($id, Request $request)
{
$subcategoryToUpdate = SubCategory::find($id);
$subcategoryToUpdate->name = $request['name'];
$subcategoryToUpdate->save();
return redirect('/administration/subcategories');
}

public function deleteSubcategory ($id){
$subcategoryToDelete = SubCategory::find($id);
$subcategoryToDelete->delete();

return redirect('/administration/subcategories');
}

}
