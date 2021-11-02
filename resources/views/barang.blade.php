<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>d</title>
    </head>
    <body>
        <h2 align=center>Tampilkan Data Barang</h2>
       <center><table border="1" >
            <th>Id</th>
            <th>Nama</th>
             <th>Varian</th>
            <th>Harga Beli</th>
             <th>Harga Jual</th>

 @foreach($brg as $data)

<tr>
      <td>{{$data['id_barang']}}</td>
      <td>{{$data['nama']}}</td>
      <td>{{$data['varian']}}</td>
       <td>{{$data['harga_beli']}}</td>
      <td>{{$data['harga_jual']}}</td>

</tr></center>  
     @endforeach

         </table>
    </body>

</html>
