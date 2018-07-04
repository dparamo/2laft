<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nit_entidad' => $faker->nit_entidad,
        'razon_social' => $faker->razon_social,
        'direccion' => $faker->direccion,
        'telefono' => $faker->telefono,
        'celular' => $faker->celular,
        'fecha_resolucion' => $faker->fecha_resolucion,
        'fecha_notificacion' => $faker->fecha_notificacion,
        'anios_licencia' => $faker->anios_licencia,
        'fecha_vencimiento' => $faker->fecha_vencimiento,
        'id_tipo_servicio' => $faker->id_tipo_servicio,
        'id_departamento' => $faker->id_departamento,
        'id_ciudad' => $faker->id_ciudad,
        'tipo_persona' => $faker->tipo_persona,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
