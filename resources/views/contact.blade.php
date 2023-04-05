<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>TOURISM SURABAYA</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    


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
                                  <li><a href="/login">Sign In</a></li>
                                  <li><a href="/contact">Contact Us</a></li>
                                  <li><a href="/team">Our Team</a></li>

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
  <!-- ***** Header Area End ***** -->
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Let Contact Us</h6>
          <h2>CONTACT</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
                 <form id="contact" action="/insertcontact" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="nama" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="no_telepon" type="text" id="subject" placeholder="PHONE NUMBER.." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="pesan" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>
                  031-5318409</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span style="font-size: 13px;">disbudporapar@surabaya.go.id</span>
              </li>
              <li>
                <h6>Address</h6>
                <span style="font-size: 13px;">Jl. Tunjungan No.1-3 Kelurahan Genteng
                  Kecamatan Genteng, Kota Surabaya
                  Jawa Timur, Indonesia, 60275</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span style="font-size: 13px;">kelompok8.surabayawebtech.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2023 Tousrism Surabaya. 
          <br>
          <!-- Design: <a href="https://templatemo.com" target="_parent" title="free css templates">kelompok 8</a>
          <br>
          Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a> -->
        </p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/tabs.js')}}"></script>
    <script src="{{asset('assets/js/tabs.js')}}"></script>
    <script src="{{asset('assets/js/video.js')}}"></script>
    <script src="{{asset('assets/js/slick-slider.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>