<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Stock::class, function (Faker $faker) {
    return [
        'manufacturer_id' => $faker->numberBetween(1, 15),
        'model' => $faker->sentence(3),
        'eyesize' => $faker->numberBetween(17, 68),
        'dbl' => $faker->numberBetween(1, 54),
        'colour' => $faker->colorName,
        'price' => $faker->numberBetween(30, 600) * 100,
        'year' => $faker->numberBetween(2014, 2018),
        'code' => $faker->randomFloat(2, 0, 98),
        'checked' => $faker->boolean,
    ];
});
