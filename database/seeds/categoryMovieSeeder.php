<?php

use Illuminate\Database\Seeder;
use App\Models\categorymovieModel;

class categoryMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Models\categorymovieModel::class)->times(10)->create();
    }
}
