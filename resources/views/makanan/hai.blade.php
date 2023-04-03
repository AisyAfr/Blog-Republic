<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}"rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data Makanan</title>
    <style>
        h3{
            text-align: center;
            margin-bottom: 15px;
            margin-top: 15px;
        }
    </style>
</head>
<h3>Daftar Makanan</h3>
<body class= "container">
    @php ($number = 1)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
          </tr>
        </thead>
        @foreach($makanan as $m)
        <tbody>
          <tr>
            <th scope="row">{{$number}}</th>
            <td>{{$m[0]}}</td>
            <td>Rp.{{$m[1]}}</td>
          </tr>
          @php ($number++)
          @endforeach
        </tbody>
      </table>
      <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>