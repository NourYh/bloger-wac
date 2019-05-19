<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Type, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
