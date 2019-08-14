<?php

use App\Product;
use App\Category;
use App\SubCategory;
use App\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //creamos 10 productos FAKE)
        factory(Product::class)->times(10)->create();
        //creamos 2 categorias)
        factory(Category::class)->times(2)->create();
        //cramos 5 subcategorias
        factory(SubCategory::class)->times(5)->create();
        //creamos 4 servicios
        factory(Service::class)->times(4)->create();

    }
}
