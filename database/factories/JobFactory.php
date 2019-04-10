<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1,5),
        'profession_id' => $faker->numberBetween(1,7),
        'name' => $faker->jobTitle,
        'title' => $faker->jobTitle,
        'description' => $faker->text,
        'start' => $faker->dateTime,
        'close' => $faker->dateTime,
        'salary' => $faker->numberBetween(1000,5000),
        'status' => \App\Job::OPEN,
        'type' => \App\Job::FULLTIME,
        'disability' => $faker->boolean(false)
    ];
});
