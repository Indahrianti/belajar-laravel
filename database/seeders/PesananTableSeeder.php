<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $pesanan = [
            ['nama_pesanan'=>'Indah', 'nama_barang'=>'Teh Pucuk', 'qty'=>3, 'tgl_pesan'=>'2021-11-01'],
            ['nama_pesanan'=>'Astri', 'nama_barang'=>'Teh Kotak', 'qty'=>2, 'tgl_pesan'=>'2021-11-02'],
            ['nama_pesanan'=>'Fuji', 'nama_barang'=>'Oreo', 'qty'=>2, 'tgl_pesan'=>'2021-11-03'],
            ['nama_pesanan'=>'Indri', 'nama_barang'=>'Indomie', 'qty'=>3, 'tgl_pesan'=>'2021-11-04'],
            ['nama_pesanan'=>'Suci', 'nama_barang'=>'Kopikap', 'qty'=>2, 'tgl_pesan'=>'2021-11-05']

        ];
        //masukan data ke database
        DB::table('pesanan')->insert($pesanan);
    }
}
