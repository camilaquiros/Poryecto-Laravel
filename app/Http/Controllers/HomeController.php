<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function productsIndex(){
      $productsIndex = Product::orderBy('id')->take(6)
      ->get();
      $servicesIndex = Service::orderBy('name')->take(4)
      ->get();
      return view ('index', compact('productsIndex', 'servicesIndex' ));
    }

}
