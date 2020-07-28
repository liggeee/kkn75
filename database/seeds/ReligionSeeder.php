<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([
            ['name' => 'Islam'],
            ['name' => 'Katholik'],
            ['name' => 'Hindhu'],
            ['name' => 'Budha'],
            ['name' => 'Kristen'],
            ['name' => 'Kong Hu Chu'],
        ]);
    }
}
