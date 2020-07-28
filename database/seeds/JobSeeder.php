<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            ['name' => 'Belum/Tidak Bekerja'],
            ['name' => 'Mengurus Rumah Tangga'],
            ['name' => 'Petani/Pekebun'],
            ['name' => 'Pedagang'],
            ['name' => 'Wiraswasta'],
            ['name' => 'Karyawan Honorer'],
            ['name' => 'Pelajar/Mahasiswa'],
            ['name' => 'Guru'],
            ['name' => 'Buruh Harian Lepas'],
            ['name' => 'Buruh tani/Pekebun'],
            ['name' => 'Pegawai Negeri Sipil'],
            ['name' => 'Sopir'],
            ['name' => 'Tentara Nasional Indonesia'],
            ['name' => 'Perangkat Desa'],
            ['name' => 'Tukang Batu'],
            ['name' => 'Pembantu Rumah Tangga'],
            ['name' => 'Karyawan Swasta'],
            ['name' => 'Perawat'],
            ['name' => 'Pensiunan'],
            ['name' => 'Karyawan BUMD'],
            ['name' => 'Peternak'],
            ['name' => 'Bidan'],
            ['name' => 'Dokter'],
            ['name' => 'Buruh Nelayan/Perikanan'],
        ]); 
    }
}
