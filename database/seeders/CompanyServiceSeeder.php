<?php

namespace Database\Seeders;

use App\Models\CompanyServices;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_services')->insert([
            [
                'services_title' => 'Website Development',
                'services_description' => 'Produksi Website untuk kebutuhan anda, menggunakan teknologi terbaru.',
            ],
            [
                'services_title' => 'Mobile Development',
                'services_description' => 'Produksi aplikasi mobile baik itu android ataupun IOS sesuai dengan kebutuhan.',
            ],
            [
                'services_title' => 'Pelatihan dan Pengembangan',
                'services_description' => 'Pelatihan pemrograman yang ditujukan untuk meningkatkan skill dalam dunia IT',
            ],
            [
                'services_title' => 'Dukungan Pendidikan SMK',
                'services_description' => 'Bekerjasama dengan SMK untuk meningkatkan pendidikan di sekolah sesuai dengan kebutuhan',
            ]
        ]);
    }
}
