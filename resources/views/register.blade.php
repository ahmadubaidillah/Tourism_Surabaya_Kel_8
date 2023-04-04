<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
   <!-- Bootstrap core CSS -->
   <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/templatemo-edu-meeting.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">

<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>



<!-- Sub Header -->
<div class="sub-header">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-sm-8">
      <div class="left-content">
        <p>Start your best journey in surabaya.</p>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4">
      <div class="right-icons">
        <ul>
        <li><a href="https://www.facebook.com/SparklingAiesecSurabaya"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/TICSby"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/surabayasparkling/"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="/" class="logo">
                      <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" style="width:100px" alt="">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                      <li ><a href="/" >Home</a></li>
                      <li><a href="/maindestinasi" >Destinasi</a></li>
                      <li ><a href="/mainkuliner">Kuliner</a></li>
                      <li class="has-sub">
                          <a href="javascript:void(0)" class="active">Pages</a>
                          <ul class="sub-menu">
                              <li><a href="/login" >Sign In</a></li>
                              <li><a href="/contact">Contact Us</a></li>
                          </ul>
                      </li>
                  </ul>        
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
    <section
      class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark"
      style="
        min-height: 100vh;
        background-size: cover;
      "
    >
      <div class="container-fluid">
        <div
          class="row justify-content-center align-items-center d-flex-row text-center h-100"
        >
          <div class="col-12 col-md-4 col-lg-3 h-50">
            <div class="card shadow">
              <div class="card-body mx-auto">
                <h4 class="card-title mt-3 text-center">Register Account</h4>

                <form action="/registeruser" method="POST">
                   @csrf
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                    <input
                      name="name"
                      class="form-control"
                      placeholder="name"
                      type="text"
                    />
                  </div>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                    <input
                      name="email"
                      class="form-control"
                      placeholder="Email address"
                      type="email"
                    />
                  </div>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                      </span>
                    </div>
                    <input
                      name="password"
                      class="form-control"
                      placeholder="Create password"
                      type="password"

                    />
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                      Create Account
                    </button>
                  </div>
                  <p class="text-center">
                    Have an account?
                    <a href="/login">Log In</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"
    ></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
