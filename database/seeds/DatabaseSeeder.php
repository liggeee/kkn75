<?php

use App\Education;
use App\Gender;
use App\MaritalStatus;
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
        $this->call([
            GenderSeeder::class,
            EducationSeeder::class,
            JobSeeder::class,
            MailSeeder::class,
            MaritalStatusSeeder::class,
            ReligionSeeder::class
        ]);
    }
}
