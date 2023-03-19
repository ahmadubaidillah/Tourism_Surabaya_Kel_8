@extends("Layout.app")
@section("content")
<div class="destinasi-nav">
      <p><a href="index.html">Beranda</a> > Kuliner Surabaya</p>
    </div>
    <div class="destinasi-judul">
      <h2>KULINER SURABAYA</h2>
    </div>
    <div><br /></div>

    <div class="container">
    <form action="/mainkuliner" method="get">
    <p class="destinasi-filter">
        <button
          class="btn btn-primary collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse3"
          aria-expanded="false"
          aria-controls="collapse3"
        >
          Filter Keyword
        </button>
        <button type="submit" class="btn btn-primary filter">
          <i class="fa fa-fw fa-search"></i>
          Filter
        </button>
      </p>
      <div class="collapse" id="collapse3">
        <div class="card card-body">
          <h6>Filter Kata Kunci</h6>
          <div class="form-group">
            <input type="search" name="search" class="form-control" name="keyword" />
          </div>
        </div>
      </div>
    </form>
  
      <div class="row destinasi-isi" >

        @foreach ($data as $row)
        <div class="col-md-4 text-center my-2">
          <a
            href="/deskripsikuliner/{{$row->id}}"
          >
            <img
              class="img-fluid"
              src="{{asset('fotokuliner/'.$row->foto)}}"
              alt="Museum Olahraga Surabaya"
            />
          </a>
          <div class="mt-2">
            <span class="span-kategori">{{$row->kategori}}</span>
            <hr class="my-2" />
            <h5 class="font-weight-bold">{{$row->nama}}</h5>
            <h6>
              <i class="fa fa-fw fa-map-marker-alt"></i>
              {{$row->alamat}}
            </h6>
          </div>
        </div>
        @endforeach


    </div>
    <div class="nav-list-page">
      <nav>
        {{$data->links()}}
      </nav>
</div>
    </div>
@endsection