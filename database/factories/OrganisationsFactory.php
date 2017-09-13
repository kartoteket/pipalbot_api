<?php

use Faker\Generator as Faker;

$factory->define(App\Organisations::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->catchPhrase,
        'url' => $faker->url,
        'email' => $faker->email,
        'logo' => $faker->imageUrl(640,480),
        'access_group' => $faker->randomNumber,
        'created_by_user' => $faker->randomNumber,
        'verification_score' => $faker->randomFloat(4, 0,1),
        'verified' => $faker->boolean(),
        'verified_by_user' => $faker->randomNumber,
        'verified_at' => $faker->dateTime,
    ];
});
