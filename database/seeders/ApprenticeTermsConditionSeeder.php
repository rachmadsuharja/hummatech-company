<?php

namespace Database\Seeders;

use App\Models\ApprenticeTermsCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApprenticeTermsConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApprenticeTermsCondition::create([
            'terms_and_conditions' => 'Usia minimum: Perusahaan mungkin menetapkan batasan usia minimum, misalnya 18 tahun atau lebih, untuk anak magang.

            Pendidikan: Perusahaan mungkin meminta calon magang memiliki tingkat pendidikan tertentu, seperti sedang bersekolah di perguruan tinggi atau program pendidikan yang relevan dengan bidang perusahaan.

            Keahlian atau Pengetahuan: Perusahaan dapat meminta calon magang untuk memiliki keahlian atau pengetahuan spesifik yang relevan dengan perusahaan atau bidang industri tertentu. Misalnya, pengetahuan dalam pemrograman komputer, desain grafis, atau kemampuan bahasa asing tertentu.

            Motivasi dan Minat: Calon magang diharapkan untuk menunjukkan minat yang kuat dalam bidang perusahaan dan memiliki motivasi yang jelas untuk mengikuti program magang.
            
            Kemampuan Komunikasi: Perusahaan mungkin mengharapkan calon magang memiliki kemampuan komunikasi yang baik, baik lisan maupun tulisan, serta kemampuan bekerja dalam tim.'
        ]);
    }
}
