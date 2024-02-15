<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'User Satu',
                'email' => 'user1@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                
            ]
        )
        //
    }
}
