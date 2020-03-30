<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\alimentacion;
use Faker\Generator as Faker;

$factory->define(alimentacion::class, function (Faker $faker) {

    return [
        'ali_ideps' => $faker->randomDigitNotNull,
        'ali_autorizacion' => $faker->word,
        'ali_nropersonas' => $faker->randomDigitNotNull,
        'ali_desayunosautorizados' => $faker->randomDigitNotNull,
        'ali_almuerzosautorizados' => $faker->randomDigitNotNull,
        'ali_comidasautorizadas' => $faker->randomDigitNotNull,
        'ali_lugarentrega' => $faker->word,
        'ali_observaciones' => $faker->word,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word,
        'ali_idingreso' => $faker->randomDigitNotNull
    ];
});
