<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});
*/

/**
 * Factory p/ popular a tab Pessoa;
 */
$factory->define(\CodeAgenda\Entities\Pessoa::class, function ($faker) {
    return [
        'nome'    => $faker->name,
        'apelido' => $faker->firstname,
        'sexo'    => $faker->randomElement(['F','M'])
    ];
});


/**
 * Factory p/ popular a tab Telefone;
 */
$factory->define(\CodeAgenda\Entities\Telefone::class, function ($faker) {
    return [
        'descrição' => $faker->randomElement(['Recidencial','Comercial','Celular','Recados']),
        'codpaís' 	=> $faker->optional(0.7, 55)->numberBetween(1,197),
        'ddd' 		=> $faker->numberBetween(11,91),
        'prefixo' 	=> $faker->randomNumber(4),
        'sufixo' 	=> $faker->randomNumber(4),
        'pessoa_id' => $faker->numberBetween(1,30)
    ];
});
