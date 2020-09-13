<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $listUserID = User::pluck('id');
    return [
        'content' => $faker->text($maxNbChars = 200) ,
        'user_id' => $faker->randomElement($listUserID),
    ];
});
