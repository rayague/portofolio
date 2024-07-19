<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Proprio',
            'email' => 'azertyuiop@example.com',
            'password' => bcrypt('azertyuiop'),
        ]);

        \App\Models\Blog::create([

                'title' => 'Advanced JavaScript Techniques',
                'description' => 'Explore advanced techniques in JavaScript for better code performance.',
                'publicDate' => '2024-07-04',
                'image' => 'https://picsum.photos/200?random=4', // Image par défaut
                'file' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        \App\Models\Clients::create([
        
                'name' => 'Alice Johnson',
                'profession' => 'Graphic Designer',
                'description' => 'Alice is an experienced graphic designer with a keen eye for detail.',
                'image' => 'https://picsum.photos/200?random=1', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
    
        ]);

        \App\Models\Collaborateurs::create([
            'firstName' => 'Alice',
            'lastName' => 'Johnson',
            'profession' => 'Software Engineer',
            'image' => 'https://picsum.photos/200?random=1', // Image par défaut
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\notification::create([
            'message' => 'New feature added! Check it out now.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Services::create([
            'title' => 'UI/UX Design',
            'description' => 'Designing user-friendly and aesthetically pleasing interfaces.',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Sociaux::create([
            'facebook' => 'https://facebook.com/example5',
            'linkedin' => 'https://linkedin.com/example5',
            'instagram' => 'https://instagram.com/example5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Profil::create([
            'firstName' => 'John',
            'lastName' => 'Doe',
            'age' => 30,
            'description' => 'Experienced software developer.',
            'diploma' => 'Bachelor of Science in Computer Science',
            'entreprise' => 'Tech Solutions Inc.',
            'image' => 'https://picsum.photos/200',  // Image par défaut
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Contact::create([
            'city' => 'Porto-Novo',
            'bp' => '02 BP 5678',
            'country' => 'Benin',
            'email' => 'support@company.com',
            'telephone' => '+229 21 40 56 78',
            'office' => 'Support Office',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Counter::create([
            'nbrsMessage' => 0,
            'nbrsCollaborateurs' => 0,
            'nbrsClients' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}