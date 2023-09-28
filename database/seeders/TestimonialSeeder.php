<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'alumni_name' => 'Dummy 1',
                'school' => '-',
                'words' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus maximus tellus nec sollicitudin. Duis pulvinar feugiat elementum. Mauris viverra.',
            ],
            [
                'alumni_name' => 'Dummy 2',
                'school' => '-',
                'words' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus maximus tellus nec sollicitudin. Duis pulvinar feugiat elementum. Mauris viverra.',
            ],
            [
                'alumni_name' => 'Dummy 3',
                'school' => '-',
                'words' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus maximus tellus nec sollicitudin. Duis pulvinar feugiat elementum. Mauris viverra.',
            ],
            [
                'alumni_name' => 'Dummy 4',
                'school' => '-',
                'words' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus maximus tellus nec sollicitudin. Duis pulvinar feugiat elementum. Mauris viverra.',
            ],
            [
                'alumni_name' => 'Dummy 5',
                'school' => '-',
                'words' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus maximus tellus nec sollicitudin. Duis pulvinar feugiat elementum. Mauris viverra.',
            ],
            [
                'alumni_name' => 'Dummy 6',
                'school' => '-',
                'words' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus maximus tellus nec sollicitudin. Duis pulvinar feugiat elementum. Mauris viverra.',
            ],
        ]);
    }
}
