<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'course' => $faker->word,
        'grade'=> $faker->randomDigit,
        'ec'=> $faker->randomDigit
    ];
});
