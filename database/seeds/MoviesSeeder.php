<?php

use Illuminate\Database\Seeder;
use App\Models\moviesModel;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\moviesModel::class)->times(10)->create();
    }
}
