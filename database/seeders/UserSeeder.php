<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin_arsipcare',
            'email' => 'admin@arsipcare.id',
            'no_telepon' => '085718192720',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'created_at' => now(),
        ]);

        User::create([
            'username' => 'konservator_budi',
            'email' => 'budi@arsipcare.id',
            'no_telepon' => '081234567890',
            'password' => Hash::make('password123'),
            'role' => 'konservator',
            'created_at' => now(),
        ]);

        User::create([
            'username' => 'farrel_user',
            'email' => 'user@gmail.com',
            'no_telepon' => '089876543210',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'created_at' => now(),
        ]);
    }
}
