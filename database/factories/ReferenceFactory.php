<?php

use Faker\Generator as Faker;

$factory->define(App\Reference::class, function (Faker $faker) {
    return [
        'code' => $faker->uuid,
        'name' => $faker->name,
        'title' => $faker->name,
        'telephone' => $faker->phoneNumber,
        'email' => $faker->email,
        'company' => $faker->companySuffix,
        'candidate_id' => $faker->numberBetween(1,9),
        'industry_id' => $faker->numberBetween(1,9)
    ];
});