<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tourism Surabaya</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <div class="p-4 pt-5">
          <h1><a href="index.html" class="logo">{{ Auth::user()->role == 'admin' ? 'Admin' : 'User' }}</a></h1>
          <ul class="list-unstyled components mb-5">
            <li>
              <a href="/panelhome">Home</a>
            </li>
            <li>
              <a href="/data_destinasi">Data Destinasi</a>
            </li>
            <li>
              <a href="/data_kuliner">Data Kuliner</a>
            </li>
            <li>
            @if(Auth::user()->role == 'admin')
            <a href="/data_contact">Data Pesan</a>
            @endif
            </li>
            <li><a  href="/logout">Sign out</a></li>
          </ul>

        

          <div class="footer">
            <p>
              Welcome
            {{ Auth::user()->role == 'admin' ? Auth::user()->name : Auth::user()->name }}
            </p>
          </div>
        </div>
      </nav>

      <!-- Page Content  -->
      <div id="content" class="mt-3 ml-3">

      @yield("content")
</div>  

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
