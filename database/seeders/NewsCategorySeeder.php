<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_category')->insert([
            [
                'category' => 'Kelas Industri',
                'sub_category' => 'Kelas Industri Hummatech merupakan program pendidikan yang difokuskan pada persiapan siswa untuk memasuki dan bekerja di sektor industri tertentu setelah lulus. Dalam kelas industri, siswa akan mendapatkan pengetahuan dan keterampilan praktis yang relevan dengan sektor industri yang dituju.',
            ],
            [
                'category' => 'Siswa Magang',
                'sub_category' => 'Program di mana siswa SMK ataupun Mahasiswa memiliki kesempatan untuk bekerja sambil belajar di kantor kami. Program magang ini dirancang untuk memberikan pengalaman praktis kepada siswa, memperluas pemahaman mereka tentang dunia kerja, serta mengembangkan keterampilan kerja dalam bidang IT',
            ]
        ]);
    }
}
