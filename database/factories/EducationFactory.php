<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['Bachelor', 'Masters']),
        'subject' => $faker->randomElement(['Economics', 'Business Administration & Organisational Communication', 'International Sales & Marketing Management', 'Law', 'Business Administration', 'Strategic Communications']),
        'school' => $faker->randomElement(['Copenhagen Business School', 'McGill University']),
    ];
});
