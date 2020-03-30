<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\vehiculos_revision;
use Faker\Generator as Faker;

$factory->define(vehiculos_revision::class, function (Faker $faker) {

    return [
        'vre_idvehiculo' => $faker->randomDigitNotNull,
        'vre_fecha' => $faker->word,
        'vre_klms' => $faker->randomDigitNotNull,
        'vre_fectanqueo' => $faker->word,
        'vre_revisionaguaobservacion' => $faker->word,
        'vre_revisionllantasobserva' => $faker->word,
        'vre_revisionfrenosobserva' => $faker->word,
        'vre_revisionaceiteobserva' => $faker->word,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
