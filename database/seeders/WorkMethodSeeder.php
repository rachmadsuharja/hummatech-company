<?php

namespace Database\Seeders;

use App\Models\WorkMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkMethod::create([
            'work_title' => 'Bagaimana Kami Bekerja?',
            'work_description' => 'Professional dalam mengerjakan projek adalah hal mendasar yang kami berikan untuk anda, dari perencanaan pekerjaan, timing, sampai dengan progress dari pengerjaan, sehingga anda tidak perlu khawatir akan pekerjaan yang kami kerjakan.',
        ]);
    }
}
