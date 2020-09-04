<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TravelPackage;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(TravelPackage::class, function (Faker $faker) {
    return [
        'title' => $faker->city,
        'slug' => $faker->slug,
        'location' => $faker->country,
        'about' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'featured_event' => $faker->word,
        'language' => $faker->countryCode,
        'foods' => $faker->word,
        'departure_date' => now(),
        'duration' => $faker->bothify('#?#?'),
        'type' => $faker->word,
        'price' => $faker->numberBetween($min = 700000, $max = 5000000),
    ];
});
