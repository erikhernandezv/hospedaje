<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\transportador;
use Faker\Generator as Faker;

$factory->define(transportador::class, function (Faker $faker) {

    return [
        'tra_empresa' => $faker->word,
        'tra_contacto' => $faker->word,
        'tra_telefonocontacto' => $faker->word,
        'tra_idciudadorigen' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
