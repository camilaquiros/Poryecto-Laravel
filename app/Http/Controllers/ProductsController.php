<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\SubCategory;

class ProductsController extends Controller
{
  public function index()
	{
		$products = Product::all();
		return view('products', compact('products'));
	}

  public function search(){
    $products = Product::where('title', 'like', '%' . $_GET['query'] . '%')->get();
    return view('products', compact('products'));
  }

  public function show ($id)
  {
  $productToFind = Product::find($id);
  return view('productDetail', compact('productToFind'));
  }

  public function dogs() {
    $products = Product::where("category_id", "=", "1")
      ->get();
    return view('products', compact('products'));
  }

  public function cats() {
    $products = Product::where("category_id", "=", "2")
      ->get();
    return view('products', compact('products'));
  }

  public function food() {
    $products = Product::where("subcategory_id", "=", "1")
      ->get();
    return view('products', compact('products'));
  }

  public function accesories() {
    $products = Product::where("subcategory_id", "=", "2")
      ->get();
    return view('products', compact('products'));
  }

  public function hygiene() {
    $products = Product::where("subcategory_id", "=", "4")
      ->get();
    return view('products', compact('products'));
  }

  public function snacks() {
    $products = Product::where("subcategory_id", "=", "3")
      ->get();
    return view('products', compact('products'));
  }

  public function health() {
    $products = Product::where("subcategory_id", "=", "5")
      ->get();
    return view('products', compact('products'));
  }

}
