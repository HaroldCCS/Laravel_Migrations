<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\categoriesModel;
use App\Models\statusesModel;
use Faker\Generator as Faker;

$factory->define(categoriesModel::class, function (Faker $faker) {
	$status= statusesModel::count();
    return [
    	'name'=> $faker->word,
        'status_id' => $faker->numberBetween(1,$status),
    ];
});
