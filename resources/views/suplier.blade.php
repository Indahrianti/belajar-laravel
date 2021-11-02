<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>d</title>
    </head>
    <body>
        <h2 align=center>Tampilkan Data Suplier</h2>
         <center><table border="1">
            <th>Id Suplier</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
            <th>Kota</th>

    @foreach($query as $data)
    <tr>
      <td>{{$data['id_suplier']}}</td>
      <td>{{$data['nama']}}</td>
      <td>{{$data['alamat']}}</td>
       <td>{{$data['kode_pos']}}</td>
      <td>{{$data['kota']}}</td>

 </tr></center>
     @endforeach

      </table>
    </body>

</html>
