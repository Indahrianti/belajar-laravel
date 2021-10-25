<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hal2', function(){
    return "<h1>selamat datang di halaman kedua</h1>";
});

Route::get('biodata', function(){
    $nama = "indah Rianti";
    $jk = "perempuan";
$tempat_lahir = "Bandung";
    $ttl = " 23 oktober 2004";
    $alamat ="Kp.CIlebak";
    $agama = "islam";
    $hobi = "Mendengarkan musik";

    return "Nama : " .$nama. "<br>jenis kelamin : ".$jk."<br>tempat lahir : ".$tempat_lahir.
    "<br>tempat tanggal lahir : ".$ttl."<br>agama : ".$agama."<br>alamat : ".$alamat."<br>hobi : ".$hobi ;
});

Route::get('biodata2', function(){
    $nama = "Indah rianti";
 $jk = "Perempuan";
$tempat_lahir = "Bandung";
    $ttl = " 23 Oktober 2004";
    $alamat ="Kp.Cilebak";
    $agama = "Islam";
    $hobi = " Menonton Drama";

    return view('biodata',compact('nama','jk','tempat_lahir','ttl','alamat','agama','hobi'));
});
