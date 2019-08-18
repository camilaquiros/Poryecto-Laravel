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
        //factory(Product::class)->times(4)->create();
        factory(Category::class)->times(2)->create();
        factory(SubCategory::class)->times(5)->create();
        factory(Service::class)->times(4)->create();
        //factory(User::class)->times(10)->create();

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
