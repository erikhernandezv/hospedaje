<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\cajamenor;
use Faker\Generator as Faker;

$factory->define(cajamenor::class, function (Faker $faker) {

    return [
        'caj_idcuidad' => $faker->randomDigitNotNull,
        'caj_fecha' => $faker->word,
        'caj_valor' => $faker->word,
        'caj_pagadoa' => $faker->randomDigitNotNull,
        'caj_concepto' => $faker->word,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
