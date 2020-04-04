<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookmark;
use App\User;
use Faker\Generator as Faker;
use App\Utils\FakeData;

$factory->define(Bookmark::class, function (Faker $faker) {
    return [
        'user_id' => FakeData::randomOrCreate(User::class)->id,
        'link' => $faker->url,
        'image' => $faker->boolean ? 'https://picsum.photos/200/300' : null,
        'title' => $faker->optional()->sentence,
        'description' => $faker->optional()->paragraph
    ];
});
