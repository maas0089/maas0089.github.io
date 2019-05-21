<?php

use Faker\Generator as Faker;

$factory->define(\App\Term::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentence,
        'photo'=> $faker->imageUrl(),
    ];
});
