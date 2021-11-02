<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>d</title>
    </head>
    <body>
        <h2 align=center>Tampilkan Data Pesanan</h2>
          <center><table border="1">
            <th>Id Pesanan</th>
            <th>Nama Pesanan</th>
            <th>Nama Suplier</th>
            <th>QTY</th>
            <th>Tanggal Pesan</th>

    @foreach($query as $data)
    <tr>
      <td>{{$data['id_pesanan']}}</td>
      <td>{{$data['nama_pesanan']}}</td>
      <td>{{$data['nama_barang']}}</td>
       <td>{{$data['qty']}}</td>
      <td>{{$data['tgl_pesan']}}</td>

   </tr>  </center>
    @endforeach
</table>
    </body>

</html>
