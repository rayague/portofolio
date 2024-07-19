<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'city' => 'Cotonou',
                'bp' => '01 BP 1234',
                'country' => 'Benin',
                'email' => 'contact@company.com',
                'telephone' => '+229 21 30 12 34',
                'office' => 'Head Office',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city' => 'Porto-Novo',
                'bp' => '02 BP 5678',
                'country' => 'Benin',
                'email' => 'support@company.com',
                'telephone' => '+229 21 40 56 78',
                'office' => 'Support Office',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoute plus d'entrées si nécessaire
        ]);
    }
}