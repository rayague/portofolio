<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifications')->insert([
            [
                'message' => 'New feature added! Check it out now.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => 'Reminder: Team meeting at 10 AM tomorrow.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => 'System maintenance scheduled for this weekend.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => 'Congratulations to our Employee of the Month!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}   