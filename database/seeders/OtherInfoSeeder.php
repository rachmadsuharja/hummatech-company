<?php

namespace Database\Seeders;

use App\Models\OtherInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OtherInfo::create([
            'email' => 'hummasoft.tech@gmail.com',
            'start_working' => '08:00',
            'finish_working'=> '16:00',
            'address' => 'Perum Permata Regency 1 blok 10 no 28 Ngijo Karangploso Malang'
        ]);
    }
}
