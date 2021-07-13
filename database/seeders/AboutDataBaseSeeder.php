<?php

namespace Database\Seeders;

use App\Models\admin\About;
use Illuminate\Database\Seeder;

class AboutDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//
               About::create([

                      'personalInfo'          =>  'I love what I do and I do what my clients love & work with great clients all over the world to create thoughtful and purposeful websites.',
                      'field_or_specialty'    =>  'Web Developer',
                      'about_the_specialty'   => 'A web developer is a programmer who specializes in, or is specifically engaged in, the development of World Wide Web applications using a client–server model.',
                      'name'                  =>  'Kelly Adams',
                      'age'                   => '23',
                      'nationality'           =>  'American',
                      'address'               =>  'New York, USA',
                      'degree'                => 'Senior',
                      'phone'                 =>  '+123 456 7890',
                      'email'                 =>  'email@example.com',
                      'spoken'                => 'English',
                      'freelance'             => 'Available',
                      'photo'                 => 'hJszWGt1n6ExNn4CJ9uzfp0lKl5fQk4F8Ipq6k3b.jpg',

                       ]);
                     }
}
