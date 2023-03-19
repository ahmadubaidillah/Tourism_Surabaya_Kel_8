@extends("Layout.panel")
@section("content")
<h1 class="text-center mb-4 mt-4">Data Pesan</h1>
    <div class="container">
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
      <th scope="col">Email</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Pesan</th>
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
      <td>{{$row->email}}</td>
      <td>{{$row->no_telepon}}</td>
      <td>{{$row->pesan}}</td>
      
      <td>
      <a href="/deletecontact/{{$row->id}}" class="btn btn-danger">Delete</button>
          
          
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{$data->links()}}
        </div>
    </div>
@endsection