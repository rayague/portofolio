<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Web Development',
                'description' => 'Full-stack web development services using the latest technologies.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Building native and cross-platform mobile applications.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Designing user-friendly and aesthetically pleasing interfaces.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Comprehensive digital marketing solutions to increase online presence.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SEO Optimization',
                'description' => 'Optimizing websites to rank higher in search engine results.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cloud Services',
                'description' => 'Providing cloud computing solutions for scalable and reliable infrastructure.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}