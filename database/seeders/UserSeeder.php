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
            'name' => 'Usuario 1',
            'email' => 'usuario1@sonafest.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Usuario 2',
            'email' => 'usuario2@sonafest.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Usuario 3',
            'email' => 'usuario3@sonafest.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Usuario 4',
            'email' => 'usuario4@sonafest.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Usuario 5',
            'email' => 'usuario5@sonafest.com',
            'password' => Hash::make('password'),
        ]);
    }
}
