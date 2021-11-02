<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>d</title>
    </head>
    <body>
        <h2 align=center>Tampilkan Data Pembelian</h2>
           <center><table border="1" >
            <th>Id Pembelian</th>
            <th>Nama Barang</th>
            <th>Nama Suplier</th>
            <th>QTY</th>
            <th>Tanggal</th>


    @foreach($query as $data)
    <tr>
      <td>{{$data['id_pembelian']}}</td>
      <td>{{$data['nama_barang']}}</td>
      <td>{{$data['nama_suplier']}}</td>
      <td>{{$data['qty']}}</td>
      <td>{{$data['tanggal']}}</td>

    </tr></center>
    @endforeach

    </body>

</html>
