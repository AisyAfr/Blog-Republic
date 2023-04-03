<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recycle Bin</title>

    <!-- CDN -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
</head>
    
    <style>
        .body {
            padding: 6px;
            border-bottom: 1sp solid blue;
        }

        small {
            color: grey;
        }
         */
    </style>
    
</head>

<body class="bg-warning">

    <h1 class="mb-5 mt-3 text-black" style="text-align: center; font-family: 'Times New Roman'; font-size:50px">Recyle<span style="color:rgb(239, 66, 66)">Bin</span></h1>

<div class="container">
    <a href="{{url('posts')}}" class="btn btn-dark text-white" style="font-family: 'Times New Roman'; border-radius:0%">Back to Home</a>
   @foreach($posts as $p)
 <div class="card my-4 bg-white" id="card" style="border-radius: 0%">
   <div class="card-body">  
    <h5 class="card-title text-black " style="font-family: 'Times New Roman'; font-size:25px">{{ $p->title }}</h5>
    <p class="card-text">{{ $p->content }}</p>
    <p class="card-text"><small class="text-muted">Created At {{ date("d M Y H:i", strtotime($p->created_at))}}</small></p>
    <form action="{{url("posts/$p->id/permanents")}}" method='post'>
        @method('DELETE')
        @csrf
    <button class="btn text-white bg-danger" style="font-family: 'Times New Roman'; border-radius:0%">Delete Forever</button>
    </form>
    <form action="{{url("posts/$p->id/undo")}}" method="post">
        @csrf    
        <button class="btn text-white bg-black mt-2" style="font-family: 'Times New Roman'; border-radius:0%">Undo Delete</a>
    </form>
   </div>
 </div>
   @endforeach
 
   
</div>
   <!-- CDN -->
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   

</body>
</html>