<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'ahmadgoo49@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        $user->roles()->attach(1);
    }
}
