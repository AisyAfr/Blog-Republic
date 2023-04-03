<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CDN -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>You Wanna Edit Your Blog?</title>
</head>
<body class="bg-danger">
    <h1 class="mb-3 mt-3 text-black" style="text-align: center; font-family:'Times New Roman';">Edit Your Blog!</h1>
    <div class="container">
        <form method="POST" action='{{url("posts/{$p->slug}")}}' >
            @csrf
            @method('PATCH')
        <div class="mb-3">
            <label style="font-family:'Times New Roman';" for="title" class="form-label text-danger">Title</label>
            <input style="border-radius:0%"type="text" class="form-control p-3" id="title" name="title" placeholder="Put Your Title Here!" value="{{$p->title}}" required>
          </div>
          <div class="mb-3">
            <label style="font-family:'Times New Roman';" for="content" class="form-label text-danger">Your Story</label>
            <textarea style="border-radius:0%;" class="form-control" id="content" rows="5" name="content" value="{{$p->content}}" required>{{$p->content}}</textarea>
          </div>
          <button type="submit" class="btn btn-dark position-absolute top-40 start-50 translate-middle mt-5" style="border-radius: 0%; font-family:'Times New Roman', Times, serif">Publish Your Blog</button>
          <a href="{{url("posts")}}" class="btn btn-light text-black position-absolute bottom-0 start-50 translate-middle-x mb-5" style="font-family: 'Times New Roman'; border-radius:0%">Back To Home</a>
        </form>
    </div>

       <!-- CDN -->
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
</body>
</html>