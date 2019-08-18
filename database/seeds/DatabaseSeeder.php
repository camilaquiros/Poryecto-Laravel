<?php

use App\Product;
use App\Category;
use App\SubCategory;
use App\Service;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([
            //'products',
            'services',
            'categories',
            'subcategories',
            'products_users',
            //'users'
        ]);

        // Ejecutar los seeders:
        $products = factory(Product::class)->times(4)->create();
        $categories = factory(Category::class)->times(2)->create();
        $subcategories = factory(SubCategory::class)->times(5)->create();
        factory(Service::class)->times(4)->create();
        //factory(User::class)->times(10)->create();

        foreach ($products as $oneProduct) {
        $oneProduct->category()->associate($categories->random(1)->first()->id);
        $oneProduct->subcategory()->associate($subcategories->random(1)->first()->id);
        $oneProduct->save();
      };

    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
