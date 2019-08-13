<?php

use App\Product;
use App\Category;
use App\SubCategory;
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
        factory(SubCategory::class)->times(5)->create();
    }
}
