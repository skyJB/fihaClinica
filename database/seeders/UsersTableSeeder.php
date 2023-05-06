<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'rol' => 'ADMINISTRADOR',
        ]);
        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => Hash::make('password456'),
            'rol' => 'ADMINISTRADOR',
        ]);
        User::create([
            'name' => 'Rolo Parra',
            'email' => 'rolo@example.com',
            'password' => Hash::make('password456'),
            'rol' => 'SECRETARIA',
        ]);
        User::create([
            'name' => 'Pato Parra',
            'email' => 'pato@example.com',
            'password' => Hash::make('password456'),
            'rol' => 'PERSONAL_MEDICO',
        ]);
    }
}