<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' =>'Alexis Jeansalle',
            'email'=>'ajeansalle@gmail.com',
            'password'=>bcrypt('aces1889')
        ]);

        $user->assignRole('Admin');

        User::factory(99)->create();
    }
}
