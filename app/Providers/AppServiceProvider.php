<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        $products = \App\Product::all();
        $services = \App\Service::all();
        $categories = \App\Category::all();
        $subcategories = \App\Subcategory::all();
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
