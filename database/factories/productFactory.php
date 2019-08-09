<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      "id" => $faker->randomDigitNotNull(),
      "title" => $faker->sentence(2),
      "description" => $faker->text()
    ];
});
