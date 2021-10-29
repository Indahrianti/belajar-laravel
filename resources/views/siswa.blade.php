<html>
    <head><title>array</title></head>
    <body>
     <center><h2>Menampilkan Data</h2></center>
      <ul>
          @foreach ($siswas as $siswas2)
          id      : {{ $siswas2['id']}} <br>
          Nama      : {{ $siswas2['nama']}} <br>
          username      : {{ $siswas2['username']}} <br>
          email      : {{ $siswas2['email']}} <br>
          alamat      : {{ $siswas2['alamat']}} <br>
          mapel      :
          @foreach($siswas2 ['mapel'] as $siswas3)
          <ul>
               <li> {{ $siswas3 }} </li>
          </ul>
          @endforeach

      <hr>
          @endforeach
      </ul>
    </body>
</html>
