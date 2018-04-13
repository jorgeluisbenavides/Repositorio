<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
$title = $faker->sentence(4); //sentence:oracion, de 4 palabras
    return [
        'folio'  => rand(1,30), //crea dato aleatorio
        //'slug' => str_slug($title),
        'name' => $faker->text(10),
        'last_name_one' => $faker->text(20),
        'last_name_two' => $faker->text(20),
        'address' => $faker->text(100),
        'references' => $faker->text(200),
        'age' => rand(1,99),
        'cell_phone'  => rand(1,30), //crea dato aleatorio
        'home_phone'  => rand(1,30), //crea dato aleatorio
        'sex' => $faker->randomElement(['Masculino','Femenino']),
        'civil_state' => $faker->randomElement(['Soltero','Casado','Viudo']),
        'img_name' => $faker->imageUrl($width = 1200, $height=400),
        'occupation_id' => rand(1,2),
		'status' => $faker->randomElement(['ACTIVE','DISABLED']),
    ];
});
