<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use App\User;
use Faker\Generator as Faker;
use App\Utils\FakeData;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'user_id' => FakeData::randomOrCreate(User::class)->id,
        'name' => $faker->word,
    ];
});
