<?php

use Faker\Generator as Faker;

$factory->define(App\Presentation::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'type' => $faker->fileExtension,
        'size' => $faker->numberBetween(2000,5000),
        'url' => $faker->url,
        'public' => $faker->boolean,
        'downloads' => $faker->numberBetween(100,500),
        'duration' => $faker->numberBetween(15,60),
        'user_id' => $faker->numberBetween(1,15)
    ];
});
