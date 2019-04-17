<?php

use Faker\Generator as Faker;

$factory->define(App\Point::class, function (Faker $faker) {
    return [
        'experience' => $faker->randomFloat(1,2,7),
        'study' => $faker->randomFloat(1,2,7),
        'portfolio' => $faker->randomFloat(1,2,7),
        'candidate_id' => $faker->numberBetween(1,9)
    ];
});
