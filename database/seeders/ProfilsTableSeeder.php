<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profils')->insert([
            [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'age' => 30,
                'description' => 'Experienced software developer.',
                'diploma' => 'Bachelor of Science in Computer Science',
                'entreprise' => 'Tech Solutions Inc.',
                'image' => 'https://picsum.photos/200',  // Image par défaut
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Jane',
                'lastName' => 'Smith',
                'age' => 28,
                'description' => 'Project manager with 5 years of experience.',
                'diploma' => 'Master of Business Administration',
                'entreprise' => 'Business Corp.',
                'image' => 'https://picsum.photos/200',  // Image par défaut
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoute plus d'entrées si nécessaire
        ]);
    }
}