<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ingresos;
use Faker\Generator as Faker;

$factory->define(ingresos::class, function (Faker $faker) {

    return [
        'ing_idpersona' => $faker->randomDigitNotNull,
        'ing_habitacionasignada' => $faker->word,
        'ing_horaingreso' => $faker->word,
        'ing_ideps' => $faker->randomDigitNotNull,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
