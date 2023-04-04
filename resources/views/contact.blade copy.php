@extends("Layout.app")
@section("content")
    <div class="destinasi-judul">
      <h2>CONTACT</h2>
    </div>
    <div><br /></div>

    <div class="container">
      <div class="row justify-content-center">
       <div class="col-6">
       <div class="card">
          <div class="card-body">
            <form action="/insertcontact" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <input type="text" name="nama" 
                placeholder="Nama"
                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <div class="d-flex gap-3">
                  <input type="text" name="email"
                  placeholder="Email"
                  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <input type="text" name="no_telepon"
                  placeholder="No Telepon"
                  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>
              <div class="mb-3">
                <input type="text" name="pesan" 
                placeholder="Pesan"
                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                style="height:100px">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
       </div>
      </div>
    </div>

    <!-- <div class="container text-center">
      <form  action="/insertcontact" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <input
            type="email"
            name="nama"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="Nama"
            style="width: 410px; margin-left: auto; margin-right: auto"
            />
        </div>
        <div class="mb-3 d-flex">
          <input
          type="email"
          name="email"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Email"
          style="width: 200px; margin-right: 5px; margin-left: auto"
          />
          
          <input
          type="text"
          name="no_telepon"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="No Telepon"
          style="width: 200px; margin-right: auto; margin-left: 5px"
          />
        </div>
          <div class="mb-3">
          <input type="text" name="pesan" id="exampleFormControlInput1" class="form-control"  rows="3"
            placeholder="Pesan" style="width: 410px; margin-left: auto; margin-right: auto;height:120px">            
        </div>
        <div class="mb">
          <button
            type="button"
            class="btn btn-warning"
            style="width: 410px; margin-left: auto; margin-right: auto">
            Submit
          </button>
        </div>
      </form>
    </div> -->

     


      <br>
@endsection
