<?php

/**@var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      "title" => $faker->sentence(2),
      "description" => $faker->text(),
      "image" => $faker->imageUrl($width = 640, $height = 480),
      "price" => $faker->randomNumber(2),
      "offer" => false
    ];
});
