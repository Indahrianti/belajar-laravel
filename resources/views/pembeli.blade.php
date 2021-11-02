<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>d</title>
    </head>
    <body>
        <h2 align=center>Tampilkan Data Pembeli</h2>
         <center><table border="1" >

            <th>Id Pembeli</th>
            <th>Nama</th>
             <th>Jenis Kelamin</th>
            <th>Alamat</th>
             <th>Kode Pos</th>
              <th>Kota</th>
             <th>Tanggal Lahir</th>


    @foreach($pem as $data)
    <tr>
      <td>{{$data['id_pembeli']}}</td>
      <td>{{$data['nama']}}</td>
      <td>{{$data['jns_kelamin']}}</td>
       <td>{{$data['alamat']}}</td>
      <td>{{$data['kode_pos']}}</td>
        <td>{{$data['kota']}}</td>
      <td>{{$data['tgl_lahir']}}</td>

   </tr></center>
    @endforeach

    </body>

</html>
