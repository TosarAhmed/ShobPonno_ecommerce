<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'cat_name' => $faker->word,
        'cat_desc' => $faker->sentence,
        'status' => rand(0,1)
    ];
});
