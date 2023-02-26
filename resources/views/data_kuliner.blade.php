<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kuliner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

  </head>
  <header>
  <nav class="navbar-destinasi mb-5">
        <a href="" class="nav-panel nav-logo">ADMIN</a>
        <ul class="nav-link">
          <li class="nav-item2"><a href="/data_destinasi">Destinasi</a></li>
          <li class="nav-item2"><a href="/data_kuliner">Kuliner</a></li>
          <li class="nav-item2"><a href="#">Logout</a></li>
        </ul>
      </nav>
  </header>
  <body>
    <h1 class="text-center mb-4">Data Kuliner</h1>
    <div class="container">
    <a href="/tambahkuliner" class="btn btn-success">+ Tambah Kuliner</a>
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kategori</th>
      <th scope="col">Foto</th>
      <th scope="col">Alamat</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$row->nama}}</td>
      <td>{{$row->kategori}}</td>
      <td>
        <img src="{{asset('fotokuliner/'.$row->foto)}}" alt="" style="width:50px;">
      </td>
      <td>{{$row->alamat}}</td>
      <td>{{$row->deskripsi}}</td>
      <td>
          <a href="/tampilkankuliner/{{$row->id}}" class="btn btn-warning">Edit</a>
          <a href="/deletekuliner/{{$row->id}}" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>