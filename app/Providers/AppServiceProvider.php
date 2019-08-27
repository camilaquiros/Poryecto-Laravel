<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Service;
use App\Category;
use App\SubCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      view()->composer('partials.navbar', function($view){
        $products = Product::all();
        $services = Service::all();
        $categories = Category::orderBy("name")->get();
        $subcategories = SubCategory::orderBy("name")->get();
        //attach the categories to the view.
        $view->with(compact('products', 'services', 'categories','subcategories'));
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

    }
}
