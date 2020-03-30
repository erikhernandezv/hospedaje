<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\mantenimiento_equipos;
use Faker\Generator as Faker;

$factory->define(mantenimiento_equipos::class, function (Faker $faker) {

    return [
        'meq_idequipo' => $faker->randomDigitNotNull,
        'meq_programada' => $faker->word,
        'meq_fechaprogramada' => $faker->word,
        'med_ejecutada' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
