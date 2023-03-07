@extends("Layout.app2")
@section("content")
<h1 class="text-center mb-4 mt-4">Data Destinasi</h1>
    <div class="container">
    <a href="/tambahdestinasi" class="btn btn-success mb-4">+ Tambah Destinasi</a>
    <form method="GET" action="/data_destinasi" class="d-flex mb-3">
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
      <th scope="col">Aksi</th>
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
        <img src="{{asset('fotodestinasi/'.$row->foto)}}" alt="" style="width:50px;">
      </td>
      <td>{{$row->alamat}}</td>
      <td>{{$row->deskripsi}}</td>
      <td>
          <a href="/tampilkandestinasi/{{$row->id}}" class="btn btn-warning mb-2">Edit</a>
        @if(Auth::user()->role == 'admin')
          <a href="/deletedestinasi/{{$row->id}}" class="btn btn-danger">Delete</button>
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