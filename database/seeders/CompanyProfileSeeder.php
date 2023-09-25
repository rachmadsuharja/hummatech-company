<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::create([
            'company_title' => 'PT. Hummatech Digital Indonesia',
            'company_description' => 'Hummasoft merupakan sebuah perusahaan yang bergerak dibidang IT (Information Technology) yang memiliki beberapa divisi layanan, diantaranya: Software Development (Website Application, Desktop Application, and Mobile Application), IT Course, IT Training, IT Research, and IT Services.

            Hummasoft berdiri sejak 21 Mei 2013. Perusahaan Hummasoft ini dibawah naungan badan usaha yang bernama Hummasoft Komputindo dan kemudian beralih menjadi Hummasoft Technology pada Oktober 2019. Proyek-proyek perangkat lunak yang telah dikerjakan oleh perusahaan kami ini dalam lingkup perorangan, perusahaan, instansi sekolah, bahkan lembaga pemerintahan.',
            'company_cover' => 'cover.png'
        ]);
    }
}
