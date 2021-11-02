<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pem = [
            ['nama'=>'Indah', 'jns_kelamin'=>'perempuan', 'alamat'=>'Kp Cilebak', 'kode_pos'=>1001, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-10-23'],
            ['nama'=>'Astri', 'jns_kelamin'=>'perempuan', 'alamat'=>'Pasawahan', 'kode_pos'=>1002, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-11-10'],
            ['nama'=>'Fuji', 'jns_kelamin'=>'perempuan', 'alamat'=>'Bojong Citepus', 'kode_pos'=>1003, 'kota'=>'Bandung', 'tgl_lahir'=>'2005-06-11'],
            ['nama'=>'Indri', 'jns_kelamin'=>'perempuan', 'alamat'=>'Rancamanyar', 'kode_pos'=>1004, 'kota'=>'Bandung', 'tgl_lahir'=>'2003-08-02'],
            ['nama'=>'Suci', 'jns_kelamin'=>'perempuan', 'alamat'=>'Kp Cilebak', 'kode_pos'=>1005, 'kota'=>'Bandung', 'tgl_lahir'=>'2004-04-07']

        ];
        //masukan data ke database
        DB::table('pembeli')->insert($pem);
    }
}
