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
    if (isset($_GET['orderBy'])) {
      switch ($_GET['orderBy']) {
        case 'PRICE_DESC':
          $products = Product::orderBy('price', 'ASC')->get();
          break;
        case 'PRICE_ASC':
          $products = Product::orderBy('price', 'DESC')->get();
          break;
        case 'RATING_ASC':
          $products = Product::orderBy('rating', 'ASC')->get();
          break;
        case 'RATING_DESC':
          $products = Product::orderBy('rating', 'DESC')->get();
          break;
        default:
          $products = Product::all();
        break;
      }
    } else {
      $products = Product::all();
    }
    $categories = Category::orderBy('name', 'ASC')->get();
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
		return view('products', compact('products', 'subcategories', 'categories'));
	}

  public function listCategory($categoryID){
    $products = Product::where('category_id', '=', $categoryID)->get();
    $categories = Category::orderBy('name', 'ASC')->get();
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    return view('products', compact('products', 'subcategories', 'categories'));
  }

  public function listSubCategory($SubCategoryID){
    $categories = Category::orderBy('name', 'ASC')->get();
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $products = Product::where('subcategory_id', '=', $SubCategoryID)->get();
    return view('products', compact('products', 'subcategories', 'categories'));
  }

  public function listSubCategoryProducts($categoryID, $SubCategoryID){

    $categories = Category::orderBy('name', 'ASC')->get();
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $products = Product::where([
      ['subcategory_id','=', $SubCategoryID],
      ['category_id','=', $categoryID],
      ])->get();
    return view('products', compact('products', 'subcategories', 'categories'));
  }

  public function search(){
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $products = Product::where('title', 'like', '%' . $_GET['query'] . '%')->get();
    return view('products', compact('products', 'subcategories'));
  }

  public function show ($id){
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $productToFind = Product::find($id);
    return view('productDetail', compact('productToFind', 'subcategories'));
  }

  public function offer() {
    $subcategories = SubCategory::orderBy('name', 'ASC')->get();
    $products = Product::where("offer", "=", "1")
    ->orderBy('price', 'ASC')
    ->get();
    return view('products', compact('products', 'subcategories'));
  }
}
