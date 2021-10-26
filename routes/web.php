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

/* Route::get('biodata', function(){
    $nama = "indah Rianti";
    $jk = "perempuan";
$tempat_lahir = "Bandung";
    $ttl = " 23 oktober 2004";
    $alamat ="Kp.CIlebak";
    $agama = "islam";
    $hobi = "Mendengarkan musik";

    return "Nama : " .$nama. "<br>jenis kelamin : ".$jk."<br>tempat lahir : ".$tempat_lahir.
    "<br>tempat tanggal lahir : ".$ttl."<br>agama : ".$agama."<br>alamat : ".$alamat."<br>hobi : ".$hobi ;
}); */

/* Route::get('biodata2', function(){
    $nama = "Indah rianti";
 $jk = "Perempuan";
$tempat_lahir = "Bandung";
    $ttl = " 23 Oktober 2004";
    $alamat ="Kp.Cilebak";
    $agama = "Islam";
    $hobi = " Menonton Drama";

    return view('biodata',compact('nama','jk','tempat_lahir','ttl','alamat','agama','hobi'));
}); */

//route parameter
/*Route::get('/input/{nama}/{jk}/{tempat}/{ttl}/{alamat}/{agama}/{hobi}',
      function($nama, $jk, $tempat, $ttl, $alamat, $agama, $hobi){
        echo "Nama Saya : ".$nama.
         "<br>jenis kelamin : ".$jk.
         "<br>Tempat Lahir : ".$tempat.
         "<br>Tanggal Lahir : ".$ttl.
         "<br>Alamat : ".$alamat.
         "<br>agama : ".$agama.
         "<br>hobi : ".$hobi;

});*/

Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'content ketiga']
    ];
    // dd($data);
    return view('blog', compact('data'));
});

//Route::get('siswa', function)//
