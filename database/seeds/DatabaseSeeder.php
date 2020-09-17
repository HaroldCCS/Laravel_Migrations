<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Type_statusesSeeder::class);
        $this->call(StatusesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RentalsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(MoviesSeeder::class);
        $this->call(categoryMovieSeeder::class);
        $this->call(movieRentalSeeder::class);
    }
}
