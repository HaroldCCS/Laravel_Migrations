<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\rentalsModel;
use App\Models\userModel;
use App\Models\statusesModel;
use Faker\Generator as Faker;

$factory->define(rentalsModel::class, function (Faker $faker) {
	$users= userModel::count();
	$statuses= statusesModel::count();
    return [
        'start_date' => now(),
        'end_date'=> $faker->date,
        'total' => $faker->randomFloat(8, 0, 2),
        'user_id' => $faker->numberBetween(1,$users),
        'status_id' => $faker->numberBetween(1,$statuses),

    ];
});
