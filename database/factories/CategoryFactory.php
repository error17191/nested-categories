<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'parent_id' => optional(Category::inRandomOrder()->first())->id,
        'created_at' => $createdAt = $faker->dateTimeThisYear,
        'updated_at' => $createdAt
    ];
});
