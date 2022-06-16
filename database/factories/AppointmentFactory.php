<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Appointment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => 0 . $faker->randomNumber(9),
        'email' => $faker->unique()->safeEmail,
        'date' => $faker->dateTime('now', 'UTC'),
        'message' => $faker->text(100),
    ];
});
