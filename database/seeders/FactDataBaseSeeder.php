<?php

namespace Database\Seeders;

use App\Models\admin\Fact;
use Illuminate\Database\Seeder;

class FactDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Fact::create([

            'facts'          =>  'You can see some real few numbers from my portfolio here, which were my own.',
            'clients'        =>  '32',
            'projects'       => '41',
            'h_o_s'          =>  '106',
            'y_o_e'          =>  '4',


             ]);
    }
}
