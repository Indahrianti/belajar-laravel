<html>
    <head><title>array</title></head>
    <body>
      <h2>Menampilkan Data</h2>
      <ul>
          @foreach ($data as $data2)
          id      : {{ $data2['id']}} <br>
          Title      : {{ $data2['title']}} <br>
          Content      : {{ $data2['content']}} <br>
      <hr>
          @endforeach
      </ul>
    </body>
</html>
