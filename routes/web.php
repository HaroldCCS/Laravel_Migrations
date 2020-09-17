<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('statuses','statusesController');
Route::resource('rentals','rentalsController');
Route::resource('roles','rolesController');
Route::resource('users','usersController');
Route::resource('movies','moviesController');
Route::resource('typestatuses','typestatusesController');
Route::resource('categories','categoriesController');
Route::resource('category_movie','categorymovieController');
Route::resource('movie_rental','movierentalController');