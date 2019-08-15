<?php

/**@var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
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
      "image" => $faker->imageUrl($width = 640, $height = 480),
      "price" => $faker->randomNumber(2),
      "offer" => false
    ];
});
