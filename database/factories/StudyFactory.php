<?php

use Faker\Generator as Faker;

$factory->define(App\Study::class, function (Faker $faker) {
    return [
        'code' => $faker->uuid,
        'candidate_id' => $faker->numberBetween(1,9),
        'school_id' => $faker->numberBetween(1,9),
        'status' => \App\Study::TERMINADO,
        'level' => $faker->randomElement([ \App\Study::MAESTRIA, \App\Study::DOCTORADO , \App\Study::UNIVERSIDAD , \App\Study::INSTITUTO ]),
        'name' => $faker->word,
        'start' => $faker->date(),
        'end' => $faker->date()
    ];
});
