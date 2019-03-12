<?php

use Faker\Generator as Faker;

$factory->define(App\Assignment::class, function (Faker $faker) {
    return [
        'project_name' => $faker->word,
        'image_url' => $faker->url,
        'description' => $faker->sentence,
    ];
});
