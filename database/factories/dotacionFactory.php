<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\dotacion;
use Faker\Generator as Faker;

$factory->define(dotacion::class, function (Faker $faker) {

    return [
        'dot_detalle' => $faker->word,
        'dot_valorperdidadano' => $faker->word,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
