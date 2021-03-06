<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween($min = 10, $max = 90) ,
        'email' => $faker->unique()->safeEmail,
        'birthday' => $faker->dateTime($max = 'now', $timezone = null),
        'status' => $faker->numberBetween($min = 0, $max = 1) ,
        'password' =>bcrypt('123456'), // password
    ];
});
