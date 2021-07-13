<?php

namespace Database\Seeders;

use App\Models\admin\Sumary;
use Illuminate\Database\Seeder;

class SummaryDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sumary::create([

            'name'          =>  'Alice Barkley',
            't_a_y_s'       =>  'Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.',
            'address'       => 'Portland par 127,Orlando, FL',
            'phone'         =>  '(123) 456-7891 ',
            'email'         =>  'alice.barkley@example.com',


             ]);
           }
    }

