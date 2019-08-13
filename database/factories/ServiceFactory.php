<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        "service_name" => $faker->jobTitle,
        "email" => $faker->email,
        "address" => $faker->address,
        "contact_phone" => $faker->phoneNumber,
        "image" => $faker->image(),
        "services_description" => $faker->sentence(9),
    ];
});
