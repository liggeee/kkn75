<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mails')->insert([
            ['name' => 'Domisili'],
            ['name' => 'Keterangan Usaha'],
            ['name' => 'SKTM'],
            ['name' => 'Kelahiran'],
            ['name' => 'Kematian'],
            ['name' => 'Keterangan Penghasilan'],
            ['name' => 'SKCK'],
        ]);
    }
}
