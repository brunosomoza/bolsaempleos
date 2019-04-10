<?php

use Faker\Generator as Faker;

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => $faker->name,
        'start' => $faker->date(),
        'end' => $faker->date(),
        'functions' => $faker->paragraph,
        'peoples' => $faker->numberBetween(0,5),
        'industry_id' => $faker->numberBetween(1,9),
        'candidate_id' => $faker->numberBetween(1,9)
    ];
});
