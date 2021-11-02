<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $barang = [
            ['nama'=>'Teh Pucuk', 'varian'=>'minuman', 'harga_beli'=>2500, 'harga_jual'=>3000],
            ['nama'=>'Teh Kotak', 'varian'=>'minuman', 'harga_beli'=>3500, 'harga_jual'=>4000],
            ['nama'=>'Oreo', 'varian'=>'makanan', 'harga_beli'=>1500, 'harga_jual'=>2000],
            ['nama'=>'Indomie', 'varian'=>'makanan', 'harga_beli'=>2000, 'harga_jual'=>2500],
            ['nama'=>'Kopikap', 'varian'=>'minuman', 'harga_beli'=>500, 'harga_jual'=>1000],

        ];
        //masukan data ke database
        DB::table('barang')->insert($barang);
    }
}
