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
                'description' => 'Explore advanced techniques in JavaScript for better code performance. illum expedita esse laborum cumque doloribus? Corporis aliquam veniam ratione ',
                'publicDate' => '2024-07-04',
                'image' => '', // Image par défaut
                'file' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        \App\Models\Clients::create([
        
                'name' => 'Alice Johnson',
                'profession' => 'Graphic Designer',
                'description' => 'Alice is an experienced graphic designer with  minus! Repellat i quas ad. 
                 illum expedita esse laborum cumque doloribus? Corporis aliquam veniam ratione 
                 at officia eius maxime ab autem assumenda. Assumenda distinctio omnis atque.',
                'image' => '', // Image par défaut
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
    
        ]);

        \App\Models\Collaborateurs::create([
            'nom' => 'Alice',
            'prenoms' => 'Johnson',
            'profession' => 'Software Engineer',
            'image' => '', // Image par défaut
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\notification::create([
            'name' => 'Proprio',
            'email' => 'azertyuiop@example.com',
            'subject' => 'Demande de stage',
            'message' => 'New feature added! Check it out now. Lorem ipsum dolor sit, 
            amet consectetur adipisicing elit. asi magni dolore, eius vel quam tempore 
            dolorum molestias alias expedita qui labore quia? Illum ducimus harum sequi 
            at officia eius maxime ab autem assumenda. Assumenda distinctio omnis atque.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Services::create([
            'title' => 'UI/UX Design',
            'description' => 'Designing user-friendly and aesthetically pleasing interfaces. 
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum quo doloremque, 
            ipsa facilis perferendis similique itaque beatae ab hic amet vel voluptatibus minus! Repellat 
            ipsam dolorem ipsa, necessitatibus officia voluptas nihil expedita animi itaque blanditiis quas ad. Iste, maxime
            . Explicabo, placeat magnam odit nihil veritatis aliquam ipsa harum dolorum labore dolore natus ad tempore animi quasi 
            m eligendi omnis sapiente adipisci eveniet quasi magni dolore, eius vel quam tempore 
            dolorum molestias alias expedita qui labore quia? Illum ducimus harum sequi at officia 
            eius maxime ab autem assumenda. Assumenda distinctio omnis atque.',
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
            'description' => 'Experienced software developer. Lorem ipsum dolor sit, 
            amet consectetur adipisicing elit. Laborum quo doloremque, ipsa 
            facilis perferendis similique itaque beatae ab hic amet vel voluptatibus 
            minus! Repellat ipsam dolorem ipsa, necessitatibus officia voluptas nihil 
            expedita animi itaque blanditiis quas ad. Iste, maxime. Explicabo, placeat 
            magnam odit nihil veritatis aliquam ipsa harum dolorum labore dolore natus 
            ad tempore animi quasi in debitis reprehenderit rem possimus molestiae 
            repellendus. Animi libero earum laudantium molestias amet illo dolorem officia, 
            cum, facilis, error esse nostrum. Reprehenderit tenetur nam eveniet ipsa 
            iure eum iusto illo omnis vitae earum nesciunt quidem, architecto sunt 
            recusandae atque corporis nostrum ea autem. Nulla debitis asperiores excepturi b
            eatae laborum eligendi omnis sapiente adipisci eveniet quasi magni dolore, 
            eius vel quam tempore dolorum molestias alias expedita qui labore quia? 
            Illum ducimus harum sequi at officia eius maxime ab autem assumenda. Assumenda distinctio omnis atque.',
            'diploma' => 'Bachelor of Science in Computer Science',
            'entreprise' => 'Tech Solutions Inc.',
            'image' => '',  // Image par défaut
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