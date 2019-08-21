<?php

use App\Product;
use App\Category;
use App\SubCategory;
use App\Service;
use App\User;
use App\Avatar;
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
            //'users',
            'avatars',
        ]);

        // Ejecutar los seeders:
        //$products = factory(Product::class)->times(4)->create();
        $categories = factory(Category::class)->times(2)->create();
        $subcategories = factory(SubCategory::class)->times(5)->create();
        factory(Service::class)->times(4)->create();
        //factory(User::class)->times(10)->create();
        $avatars = factory(Avatar::class)->times(13)->create();

<<<<<<< HEAD
        /*foreach ($products as $oneProduct) {
        $oneProduct->category()->associate($categories->random(1)->first()->id);
        $oneProduct->subcategory()->associate($subcategories->random(1)->first()->id);
        $oneProduct->save();
      };*/
=======
      //   foreach ($products as $oneProduct) {
      //   $oneProduct->category()->associate($categories->random(1)->first()->id);
      //   $oneProduct->subcategory()->associate($subcategories->random(1)->first()->id);
      //   $oneProduct->save();
      // };
>>>>>>> c9b1c36c8caeabda8347106e58f70033dd0265ca

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
