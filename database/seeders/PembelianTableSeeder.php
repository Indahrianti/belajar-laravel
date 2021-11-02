<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang'=>'Teh Pucuk', 'nama_suplier'=>'Indah', 'qty'=>2, 'tanggal'=>'2021-11-01'],
            ['nama_barang'=>'Teh Kotak', 'nama_suplier'=>'Astri', 'qty'=>3, 'tanggal'=>'2021-10-31'],
            ['nama_barang'=>'Oreo', 'nama_suplier'=>'Fuji', 'qty'=>4, 'tanggal'=>'2021-10-30'],
            ['nama_barang'=>'Indomie', 'nama_suplier'=>'Indri', 'qty'=>3, 'tanggal'=>'2021-10-29'],
            ['nama_barang'=>'Kopikap', 'nama_suplier'=>'Suci', 'qty'=>2, 'tanggal'=>'2021-10-28']

        ];
        //masukan data ke database
        DB::table('pembelian')->insert($pembelian);
    }
}
