<?php

use Faker\Generator as Faker;

use App\Treatment;

$factory->define(Treatment::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'amount' => $faker->rand(1,99),
        'description' => $faker->text(20),
        'status' => $faker->randomElement(['ACTIVE','DISABLED']),
    ];
});