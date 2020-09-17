<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\userModel;
use Illuminate\Support\Facades\Hash;
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

$factory->define(App\Models\userModel::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make($faker->password),
        'status_id' => $faker->numberBetween(1,10),
        'role_id' => $faker->numberBetween(1,10),

    ];
});
