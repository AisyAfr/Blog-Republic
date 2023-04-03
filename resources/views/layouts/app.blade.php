<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- CDN -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
  
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

<body class="bg-dark">

@include('layouts.app.header')

<div class="container">

    @yield('content')
@include('layouts.app.footer')
    </div> 
    <script>
  if (document.querySelector('.js-alert')) {
    document.querySelectorAll('.js-alert').forEach(function($el) {
      setTimeout(() => {
        $el.classList.remove('show');
      }, 2000);
    });
  }
    </script>
    
    </body>
    </html>
  