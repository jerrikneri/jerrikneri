<?php

use Faker\Generator as Faker;
use App\DiaryEntry;

$factory->define(DiaryEntry::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence(),
        'content' => $faker->paragraph()
    ];
});
