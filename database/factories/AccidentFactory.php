<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Accident::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'name' => $faker->name,
        'description' => $faker->text(45),
        'lat' => $faker->randomDigitNotNull,
        'lng' => $faker->randomDigitNotNull,
    ];
});
