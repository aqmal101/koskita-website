<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@koskita.com',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
        ]);
    }
}