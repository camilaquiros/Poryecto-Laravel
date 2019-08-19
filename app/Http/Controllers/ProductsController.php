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
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
		return view('products', compact('products', 'subcategories'));
	}

  public function search(){
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $products = Product::where('title', 'like', '%' . $_GET['query'] . '%')->get();
    return view('products', compact('products', 'subcategories'));
  }

  public function show ($id)
  {
  $subcategories = SubCategory::orderBy('name', 'ASC')->get();
  $productToFind = Product::find($id);
  return view('productDetail', compact('productToFind', 'subcategories'));
  }

  public function dogs() {
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $products = Product::where("category_id", "=", "1")
      ->get();
    return view('products', compact('products', 'subcategories'));
  }

  public function cats() {
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $products = Product::where("category_id", "=", "2")
      ->get();
    return view('products', compact('products', 'subcategories'));
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
