@extends("Layout.panel")
@section("content")
    <h1 class="text-center mb-4">Data Kuliner</h1>
    <div class="container">
    <a href="/tambahkuliner" class="btn btn-success mb-4">+ Tambah Kuliner</a>
    <form method="GET" action="/data_kuliner" class="d-flex mb-3">
    <input type="search" name="search" class="form-control w-25 p-2 me-3" id="exampleInputEmail1" aria-describedby="emailHelp">
  
    <button type="submit" class="btn btn-primary p-2">Search</button>
</form>  
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
      @if(Auth::user()->role == 'admin')
      <th scope="col">Aksi</th>
      @endif
    </tr>
  </thead>
  <tbody>
  @php
    $no = 1;
    @endphp
    @foreach ($data as $index => $row)
    <tr>
      <th scope="row">{{$index + $data->firstitem()}}</th>
      <td>{{$row->nama}}</td>
      <td>{{$row->kategori}}</td>
      <td>
        <img src="{{asset('fotokuliner/'.$row->foto)}}" alt="" style="width:50px;">
      </td>
      <td>{{$row->alamat}}</td>
      <td>{{$row->deskripsi}}</td>
      <td>
        @if(Auth::user()->role == 'admin')
          <a href="/tampilkankuliner/{{$row->id}}" class="btn btn-warning mb-2">Edit</a>
          <a href="/deletekuliner/{{$row->id}}" class="btn btn-danger">Delete</button>
          @endif
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{$data->links()}}
        </div>
    </div>
@endsection