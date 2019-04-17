<?php

use Faker\Generator as Faker;

$factory->define(App\Summary::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'type' => $faker->fileExtension,
        'size' => $faker->numberBetween(2000,5000),
        'downloads' => $faker->numberBetween(100,500),
        'url' => $faker->url,
        'public' => $faker->boolean,
        'candidate_id' => $faker->numberBetween(1,9)
    ];
});

