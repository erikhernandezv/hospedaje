<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\equipos;
use Faker\Generator as Faker;

$factory->define(equipos::class, function (Faker $faker) {

    return [
        'equ_nombre' => $faker->word,
        'equ_descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
