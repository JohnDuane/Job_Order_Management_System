<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's users.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'John',
            'middle_name' => null,
            'last_name' => 'Admin',
            'name' => 'John Admin',
            'email' => 'admin@gmail.com',
            'password' => '03132006',
            'role' => 'admin',
        ]);

        User::create([
            'first_name' => 'Mark',
            'middle_name' => null,
            'last_name' => 'Supervisor',
            'name' => 'Mark Supervisor',
            'email' => 'supervisor@gmail.com',
            'password' => '03132006',
            'role' => 'supervisor',
        ]);

        User::create([
            'first_name' => 'Pedro',
            'middle_name' => null,
            'last_name' => 'Mechanic',
            'name' => 'Pedro Mechanic',
            'email' => 'mechanic@gmail.com',
            'password' => '03132006',
            'role' => 'mechanic',
        ]);
    }
}