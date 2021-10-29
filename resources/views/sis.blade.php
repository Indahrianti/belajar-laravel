<html>
    <head><title>array</title></head>
    <body>
     <center><h2>Menampilkan Data</h2></center>
      <ul>
          @foreach ($data as $data2)
          nis      : {{ $data2['nis']}} <br>
          Nama      : {{ $data2['nama']}} <br>
          kelas      : {{ $data2['kelas']}} <br>
          jk      : {{ $data2['jk']}} <br>
          alamat      : {{ $data2['alamat']}} <br>

      <hr>
          @endforeach
      </ul>
    </body>
</html>
