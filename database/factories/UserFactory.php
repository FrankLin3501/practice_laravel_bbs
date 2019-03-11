<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    $timestamp = $faker->DateTime();
    return [
        'name' => $faker->name,
        'account' => $faker->unique()->username,
        'password' => '$2y$10$mhri0jItuY4ARQav9AaleeBHCm7O9Uk8nDnK1yNM/BhM4RaMc.Seu', // pa55w0rd
        'created_at' => $timestamp,
        'updated_at' => null
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    $timestamp = $faker->DateTime();
    return [
        'title' => $faker->sentence(),
        'contents' => $faker->realText($faker->randomNumber(3), 2),
        'created_at' => $timestamp,
        'updated_at' => null
    ];
});

$factory->define(App\Message::class, function (Faker $faker) {
    $timestamp = $faker->DateTime();
    return [
        'comment' => $faker->sentence(),
        'created_at' => $timestamp,
        'updated_at' => null
    ];
});
