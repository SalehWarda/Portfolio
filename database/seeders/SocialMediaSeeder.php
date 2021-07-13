<?php

namespace Database\Seeders;

use App\Models\admin\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SocialMedia::create([

            'name' => 'facebook',
            'link' => 'https://www.facebook.com/',
            'icon' => 'facebook',
        ]);
        SocialMedia::create([

            'name' => 'twitter',
            'link' => 'https://twitter.com/',
            'icon' => 'twitter',
        ]);
        SocialMedia::create([

            'name' => 'instagram',
            'link' => 'https://www.instagram.com/',
            'icon' => 'instagram',
        ]);
        SocialMedia::create([

            'name' => 'linkedin',
            'link' => 'https://www.linkedin.com/',
            'icon' => 'linkedin',
        ]);
    }
}
