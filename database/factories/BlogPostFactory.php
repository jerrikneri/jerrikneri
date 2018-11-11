<?php

use Faker\Generator as Faker;
use App\BlogPost;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence(),
        'tag' => $faker->word(),
        'content' => $faker->paragraph(),
        'image' => '/images/ls.jpg'
    ];
});
