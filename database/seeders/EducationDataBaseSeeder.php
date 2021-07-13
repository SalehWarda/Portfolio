<?php

namespace Database\Seeders;

use App\Models\admin\Education;
use Illuminate\Database\Seeder;

class EducationDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Education::create([

            'name_of_specialty'          =>  '  Fine Arts & Graphic Design',
            'degree_of_specialty'        =>  'Master',
            'study_period'               => '2015 - 2016',
            'place_of_study'             =>  'Rochester Institute of Technology, Rochester, NY',
            'about_of_specialty'         =>  'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend ',


             ]);

        Education::create([

            'name_of_specialty'          =>  '  Fine Arts & Graphic Design',
            'degree_of_specialty'        =>  'Bachelor ',
            'study_period'               => '2010 - 2014',
            'place_of_study'             =>  'Rochester Institute of Technology, Rochester, NY',
            'about_of_specialty'         =>  'Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila ',


             ]);
    }
}
