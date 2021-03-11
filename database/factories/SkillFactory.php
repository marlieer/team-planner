<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['journalism', 'community manager', 'project manager', 'law', 'marketing', 'personnel management', 'storytelling','UX','sales','repositioning','planning','risk management', 'strategic communication','start ups']),
        'category' => $faker->randomElement(['Designer', 'Consultant', 'Innovation']),
    ];
});
