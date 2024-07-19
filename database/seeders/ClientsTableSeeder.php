<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Alice Johnson',
                'profession' => 'Graphic Designer',
                'description' => 'Alice is an experienced graphic designer with a keen eye for detail.',
                'image' => 'https://picsum.photos/200?random=1', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'profession' => 'Software Engineer',
                'description' => 'Bob is a software engineer specializing in web development.',
                'image' => 'https://picsum.photos/200?random=2', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie Brown',
                'profession' => 'Content Writer',
                'description' => 'Charlie is a content writer with a knack for creating engaging content.',
                'image' => 'https://picsum.photos/200?random=3', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diana Taylor',
                'profession' => 'Marketing Specialist',
                'description' => 'Diana is a marketing specialist with expertise in digital marketing.',
                'image' => 'https://picsum.photos/200?random=4', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}