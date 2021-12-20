<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ url('public') }}/images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>My Flatshoes</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{ url('public') }}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ url('public') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('public') }}/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            My Flatshoes
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('flatshoes') }}">Flat Shoes</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('login') }}">Login</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>


  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ url('public') }}/images/b1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Flat Shoes
              </h5>
              <p>
                Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian. Salah satu yang paling digemari adalah flat shoes wanita. Flat shoes banyak disukai karena selain nyaman dikenakan, juga identik dengan wanita. Flat shoes memiliki berbagai macam gaya, bentuk, warna, dan motif. Dari yang polos simpel sampai yang lucu-lucu pun ada. Sepatu ini nyaman digunakan sehari-hari lho, baik untuk ngampus, ke kantor, ke tempat les, hangout, bahkan ke pesta. Selain itu, flatshoes juga cocok dipadupadankan dengan outfit apa pun. Sehingga, supaya makin oke dan pede, kamu perlu memilih merek flat shoes yang bagus.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ url('public') }}/images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Flat Shoes
              </h5>
              <p>
                 Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian. Salah satu yang paling digemari adalah flat shoes wanita. Flat shoes banyak disukai karena selain nyaman dikenakan, juga identik dengan wanita Flat shoes memiliki berbagai macam gaya, bentuk, warna, dan motif. Dari yang polos simpel sampai yang lucu-lucu pun ada. Sepatu ini nyaman digunakan sehari-hari lho.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="{{ url('public') }}/images/b3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Flat Shoes
              </h5>
              <p>
                Salah satu fashion untuk memaksimalkan penampilan cantik wanita adalah sepatu. Sepatu menjadi hal penting yang perlu diperhatikan sebelum bepergian.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 234567890
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : myflatshoes@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row ">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="{{ url('index') }}">Home <span class="sr-only">(current)</span></a>
                <a class="" href="{{ url('about') }}"> About</a>
                <a class="" href="{{ url('flatshoes') }}">Flat Shoes</a>
                <a class="" href="{{ url('blog') }}">Blog</a>
                <a class="" href="{{ url('contact') }}">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="{{ url('public') }}/images/f1.png" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public') }}/images/f2.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public') }}/images/f3.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public') }}/images/f4.png" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public') }}/images/f5.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="{{ url('public') }}/images/f6.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Flatshoes By
        <a href="https://html.design/">My Flatshoes</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="{{ url('public') }}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{ url('public') }}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{ url('public') }}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>