@extends("Layout.app")
@section("content")
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
                value="History & Heritage"
              />
              <span>History & Heritage</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Museum" />
              <span>Museum</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Religi" />
              <span>Religi</span>
            </li>
            <li>
              <input
                type="radio"
                name="filter_kategori"
                value="Monumen & Landmark"
              />
              <span>Monumen & Landmark</span>
            </li>
            <li>
              <input
                type="radio"
                name="filter_kategori"
                value="Outdoor & Nature"
              />
              <span>Outdoor & Nature</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Kampung Wisata" />
              <span>Kampung Wisata</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="City Park" />
              <span>City Park</span>
            </li>
            <li>
              <input
                type="radio"
                name="filter_kategori"
                value="Pusat Perbelanjaan"
              />
              <span>Pusat Perbelanjaan</span>
            </li>
            <li>
              <input
                type="radio"
                name="filter_kategori"
                value="Pasar Tradisional"
              />
              <span>Pasar Tradisional</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Cagar Budaya" />
              <span>Cagar Budaya</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Art & Culture" />
              <span>Art & Culture</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Sport" />
              <span>Sport</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Kuliner" />
              <span>Kuliner</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="Mice" />
              <span>Mice</span>
            </li>
            <li>
              <input
                type="radio"
                name="filter_kategori"
                value="Family Activities"
              />
              <span>Family Activities</span>
            </li>
            <li>
              <input type="radio" name="filter_kategori" value="SPA & Wellness" />
              <span>SPA & Wellness</span>
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
            href="https://tourism.surabaya.go.id/travel/detail/museum-pendidikan-surabaya"
          >
            <img
              class="img-fluid"
              src="https://tourism.surabaya.go.id/storage/tour/1648709900_1.jpg"
              alt="Museum Pendidikan Surabaya"
            />
          </a>
          <div class="mt-2">
            <span class="span-kategori"> Museum </span>
            <hr class="my-2" />
            <h5 class="font-weight-bold">Museum Pendidikan Surabaya</h5>
            <h6>
              <i class="fa fa-fw fa-map-marker-alt"></i>
              Jl. Genteng Kali No. 10
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
              src="{{asset('fotodestinasi/'.$row->foto)}}"
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
@endsection
