<?php

use Faker\Generator as Faker;

$factory->define(App\Catalogue::class, function (Faker $faker) {
    return [
        'code' => $faker->uuid,
        'name' => $faker->firstName,
        'type' => $faker->fileExtension,
        'size' => $faker->numberBetween(2000,5000),
        'views' => $faker->numberBetween(100,500),
        'url' => $faker->url,
        'public' => $faker->boolean,
        'candidate_id' => $faker->numberBetween(1,9)
    ];
});
