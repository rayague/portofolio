<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'How to Learn Laravel',
                'description' => 'A comprehensive guide on how to start learning Laravel from scratch.',
                'publicDate' => '2024-07-01',
                'image' => 'https://picsum.photos/200?random=1', // Image par défaut
                'file' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Understanding MVC Architecture',
                'description' => 'An in-depth look at the Model-View-Controller architecture and its benefits.',
                'publicDate' => '2024-07-02',
                'image' => 'https://picsum.photos/200?random=2', // Image par défaut
                'file' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Getting Started with React Native',
                'description' => 'Learn the basics of React Native and how to build mobile applications.',
                'publicDate' => '2024-07-03',
                'image' => 'https://picsum.photos/200?random=3', // Image par défaut
                'file' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced JavaScript Techniques',
                'description' => 'Explore advanced techniques in JavaScript for better code performance.',
                'publicDate' => '2024-07-04',
                'image' => 'https://picsum.photos/200?random=4', // Image par défaut
                'file' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}