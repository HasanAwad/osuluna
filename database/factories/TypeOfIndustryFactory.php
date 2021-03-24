"<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TypeOfIndustry;
use Faker\Generator as Faker;

$factory->define(TypeOfIndustry::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
