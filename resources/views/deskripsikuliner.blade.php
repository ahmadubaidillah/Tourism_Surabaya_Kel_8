@extends("Layout.app")
@section("content")
<div class="destinasi-nav">
      <p><a href="index.html">Beranda</a> > Kuliner Surabaya</p>
    </div>
    <div class="destinasi-judul">
      <h2>KULINER SURABAYA</h2>
    </div>
    <div><br /></div>s

<div class="container">
     
  
      <div class="row destinasi-isi" method="get" >
      <div class="d-flex justify-content-center">
        <img class="mb-4" src="{{asset('fotodestinasi/'.$data->foto)}}" alt="" style="height:500px;width:1000px"> 
      </div>
      <h3 class="fw-bolder text-center mb-4 ">{{$data->nama}}</h3>
      <div class="d-flex flex-row mb-2 justify-content-center">
      <h6 class="fw-semibold p-2"><i class="fa fa-fw fa-map-marker-alt"></i> {{$data->alamat}}</h6>
      <h6 class="fw-semibold p-2"><i class="fa-sharp fa-solid fa-tags"></i> {{$data->kategori}}</h6>
      </div>
   
      <p class="text-center">{{$data->deskripsi}}</p>

    </div>
@endsection
