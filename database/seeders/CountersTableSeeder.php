<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('counters')->insert([
            'nbrsMessage' => 0,
            'nbrsCollaborateurs' => 0,
            'nbrsClients' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}