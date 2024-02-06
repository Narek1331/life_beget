<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'test_user',
                'email' => 'test_user@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );

        User::create(
            [
                'name' => 'test_user_2',
                'email' => 'test_user_2@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );

        User::create(
            [
                'name' => 'test_user_3',
                'email' => 'test_user_3@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );
    }
}
