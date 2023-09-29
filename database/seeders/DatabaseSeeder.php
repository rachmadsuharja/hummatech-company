<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CompanyProfileSeeder::class,
            CompanyServiceSeeder::class,
            WorkMethodSeeder::class,
            SosmedSeeder::class,
            OtherInfoSeeder::class,
            TestimonialSeeder::class,
            CounterSeeder::class,
        ]);
    }
}
