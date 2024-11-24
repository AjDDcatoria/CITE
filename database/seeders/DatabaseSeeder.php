<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // ? admin account
       User::factory()->create([
           'id' => Str::uuid(),
           'email' => 'john@example.com',
           'password' => Hash::make('password'),
           'verified' => 1,
           'firstname' => 'John',
           'lastname' => 'Doe',
           'gender' => 'male',
           'role' => 'admin',
           'number' => '09876543212',
           'remember_token' => Str::random(10),
       ]);
        User::factory()->count(100)->create();
    }
}