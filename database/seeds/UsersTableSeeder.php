<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@polnep.ac.id',
                'password' => bcrypt('UptPolnep'),
                'remember_token' => Str::random(10),
                'email_verified_at' => now()
            ]
            );
    }
}
