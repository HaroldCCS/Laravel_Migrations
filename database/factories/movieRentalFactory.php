<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\movierentalModel as Mod;
use App\Models\moviesModel;
use App\Models\rentalsModel;

$factory->define(Mod::class, function (Faker $faker) {
	$rental= rentalsModel::count();
	$movie= moviesModel::count();
	static $increment=1;
    return [
        'id'=>$increment++,
        'movie_id'=>$faker->numberBetween(1,$movie),
        'rental_id'=>$faker->numberBetween(1,$rental),
        'price'=>$faker->randomFloat(7,0,2),
        'observations'=>$faker->sentence,
    ];
});
