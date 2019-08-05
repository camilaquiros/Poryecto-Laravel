<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
      return view('administration.products.list');
    }

    public function newProduct()
    {
      return view('administration.products.new');
    }
}
