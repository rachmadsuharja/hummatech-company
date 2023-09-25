<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'profile' => 'default.png',
            'name' => 'Hummatech',
            'role' => 'admin',
            'email' => 'hummasoft.tech@gmail.com',
            'password' => Hash::make('hummatech2023'),
        ]);
    }
}
