<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentence(),
        'client' => $faker->company,
    ];
});
