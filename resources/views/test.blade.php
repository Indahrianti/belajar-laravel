<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>d</title>
    </head>
    <body>
        <h2>Tampilkan Data Post</h2>
    @foreach($query as $data)
      <p>Id : {{$data['id']}}</p>
      <p>title : {{$data['title']}}</p>
      <p>Content : {{$data['content']}}</p>

   <hr>   @endforeach

    </body>

</html>
