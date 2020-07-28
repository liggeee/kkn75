<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educations')->insert([
            ['name' => 'Tidak/Belum Sekolah'],
            ['name' => 'Belum Tamat SD/Sederajat'],
            ['name' => 'Tamat SD/Sederajat'],
            ['name' => 'SLTA/Sederajat'],
            ['name' => 'Diploma I/II'],
            ['name' => 'Akademi /Diploma III/S. Muda'],
            ['name' => 'Diploma IV/Strata I'],
            ['name' => 'Strata II'],
            ['name' => 'Strata III'],
        ]);
    }
}
