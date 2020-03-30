<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\vehiculos;
use Faker\Generator as Faker;

$factory->define(vehiculos::class, function (Faker $faker) {

    return [
        'vei_marca' => $faker->word,
        'vei_modelo' => $faker->word,
        'vei_placa' => $faker->word,
        'vei_numerochasis' => $faker->word,
        'vei_fecpoliza' => $faker->word,
        'vei_feclimitesoat' => $faker->word,
        'vei_feclimitetecnomecanica' => $faker->word,
        'created_at' => $faker->word,
        'updated_at' => $faker->word,
        'deleted_at' => $faker->word
    ];
});
