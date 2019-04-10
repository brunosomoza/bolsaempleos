<?php

use Faker\Generator as Faker;

$factory->define(App\Reference::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => $faker->name,
        'telephone' => $faker->phoneNumber,
        'email' => $faker->email,
        'company' => $faker->companySuffix,
        'industry_id' => $faker->numberBetween(1,9),
        'candidate_id' => $faker->numberBetween(1,9)
    ];
});

