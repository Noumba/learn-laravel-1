<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Task;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'is_complete' => $faker->boolean,
    ];
});