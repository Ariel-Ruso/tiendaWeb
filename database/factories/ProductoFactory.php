<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->name,
        'precio'=> $faker->numberBetween($min= 10, $max= 5000),
        'descripcion'=> $faker->text($maxnbchars= 100),
        
    ];
});
