<?php

namespace Database\Seeders;

use App\Models\Admin\Skill;
use Illuminate\Database\Seeder;

class SkillDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //




        Skill::create([


            'n_o_s'          =>  'HTML',
            'l_o_e'          =>  '90',




             ]);
        Skill::create([


            'n_o_s'          =>  'Bootstrap',
            'l_o_e'          =>  '90',




             ]);
        Skill::create([


            'n_o_s'          =>  'CSS',
            'l_o_e'          =>  '90',




             ]);
        Skill::create([


            'n_o_s'          =>  'PHP',
            'l_o_e'          =>  '90',




             ]);
        Skill::create([


            'n_o_s'          =>  'Java Script',
            'l_o_e'          =>  '90',




             ]);
        Skill::create([


            'n_o_s'          =>  'LARAVEL',
            'l_o_e'          =>  '90',




             ]);



    }
}
