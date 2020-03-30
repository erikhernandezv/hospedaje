<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\proveedor;
use Faker\Generator as Faker;

$factory->define(proveedor::class, function (Faker $faker) {

    return [
        'pro_identificacion' => $faker->word,
        'pro_nombre' => $faker->word,
        'pro_idmunicipio' => $faker->randomDigitNotNull,
        'pro_direccion' => $faker->text,
        'pro_telefono' => $faker->text,
        'pro_contacto' => $faker->text,
        'pro_web' => $faker->word,
        'pro_mail' => $faker->word,
        'pro_ctabancaria' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
