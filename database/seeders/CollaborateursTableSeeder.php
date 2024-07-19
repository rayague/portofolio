<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollaborateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('collaborateurs')->insert([
            [
                'firstName' => 'Alice',
                'lastName' => 'Johnson',
                'profession' => 'Software Engineer',
                'image' => 'https://picsum.photos/200?random=1', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Bob',
                'lastName' => 'Smith',
                'profession' => 'Project Manager',
                'image' => 'https://picsum.photos/200?random=2', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Charlie',
                'lastName' => 'Brown',
                'profession' => 'UI/UX Designer',
                'image' => 'https://picsum.photos/200?random=3', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Diana',
                'lastName' => 'Taylor',
                'profession' => 'DevOps Engineer',
                'image' => 'https://picsum.photos/200?random=4', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}