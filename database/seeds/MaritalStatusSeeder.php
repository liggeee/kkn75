<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marital_status')->insert([
            ['name' => 'Belum Kawin'],
            ['name' => 'Kawin'],
            ['name' => 'Cerai Mati'],
            ['name' => 'Cerai Hidup'],
        ]);
    }
}
