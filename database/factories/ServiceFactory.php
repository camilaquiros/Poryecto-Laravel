<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
      "name" => $faker->unique()->randomElement([
        'Clinica veterinaria',
        'Peluqueria Canina',
        'Entrenador personal para tu mascota',
        'Estudios especiales'
      ]),
      "description" => $faker->sentence(2),
      "longDescription" => $faker -> paragraphs($nb = 3, $asText = false)
      "image" => $faker->imageUrl($width = 640, $height = 480),
    ];
});
