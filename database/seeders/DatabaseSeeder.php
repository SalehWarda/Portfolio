<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([

            LoginDataBaseSeeder::class,
            HomeDataBaseSeeder::class,
            AboutDataBaseSeeder::class,
            SkillDataBaseSeeder::class,
            FactDataBaseSeeder::class,
            SummaryDataBaseSeeder::class,
            EducationDataBaseSeeder::class,
            ExperienceDataBaseSeeder::class,
            SocialMediaSeeder::class,

        ]);
    }
}
