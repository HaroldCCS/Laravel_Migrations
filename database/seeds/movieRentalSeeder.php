<?php

use Illuminate\Database\Seeder;
use App\Models\movierentalModel;

class movieRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Models\movierentalModel::class)->times(10)->create();
    }
}
