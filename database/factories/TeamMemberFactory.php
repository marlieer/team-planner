<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TeamMember;
use Faker\Generator as Faker;

$factory->define(TeamMember::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'job_title' => $faker->jobTitle,
        'position' => $faker->randomElement(['Consultant', 'Innovation Lead', 'Strategist', 'Designer', 'Tech', 'Creative', 'Administration']),
        'years_with_signifly' => $faker->numberBetween(0, 10),
        'phone' => $faker->phoneNumber,
        'email' => $faker->companyEmail,
        'profile_image' => '/images/profiles/tobias_jorgensen.jpg'
    ];
});
