<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        //
        'brand' => $faker->company(),
        'model' => $faker->city(),
        'year' => $faker->year(),
        'maxSpeed' => $faker->numberBetween($min = 180, $max = 240),
        'isAutomatic' => $faker->boolean(),
        'engine' => $faker->randomLetter(),
        'numberOfDoors' => $faker->numberBetween($min = 2, $max = 5)
    ];
});
