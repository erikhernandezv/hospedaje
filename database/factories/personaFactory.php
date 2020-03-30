<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\persona;
use Faker\Generator as Faker;

$factory->define(persona::class, function (Faker $faker) {

    return [
        'per_nombre1' => $faker->word,
        'per_nombre2' => $faker->word,
        'per_apellido1' => $faker->word,
        'per_apellido2' => $faker->word,
        'per_tipdoc' => $faker->randomDigitNotNull,
        'per_numdoc' => $faker->word,
        'per_direccion' => $faker->word,
        'per_telefono' => $faker->word,
        'per_idmunicipio' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
