<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

  </head>
  <body>
  <header>
  <nav class="navbar-destinasi mb-5">
        <a href="#" class="nav-panel nav-logo">{{ Auth::user()->role == 'admin' ? 'Welcome Admin, ' : 'Welcome ' }}{{Auth::user()->name}}</a>
        <ul class="nav-link">
          <li class="nav-item2"><a href="/data_destinasi">Destinasi</a></li>
          <li class="nav-item2"><a href="/data_kuliner">Kuliner</a></li>
          <li class="nav-item2"><a href="/logout">Logout</a></li>
        </ul>
      </nav>
  </header>
 

  @yield("content")
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>