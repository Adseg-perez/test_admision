<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Producto::class, function (Faker $faker) {
    return [
        'name'=>$faker->text($maxNbChars = 15),
        'price'=>$faker->randomFloat
    ];
});
