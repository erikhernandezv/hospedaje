<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\lineaproducto;
use Faker\Generator as Faker;

$factory->define(lineaproducto::class, function (Faker $faker) {

    return [
        'lin_descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
