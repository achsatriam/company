<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from primehostingindia.com/themeforest/html/partex/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 11:15:10 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partex - Printing Agency HTML Template</title>
  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-theme.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/ion.rangeSlider.min.css')}}">


  <!-- Icon Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css')}}">
  <!-- Tilakam Style sheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body>
  <!-- Header -->
  <div id="wabox">
    <i class="fas fa-times y"></i>
    <div class="wahead">
        <div class="waimg"></div>
        <div class="ol"></div>
        <div class="wans">
            <div class="waname">Yunus</div>
        <div class="wasub">Chat with us on WhatsApp</div>
        </div>
    </div>
    <div class="wabody">
        <div class="watxt">
          Haloo 👋<br>Saya sbg Admin Creaprint<br>Ada yang bisa saya bantu?
        </div>
        <div class="pnh"> </div>
    </div>
    <div class="wafooter">
        <textarea row="2" id="wapesan" placeholder="Ketikkan pesan disini..."></textarea>
        <i id="wasend" class="fas fa-paper-plane"></i>
    </div>
  </div>

  <a class="float">
    <i class="fab fa-whatsapp my-float"></i>
  </a>

  <!-- Aside (Mobile Navigation) -->
  <aside class="sigma_aside sigma_aside-left">

    <a class="navbar-brand" href="/"> <img src="{{ asset('assets/img/logo-dark.png')}}" alt="logo"> </a>

    <!-- Menu -->
    <ul>
      <li class="menu-item">
        <a href="/">Home Page</a>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Blog</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="/list_blog">List Blog</a> </li>
          <li class="menu-item"> <a href="/details_blog">Details Blog</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Shop</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="/list_product">List Product</a> </li>
          <li class="menu-item"> <a href="/details_product">Details Product</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">How to order</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="/list_product">List Product</a> </li>
          <li class="menu-item"> <a href="/details_product">Details Product</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">About us</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="/list_product">List Product</a> </li>
          <li class="menu-item"> <a href="/details_product">Details Product</a> </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="/contact_us">Contact Us</a>
      </li>
    </ul>

  </aside>
  <div class="sigma_aside-overlay aside-trigger-left"></div>

  @if (\Route::current()->getName() == 'contact')
    <!-- Header Start -->
    <header class="sigma_header header-1 can-sticky">

      <!-- Middle Header Start -->
      <div class="sigma_header-middle">
          <div class="container">
              <nav class="navbar">

                  <!-- Logo Start -->
                  <div class="sigma_logo-wrapper">
                      <a class="navbar-brand" href="/">
                          <img src="assets/img/logo-dark.png" alt="logo">
                      </a>
                  </div>
                  <!-- Logo End -->

                  <!-- Menu -->
                  <ul class="navbar-nav">
                      <li class="menu-item">
                        <a href="/">Home Page</a>
                      </li>
                      <li class="menu-item">
                        <a href="/list_blog">Blog</a>
                      </li>
                      <li class="menu-item">
                        <a href="/list_product">Produk</a>
                      </li>
                      <li class="menu-item">
                        <a href="/how_to_order">How to order</a>
                      </li>
                      <li class="menu-item">
                        <a href="/about_us">About us</a>
                      </li>
                      <li class="menu-item">
                        <a href="/contact_us">Contact Us</a>
                      </li>
                  </ul>
          
                  <!-- Controls -->
                  <a href="contact-us.html" class="sigma_btn-custom btn-sm dark btn-pill d-none d-lg-block">Get a Quote</a>

                  <!-- Mobile Toggler -->
                  <div class="aside-toggler style-2 aside-trigger-left">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>

              </nav>
          </div>
      </div>
      <!-- Middle Header End -->
    </header>
    <!-- Header End -->   
  @else
    <!-- Header Start -->
    <header class="sigma_header header-1 can-sticky header-absolute header-light">

      <!-- Middle Header Start -->
      <div class="sigma_header-middle">
        <div class="container">
          <nav class="navbar">

            <!-- Logo Start -->
            <div class="sigma_logo-wrapper">
              <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logo.png')}}" alt="logo">
              </a>
            </div>
            <!-- Logo End -->

            <!-- Menu -->
            <ul class="navbar-nav">
              <li class="menu-item">
                <a href="/">Home Page</a>
              </li>
              <li class="menu-item">
                <a href="/list_blog">Blog</a>
              </li>
              <li class="menu-item">
                <a href="/list_product">Produk</a>
              </li>
              <li class="menu-item">
                <a href="/how_to_order">How to order</a>
              </li>
              <li class="menu-item">
                <a href="/about_us">About us</a>
              </li>
              <li class="menu-item">
                <a href="/contact_us">Contact Us</a>
              </li>
            </ul>

            <!-- Controls -->
            <a href="contact-us.html" class="sigma_btn-custom btn-sm light btn-pill d-none d-lg-block">Get a Quote</a>

            <!-- Mobile Toggler -->
            <div class="aside-toggler style-2 aside-trigger-left">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>

          </nav>
        </div>
      </div>
      <!-- Middle Header End -->

    </header>
    <!-- Header End -->
  @endif
  
  @yield('content')

  <!-- Clients Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="row no-gutters">

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
              <img src="{{asset('assets/img/clients/1.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/2.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/3.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/4.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/5.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/6.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/7.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/8.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/9.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/1.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/11.png')}}" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="{{asset('assets/img/clients/12.png')}}" alt="client">
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Clients End -->

  <!-- Footer Start -->
  <footer class="sigma_footer sigma_footer-dark primary-bg">

    <img src="{{ asset('assets/img/textures/4.png')}}" class="texture-3" alt="texture">

    <!-- Bottom Wave -->
    <div class="sigma_footer-shape waves">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#61be66" fill-opacity="1"
          d="M0,288L48,256C96,224,192,160,288,149.3C384,139,480,181,576,208C672,235,768,245,864,245.3C960,245,1056,235,1152,218.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
    </div>

    <!-- Middle Footer -->
    <div class="sigma_footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <img src="{{ asset('assets/img/logo.png')}}" class="mb-4" alt="logo">
            <p>9000 Regency Parkway, Suite 400 Cary, NC 27518</p>
            <ul class="sigma_sm">
              <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
              <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
              <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Information</h5>
            <ul>
              <li> <a href="/">Home</a> </li>
              <li> <a href="/list_blog">Blog</a> </li>
              <li> <a href="/list_product">Shop</a> </li>
              <li> <a href="/contact-us">Contact Us</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Others</h5>
            <ul>
              <li> <a href="/detail_product">Details Product</a> </li>
              <li> <a href="/list_product">Products</a> </li>
              <li> <a href="/list_blog">Blog</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 d-none d-lg-block footer-widget">
            <h5 class="widget-title">Top Categories</h5>
            <ul>
              <li> <a href="#">Pillow</a> </li>
              <li> <a href="#">Book Covers</a> </li>
              <li> <a href="#">Papers</a> </li>
              <li> <a href="#">Cover Van</a> </li>
              <li> <a href="#">Pens</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="sigma_footer-bottom">
      <div class="container">
        <div class="sigma_footer-copyright">
          <p> Copyright © 2020. All Rights Reserved. </p>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="{{ asset('assets/js/plugins/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/imagesloaded.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>


  <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.inview.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.event.move.js')}}"></script>

  <script src="{{ asset('assets/js/plugins/wow.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/slick.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>

  <!-- Tilakam Scripts -->
  <script src="{{ asset('assets/js/main.js')}}"></script>
  <script src="{{ asset('assets\js\jquery-3.6.1.min.js') }}"></script>

  <script>

    $watampil='hide';
    $('.float').click(function(){
        if($watampil=='hide'){
            document.getElementById("wabox").style.display = "inline-block";
            $watampil='show';
        }else{
             document.getElementById("wabox").style.display = "none";
            $watampil='hide';
        }
    });
    
    $('.y').click(function(){
        document.getElementById("wabox").style.display = "none";
        $watampil='hide';
    });
    
    
    $('#wasend').click(function(){
        $url = 'https://api.whatsapp.com/send?phone=62089678833232&text='+encodeURIComponent($('#wapesan').val());
        window.open($url, '_blank');
        $('#wapesan').val('')
        $('.wabox').hide();
    });

</script>

</body>


<!-- Mirrored from primehostingindia.com/themeforest/html/partex/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 11:17:19 GMT -->
</html>