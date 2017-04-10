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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    $name = $faker->firstName;
    return [
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'account_id' => $name,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
