<?php

/**@var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use App\SubCategory;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      "title" => $faker->unique()->randomElement([
        'Cucha Perro Adulto',
        'Juguete gatito',
        'Collar rojo bandana',
        'Casa perrito jardin'
      ]),
      "description" => $faker->sentence(3),
      "image" => $faker->image("/storage/Productos", 480, 480, 'cats', false),
      "price" => $faker->randomFloat(2, 0, 7),
      "offer" => $faker->boolean(30),
      "rating" => $faker->numberBetween(0, 5),
    ];
});
