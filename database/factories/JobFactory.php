<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'code' => $faker->uuid,
        'company_id' => $faker->numberBetween(1,10),
        'profession_id' => $faker->numberBetween(1,10),
        'type' => \App\Job::FULLTIME,
        'name' => $faker->jobTitle,
        'title' => $faker->jobTitle,
        'description' => $faker->text,
        'start' => $faker->dateTime,
        'close' => $faker->dateTime,
        'salary' => $faker->numberBetween(1000,5000),
        'disability' => $faker->boolean(false),
        'status' => \App\Job::OPEN
//        'region_id' => $faker->numberBetween(1,10),
//        'district_id' => $faker->numberBetween(1,10)

    ];
});
