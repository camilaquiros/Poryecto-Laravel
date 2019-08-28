<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Avatar;
use Faker\Generator as Faker;

$factory->define(Avatar::class, function (Faker $faker) {
    return [
      "url" => $faker->unique()->randomElement([
        'chicaCorto.jpg',
        'chicaCortoM.jpg',
        'chicaLargo.jpg',
        'conBarba.jpg',
        'gatoNaranja.jpg',
        'pelaM.jpg',
        'perro1.jpg',
        'señor.jpg',
        'señora.jpg',
        'sinBarba.jpg',
        'sinBarbaM.jpg',
        'chicoLargo.jpg',
        'perro2.jpg',
        'chicaColorada.jpg',
        'gatoGris.jpg'
      ]),
    ];
});
