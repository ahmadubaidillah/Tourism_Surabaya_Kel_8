<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Destinasi</h1>
    <div class="container">
      <div class="row justify-content-center">
       <div class="col-8">
       <div class="card">
          <div class="card-body">
            <form action="/insertdestinasi" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Destinasi</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Destinasi</label>
                <select class="form-select" name="kategori" aria-label="Default select example">
                  <option selected>Pilih Kategori</option>
                  <option value="1">History & Heritage</option>
                  <option value="2">Museum</option>
                  <option value="3">Religi</option>
                  <option value="4">Outdoor & Nature</option>
                  <option value="5">Pusat Perbelanjaan</option>
                  <option value="6">Pasar Tradisional</option>
                  <option value="7">Kampung Wisata</option>
                  <option value="8">Sport</option>
                  <option value="9">Cagar Budaya</option>
                  <option value="10">City Park</option>
                  <option value="11">Monumen & Landmark</option>
                </select>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Destinasi</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi Destinasi</label>
                <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
       </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>