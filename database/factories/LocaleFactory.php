<?php

use Faker\Generator as Faker;

$factory->define(App\Locale::class, function (Faker $faker) {
    return [
        'name' => $faker->locale,
        'region_id' => 1
    ];
});
