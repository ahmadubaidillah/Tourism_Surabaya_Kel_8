@extends("Layout.app")
@section("content")
  <body>
    <h1 class="text-center mb-4 mt-5">LOGIN</h1>
    <div class="container w-50">
      <div class="row justify-content-center">
       <div class="col-8">
       <div class="card">
          <div class="card-body">
            <form action="/loginproses" method="post" >
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary mb-4">SIGN IN</button>
              <br>
              <a href="/register" class="" style="text-decoration:none;">Register new account ?</a>
            </form> 
          </div>
        </div>
       </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
@endsection