<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'type' => $faker->word,
        'number' => $faker->word,
        'name' => $faker->word,
        'email' => $faker->word,
        'vin' => $faker->word,
        'date_of_birth' => $faker->word,
        'address' => $faker->text,
        'mobile_phone' => $faker->word,
        'licens_plate' => $faker->word,
        'size' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
