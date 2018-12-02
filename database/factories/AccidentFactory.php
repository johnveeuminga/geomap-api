<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Accident::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'name' => $faker->name,
        'description' => $faker->text(45),
        'lat' => $faker->randomFloat(7, 15, 16),
        'lng' => $faker->randomFloat(7, 120, 121),
        'city'  => 'Baguio',
        'street'  => 'Chrome Street',
        'region'  => 'Cordillera Administrative Region',
        'state'   => 'Benguet'
    ];
});
