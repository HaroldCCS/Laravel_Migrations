<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\moviesModel;
use App\Models\statusesModel;
use App\Models\userModel;

$factory->define(moviesModel::class, function (Faker $faker) {
	$status= statusesModel::count();
	$user= userModel::count();
    return [
        'name'=>$faker->word,
        'description'=>$faker->sentence,
        'user_id'=>$faker->numberBetween(1,$user),
        'status_id'=>$faker->numberBetween(1,$status),
    ];
});
