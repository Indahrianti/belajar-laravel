<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $suplier = [
            ['nama'=>'Indah', 'alamat'=>'Kp Cilebak', 'kode_pos'=>1001, 'kota'=>'Jakarta'],
            ['nama'=>'Astri', 'alamat'=>'Pasawahan', 'kode_pos'=>1002, 'kota'=>'Bandung'],
            ['nama'=>'Fuji', 'alamat'=>'Bojong Citepus', 'kode_pos'=>1003, 'kota'=>'Cirebon'],
            ['nama'=>'Indri', 'alamat'=>'Rancamanyar', 'kode_pos'=>1004, 'kota'=>'Cimahi'],
            ['nama'=>'Suci', 'alamat'=>'Kp cilebak', 'kode_pos'=>1005, 'kota'=>'Bandung']

        ];
        //masukan data ke database
        DB::table('suplier')->insert($suplier);
    }
}
