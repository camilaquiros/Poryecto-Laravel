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

  public function show ($id)
  {
  $productToFind = Product::find($id);

  return view('productDetail', compact('productToFind'));
  }

}
