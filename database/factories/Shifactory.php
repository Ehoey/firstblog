<?php

use Faker\Generator as Faker;

$factory->define(APP\shi::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(4),
        'cpmpleted' =>false
    ];
});
