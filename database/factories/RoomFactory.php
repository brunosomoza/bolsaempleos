<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'minutes' => $faker->numberBetween(20,80),
        'recorded' => $faker->boolean,
        'url' => $faker->url,
        'clave' => $faker->word,
        'candidate_id' => $faker->numberBetween(1,10),
        'job_id' => $faker->numberBetween(1,10)

    ];
});
