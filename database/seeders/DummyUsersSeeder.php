<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Marketing',
                'email' => 'marketing@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('12345'),
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
