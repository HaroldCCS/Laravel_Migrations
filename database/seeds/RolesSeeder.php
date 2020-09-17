<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 11 ; $i++) { 
            DB::table('roles')->insert(['name' => 'rol '.$i,'status_id' => $i,]);
        }
    }
}
