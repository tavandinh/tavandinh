<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    $listUserID = User::pluck('id');
    return [
        'address' => $faker->address,
        'tel' => $faker->phoneNumber,
        'user_id' => $faker->randomElement($listUserID),
        'province' => $faker->city,
    ];
});
