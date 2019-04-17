<?php

use Faker\Generator as Faker;

$factory->define(App\Presentation::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'type' => $faker->fileExtension,
        'size' => $faker->numberBetween(2000,5000),
        'views' => $faker->numberBetween(100,500),
        'url' => $faker->url,
        'public' => $faker->boolean,
        'duration' => $faker->numberBetween(15,60),
        'candidate_id' => $faker->numberBetween(1,9)
    ];
});
