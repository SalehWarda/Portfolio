<?php

namespace Database\Seeders;

use App\Models\admin\Admin;
use Illuminate\Database\Seeder;

class LoginDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([

            'name'  =>  'Admin',
            'photo'  => 'hJszWGt1n6ExNn4CJ9uzfp0lKl5fQk4F8Ipq6k3b.jpg',
            'email'  =>  'admin@gmail.com',
            'password'  =>  bcrypt('admin'),

        ]);
    }
}
