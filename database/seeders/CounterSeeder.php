<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Counter::create([
            'school' => 0,
            'university' => 0,
            'alumnus' => 0,
            'student_quota' => 0,
            'industrial_class' => 0,
            'industrial_class_quota' => 0,
        ]);
    }
}
