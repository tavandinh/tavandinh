<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $listPostID = Post::pluck('id');
    return [
        'content' => $faker->text($maxNbChars = 200) ,
        'post_id' => $faker->randomElement($listPostID),
    ];
});