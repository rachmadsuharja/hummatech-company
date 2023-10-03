<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('welcome_sliders')->insert([
            [
                'slider_cover' => 'cover1.jpg',
                'slider_title' => 'Konsultasikan Kebutuhan Software Anda'
            ],
            [
                'slider_cover' => 'cover2.png',
                'slider_title' => 'Jadilah Expert Programmer'
            ],
        ]);
    }
}
