<?php

use Illuminate\Database\Seeder;
use App\Models\categoriesModel;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\categoriesModel::class)->times(10)->create();
    }
}
