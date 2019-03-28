<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Test::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker ->name,
        'correo' => $faker -> unique()-> safeEmail,
        'token' => str_random(10),
        'descripcion' => $faker ->text,
        'telefono' => $faker ->phoneNumber,
        'direccion' => $faker ->address,
        'numero' => $faker -> randomDigit,
        'fecha' => \Carbon\Carbon::now()->format('Y-m-d'),//2018-01-30
        'hora' => \Carbon\Carbon::now()-> format('H:i:s'),//'10:00:00'
        'username' =>$faker->userName,
        'hex' => $faker->hexcolor,// color hexadecimal
        'imagen' => $faker->imageUrl(300,300,'cats',true, 'Faker'),
        'aleatorio' => $faker->numberBetween(1,500)

    ];
});
