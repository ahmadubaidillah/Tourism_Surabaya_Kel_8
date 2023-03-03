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
      <p class="destinasi-filter">
        <button
          class="btn btn-primary collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse1"
          aria-expanded="false"
          aria-controls="collapse1"
        >
          Filter Wilayah
        </button>
  
        <button
          class="btn btn-primary collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse2"
          aria-expanded="false"
          aria-controls="collapse2"
        >
          Filter Kategori
        </button>
  
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
  
      <div class="collapse" id="collapse1">
        <div class="card card-body">
          Filter Wilayah
          <ul class="list1">
            <li>
              <input type="radio" name="filter_wilayah" value="Semua" />
              <span>Semua</span>
            </li>
            <li>
              <input type="radio" name="filter_wilayah" value="Surabaya Pusat" />
              <span>Surabaya Pusat</span>
            </li>
            <li>
              <input type="radio" name="filter_wilayah" value="Surabaya Barat" />
              <span>Surabaya Barat</span>
            </li>
            <li>
              <input type="radio" name="filter_wilayah" value="Surabaya Timur" />
              <span>Surabaya Timur</span>
            </li>
            <li>
              <input type="radio" name="filter_wilayah" value="Surabaya Utara" />
              <span>Surabaya Utara</span>
            </li>
            <li>
              <input
                type="radio"
                name="filter_wilayah"
                value="Surabaya Selatan"
              />
              <span>Surabaya Selatan</span>
            </li>
          </ul>
        </div>
      </div>
  
      <div class="collapse" id="collapse2">
        <div class="card card-body">
          Filter Kategori
          <ul class="list1">
            <li>
              <input type="radio" name="filter_kategori" value="Semua" />
              <span>Semua</span>
            </li>
            <li>
              <input
                type="radio"
                name="filter_kategori"
                value="Main Course"
              />
              <span>Main Course</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Beverages" />
              <span>Beverages</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Snack" />
              <span>Snack</span>
            </li>
          </ul>
        </div>
      </div>
  
      <div class="collapse" id="collapse3">
        <div class="card card-body">
          <h6>Filter Kata Kunci</h6>
          <div class="form-group">
            <input type="text" class="form-control" name="keyword" />
          </div>
        </div>
      </div>
  
      <div class="row destinasi-isi" >
        <div class="col-md-4 text-center my-2">
          <a
            href=""
          >
            <img
              class="img-fluid"
              src="https://fastly.4sqi.net/img/general/width960/5380965_8b5doj2w-aLSW6qrGpDp1dacEYyD-IWGq3Zq-3ETVHQ.jpg"
              alt="Rawon Setan Embong Malang"
            />
          </a>
          <div class="mt-2">
            <span class="span-kategori"> Main Course</span>
            <hr class="my-2" />
            <h5 class="font-weight-bold">Rawon Setan Embong Malang</h5>
            <h6>
              <i class="fa fa-fw fa-map-marker-alt"></i>
              Jl. Embong Malang No.78/I
            </h6>
          </div>
        </div>

        @foreach ($data as $row)
        <div class="col-md-4 text-center my-2">
          <a
            href=""
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
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="" rel="prev" aria-label="« Previous"
              >‹</a
            >
          </li>
          <li class="page-item">
            <a class="page-link" href="index.html">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="destinasi-2.html">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">6</a>
          </li>
          <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">...</span>
          </li>
          <li class="page-item">
            <a class="page-link" href="">45</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">46</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">47</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">48</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">49</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="" rel="next" aria-label="Next »">›</a>
          </li>
        </ul>
      </nav>
    </div>
@endsection