<?php

use Illuminate\Database\Seeder;
use App\Models\rentalsModel;

class RentalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\rentalsModel::class)->times(10)->create();
    }
}
