<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'name' => 'MBABAZI Jacques',
                'email' => 'mbabazijacques@gmail.com',
                'password' => bcrypt('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
