<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SociauxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sociauxes')->insert([
            [
                'facebook' => 'https://facebook.com/default',
                'linkedin' => 'https://linkedin.com/default',
                'instagram' => 'https://instagram.com/default',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'facebook' => 'https://facebook.com/example1',
                'linkedin' => 'https://linkedin.com/example1',
                'instagram' => 'https://instagram.com/example1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'facebook' => 'https://facebook.com/example2',
                'linkedin' => 'https://linkedin.com/example2',
                'instagram' => 'https://instagram.com/example2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'facebook' => 'https://facebook.com/example3',
                'linkedin' => 'https://linkedin.com/example3',
                'instagram' => 'https://instagram.com/example3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'facebook' => 'https://facebook.com/example4',
                'linkedin' => 'https://linkedin.com/example4',
                'instagram' => 'https://instagram.com/example4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'facebook' => 'https://facebook.com/example5',
                'linkedin' => 'https://linkedin.com/example5',
                'instagram' => 'https://instagram.com/example5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}