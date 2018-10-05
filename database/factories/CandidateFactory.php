<?php

use Faker\Generator as Faker;

$factory->define(App\Candidate::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'votes' => 0
    ];
});
