<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    $term = App\Term::pluck('id')->toArray();

    return [
        'name' => $faker->word,
        'start_date' => $faker->dateTime,
        'end_date'=> $faker->dateTime,
        'term_id'=> $faker->randomElement($term)
    ];
});
