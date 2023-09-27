<?php

namespace Database\Seeders;

use App\Models\Sosmed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SosmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sosmed::create([
            'instagram' => 'https://www.instagram.com/hummasoft',
            'facebook' => 'https://www.facebook.com/hummasoft',
        ]);
    }
}
