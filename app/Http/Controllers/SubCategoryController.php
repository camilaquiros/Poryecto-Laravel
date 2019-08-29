<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;

class SubCategoryController extends Controller
{
    public function productsAlimentos()
    {
        $subcategories = SubCategory::orderBy('name', 'ASC')->get();
        $products = Product::where("subcategory_id", "=", "1")
        ->get();
        return view('products', compact('products', 'subcategories'));
    }

    public function productsAccesorios()
    {
        $subcategories = SubCategory::orderBy('name', 'ASC')->get();
        $products = Product::where("subcategory_id", "=", "2")
        ->get();
        return view('products', compact('products', 'subcategories'));
    }

    public function productsEstetica()
    {
        $subcategories = SubCategory::orderBy('name', 'ASC')->get();
        $products = Product::where("subcategory_id", "=", "4")
        ->get();
        return view('products', compact('products', 'subcategories'));
    }

    public function productsSnacks()
    {
        $subcategories = SubCategory::orderBy('name', 'ASC')->get();
        $products = Product::where("subcategory_id", "=", "3")
        ->get();
        return view('products', compact('products', 'subcategories'));
    }

    public function productsSalud()
    {
        $subcategories = SubCategory::orderBy('name', 'ASC')->get();
        $products = Product::where("subcategory_id", "=", "5")
        ->get();
        return view('products', compact('products', 'subcategories'));
    }
}
