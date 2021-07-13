<?php

namespace Database\Seeders;

use App\Models\admin\Home;
use Illuminate\Database\Seeder;

class HomeDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Home::create([

            'name'  =>  'Kelly Adams',
            'jobs'  =>  'FreeLancer,WebDeveloper,WebDesiner,Programming',
            'photo'  => 'hJszWGt1n6ExNn4CJ9uzfp0lKl5fQk4F8Ipq6k3b.jpg',

        ]);
    }
}
