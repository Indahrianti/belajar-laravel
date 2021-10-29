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
// route parameter optional
/*Route::get('/input/{nama?}/{kelas?}', function($nama=null, $kelas=null){
    echo"Nama saya : ".$nama;
    echo"<br>";
    echo"Kelas : ".$kelas;
});*/

/*Route::get('/input/{nama?}/{mtk?}/{indo?}/{pro?}/{ingg?}',
function($nama=null, $mtk=0, $indo=0, $pro=0, $ingg=0){
   echo "Nama : ".$nama;
   echo "<br>Matematika : ".$mtk;
   echo "<br>Indonesia : ".$indo;
   echo "<br>Produktif : ".$pro;
   echo "<br>Inggris : ".$ingg;

//Untuk Menghitung Rata-Rata
$tot = $mtk+$indo+$pro+$ingg;
$rata = $tot / 4 ;
   echo "<br>Rata-rata : ".$rata;
   echo "<br>Grade : ";
   if ($rata >= 90) {
      echo "A";
}else if($rata >= 80){
   echo "B";

}else if($rata >= 70){
    echo "C";
}else{
    echo "D";
}
});*/

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}',
function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    } else if ($makanan && $minuman != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
             }

});

/*Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'content ketiga']
    ];
    // dd($data);
    return view('blog', compact('data'));
});*/

/*Route::get('sis', function(){
    $data = [
        ['nis' => 1, 'nama' => 'Alya', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 2, 'nama' => 'Anggi', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 3, 'nama' => 'Anisa', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 4, 'nama' => 'Arif', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 5, 'nama' => 'Astri', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 6, 'nama' => 'Azhar', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 7, 'nama' => 'Aziz', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 8, 'nama' => 'Bima', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 9, 'nama' => 'Cindy', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung'],
        ['nis' => 10, 'nama' => 'Dinda', 'kelas' => ' XII RPL3', 'jk' => 'Perempuan', 'alamat' => 'Bandung']
    ];
    return view('sis', compact('data'));
});*/
/*Route::get('siswa', function(){
    $siswas = [
        ['id' => 1,
         'nama' => 'Aditya',
         'username' => 'aditya',
         'email' => 'aditya@gmal.com',
         'alamat' => 'Bandung',
         'mapel' => [
                     'mapel1' => 'Bahasa indonesia',
                     'mapel2' => 'Bahasa inggris',
                     'mapel3' => 'Bahasa jepang',
                     'mapel4' => 'Bahasa Belanda'
                    ]

                 ],
        ];
        return view('siswa', compact('siswas'));
});*/

/*Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}',
function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    } else if ($makanan && $minuman != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
             }

});*/
