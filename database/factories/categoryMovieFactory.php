<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\categorymovieModel;
use App\Models\categoriesModel;
use App\Models\moviesModel;
use Faker\Generator as Faker;

$factory->define(categorymovieModel::class, function (Faker $faker) {
	$category= categoriesModel::count();
	$movie= moviesModel::count();
	static $autoincrement=1;
    return [
        'id'=>$autoincrement++,
        'movie_id'=>$faker->numberBetween(1,$movie),
        'category_id'=>$faker->numberBetween(1,$category),
    ];
    
});