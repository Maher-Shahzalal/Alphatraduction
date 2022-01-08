<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(
            [
                'name' => 'ali',
                'user_type' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make("123"),
            ]
        );
    }

}
