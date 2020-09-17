<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\userModel;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\userModel::class)->times(10)->create();

        /*
        for ($i=1; $i < 11; $i++) { 
            $user = new User;
            $user->name = $faker ->name;
            $user->email = $faker ->email;
            $user->password = Hash::make('test123');
            $user->status_id = $i;
            $user->save();
        }
        $faker = Faker::create();
        for ($i=1; $i < 11 ; $i++) { 
            DB::table('users')->insert([
                'name' => $faker ->name,
                'email' => $faker ->email,
                'password' => Hash::make('test123'),
                'status_id' => $i,
                'role_id' => $i,]);
        }*/
    }
}
