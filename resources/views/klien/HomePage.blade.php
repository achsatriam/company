@extends('klien.layout.App')

@section('content')
  <!-- Subheader Start -->
  <div class="sigma_subheader subheader-lg dark-overlay primary-overlay bg-cover bg-norepeat" style="background-image: url(assets/img/banner/4.jpg)">

    <img src="assets/img/textures/3.png" class="texture-3" alt="texture">

    <!-- Top Left Wave -->
    <div class="sigma_subheader-shape circles">
      <div class="circle circle-lg circle-1 primary-dark-bg"></div>
      <div class="circle circle-sm circle-2 bg-white"></div>
      <div class="circle circle-md circle-3 secondary-bg"></div>
    </div>

    <!-- Bottom Wave -->
    <div class="sigma_subheader-shape waves">
      <div class="wave"></div>
      <div class="wave"></div>
    </div>

    <div class="sigma_subheader-inner">

      <div class="sigma_subheader-slider">

        <!-- Banner Item Start -->
        <div class="sigma_banner-slider-inner">
          <div class="sigma_banner-text">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                  <div class="mb-0 section-title">
                    <h6 class="subtitle">About Us</h6>
                    <h1 class="text-white title">Let Us Help You With All Of Your Printing Needs</h1>
                    <p class="text-white">Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Banner Item End -->

        <!-- Banner Item Start -->
        <div class="sigma_banner-slider-inner">
          <div class="sigma_banner-text">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                  <div class="mb-0 section-title">
                    <h6 class="subtitle">About Us</h6>
                    <h1 class="text-white title">Let Us Help You With All Of Your Printing Needs</h1>
                    <p class="text-white">Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Banner Item End -->

      </div>

    </div>

  </div>
  <!-- Subheader End -->

  <!-- Icons Start -->
  <div class="section section-padding mt-negative">
    <div class="container">
      <div class="row">

        <div class="col-xl-3 col-lg-3 col-sm-6">
          <div class="sigma_icon-block icon-block-5">
            <div class="icon-wrapper">
              <img src="assets/img/icons/info/1.png" alt="info">
            </div>
            <div class="sigma_icon-block-content">
              <h5>Highly Quality Printing</h5>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-sm-6">
          <div class="sigma_icon-block icon-block-5">
            <div class="icon-wrapper">
              <img src="assets/img/icons/info/2.png" alt="info">
            </div>
            <div class="sigma_icon-block-content">
              <h5>Pixel Perfect Printing</h5>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-sm-6">
          <div class="sigma_icon-block icon-block-5">
            <div class="icon-wrapper">
              <img src="assets/img/icons/info/3.png" alt="info">
            </div>
            <div class="sigma_icon-block-content">
              <h5>Printing on Daily Demand</h5>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-sm-6">
          <div class="sigma_icon-block icon-block-5">
            <div class="icon-wrapper">
              <img src="assets/img/icons/info/4.png" alt="info">
            </div>
            <div class="sigma_icon-block-content">
              <h5>Competitive Printing Prices</h5>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Icons End -->

  <!-- About Start -->
  <section class="section pt-0">
    <div class="container">
      <div class="row">

        <div class="offset-lg-4 col-lg-8">
          <div class="section-title text-left">
            <span class="badge badge-secondary">Build Your Business Venture</span>
            <h4 class="title">Be Your Own Boss </h4>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          </div>

        </div>

        <div class="col-lg-5 mb-lg-30 position-relative">
          <div class="sigma_dots dots-1 secondary d-none d-lg-block"></div>
          <img src="assets/img/about2.jpg" alt="about">
        </div>

        <div class="offset-lg-1 col-lg-5">
          <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
            sometimes by accident, sometimes on purpose (injected humour and the like). If you are going to use a passage of Lorem Ipsum.</p>
          <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined. chunks as necessary.</p>
          <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
            sometimes by accident, sometimes on purpose (injected humour and the like). If you are going to use a passage of Lorem Ipsum.</p>
          <div class="section-button">
            <a href="/contact_us" class="sigma_btn-custom btn-pill">Read More</a>
          </div>
        </div>

        <div class="col-lg-1">
          <div class="sigma_dots dots-2 primary d-none d-lg-block"></div>
        </div>

      </div>
    </div>
  </section>
  <!-- About End -->

  <!-- Services Start -->
  <div class="section section-padding pt-0">

    <div class="container">
      <div class="section-title text-center">
        <h4 class="title">Our Services</h4>
        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
      </div>

    </div>

    <div class="container-fluid">

      <div class="row">
      @foreach($kategori as $item)
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <a href="#" class="sigma_service style-4">
            <div class="sigma_service-thumb">
              <img src="{{ asset('post-images/'. $item->foto) }}" style="width:350px; height:200px" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>{{ $item->kategori_produk }}</h5>
            </div>
          </a>
        </div>
      @endforeach

        {{-- <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <a href="#" class="sigma_service style-4">
            <div class="sigma_service-thumb">
              <img src="assets/img/services/lg/2.jpg" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Flyer Printing</h5>
            </div>
          </a>
        </div>

        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <a href="#" class="sigma_service style-4">
            <div class="sigma_service-thumb">
              <img src="assets/img/services/lg/3.jpg" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Sticker Printing</h5>
            </div>
          </a>
        </div>

        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <a href="#" class="sigma_service style-4">
            <div class="sigma_service-thumb">
              <img src="assets/img/services/lg/4.jpg" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Poster Printing</h5>
            </div>
          </a>
        </div>

        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <a href="#" class="sigma_service style-4">
            <div class="sigma_service-thumb">
              <img src="assets/img/services/lg/5.jpg" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Banner Printing</h5>
            </div>
          </a>
        </div>

        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <a href="#" class="sigma_service style-4">
            <div class="sigma_service-thumb">
              <img src="assets/img/services/lg/6.jpg" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Package Design</h5>
            </div>
          </a>
        </div> --}}

      </div>

    </div>
  </div>
  <!-- Services End -->

  <!-- Testimonials Start -->
  <section class="section pt-0">
    <div class="container">

      <div class="sigma_testimonial style-3">
          <div class="sigma_testimonial-slider">

            <div class="sigma_testimonial-inner">
              <img src="assets/img/testimonial/2.jpg" alt="testimonial">
              <div class="sigma_testimonial-body">
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                <cite>Bobby K. Parker</cite>
              </div>
            </div>
            <div class="sigma_testimonial-inner">
              <img src="assets/img/testimonial/1.jpg" alt="testimonial">
              <div class="sigma_testimonial-body">
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                <cite>Bobby K. Parker</cite>
              </div>
            </div>
            <div class="sigma_testimonial-inner">
              <img src="assets/img/testimonial/3.jpg" alt="testimonial">
              <div class="sigma_testimonial-body">
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                <cite>Bobby K. Parker</cite>
              </div>
            </div>

          </div>
        </div>

    </div>
  </section>
  <!-- Testimonials End -->

  <!-- Contact form Start -->
  <div class="row bg-cover bg-norepeat bg-left secondary-bg" style="background-image: url(assets/img/banner/6.jpg)">

    <div class="col-lg-2 d-none d-lg-block">
      <div class="section">
        <div class="section-title flip d-none d-lg-block">
          <h4 class="title text-white">Get in Touch!</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-3 position-relative">
      <div class="section">
        <div class="container-fluid">
          <div class="section-title d-block d-lg-none">
            <h4 class="title">Get in Touch!</h4>
          </div>
          <form>
            <div class="form-group">
              <label class="text-white">Full Name</label>
              <input type="text" class="form-control" name="Name">
            </div>
            <div class="form-group">
              <label class="text-white">Email Address <em class="text-danger">*</em> </label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label class="text-white">Subject <em class="text-danger">*</em> </label>
              <input type="text" class="form-control" name="subject">
            </div>
            <div class="form-group">
              <label class="text-white">Message <em class="text-danger">*</em> </label>
              <textarea name="message" cols="45" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="sigma_btn-custom secondary" name="button">Submit Now</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- Contact form End -->

  <!-- Services Start -->
  <div class="section section-padding">
    <div class="container">

      <div class="section-title text-center">
        <h4 class="title">Our Facilities</h4>
        <p>Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>

      <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="#" class="sigma_service style-2">
            <div class="sigma_service-thumb">
              <img src="assets/img/icons/service/3.png" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Printed in full color</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod </p>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="#" class="sigma_service style-2">
            <div class="sigma_service-thumb">
              <img src="assets/img/icons/service/1.png" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Double Sided</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod </p>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="#" class="sigma_service style-2">
            <div class="sigma_service-thumb">
              <img src="assets/img/icons/service/4.png" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Variety of paper sizes</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod </p>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="#" class="sigma_service style-2">
            <div class="sigma_service-thumb">
              <img src="assets/img/icons/service/2.png" alt="service">
            </div>
            <div class="sigma_service-body">
              <h5>Optional Finishing</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod </p>
            </div>
          </a>
        </div>

      </div>

    </div>
  </div>
  <!-- Services End -->

  <!-- Related Products start -->
  <div class="section pt-0">
    <div class="container">

      <div class="section-title text-center">
        <h4 class="title">Our Products</h4>
        <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
      </div>

      <div class="sigma_related-posts">

        <!-- Products Post Start -->
        <div class="sigma_related-slider">

          <!-- Product Start -->
          @foreach($produk as $item)
            <div class="sigma_product">
              <div class="sigma_product-badge sigma_badge-featured">
                <i class="fa fa-star"></i>
              </div>
              <div class="sigma_product-thumb">
                <a href="{{ url('/details_product',$item) }}"><img src="{{ asset('post-images/'. $item->foto) }}" style="width:350px; height:270px" alt="product"></a>
              </div>
              <div class="sigma_product-body">
                <h5 class="sigma_product-title"> <a href="{{ url('/details_product',$item) }}">{{ $item->nama_produk }}</a> </h5>
                <div class="sigma_product-price">
                  <span>Rp {{ number_format($item->harga) }}</span>
                </div>
                <a href="{{ url('/details_product',$item) }}" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>
              </div>
            </div>
          @endforeach
          <!-- Product End -->

          {{-- <!-- Product Start -->
          <div class="sigma_product">
            <div class="sigma_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/2.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="product-single.html">Book Cover</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
              </div>
              <a href="product-single.html" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
          <!-- Product End -->

          <!-- Product Start -->
          <div class="sigma_product">
            <div class="sigma_product-badge sigma_badge-sale">
              25% Off
            </div>
            <div class="sigma_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/3.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="product-single.html">Van Cover</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
                <span>29$</span>
              </div>
              <a href="product-single.html" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
          <!-- Product End -->

          <!-- Product Start -->
          <div class="sigma_product">
            <div class="sigma_product-badge sigma_badge-featured">
              <i class="fa fa-star"></i>
            </div>
            <div class="sigma_product-thumb">
              <a href="product-single.html"><img src="assets/img/products/4.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="product-single.html">Polaroid Enhancement</a> </h5>
              <div class="sigma_product-price">
                <span>29$</span>
              </div>
              <a href="product-single.html" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
          <!-- Product End --> --}}

        </div>
        <!-- Products End -->

      </div>

    </div>
  </div>
  <!-- Related Products End -->

  <!-- Instagram Start -->
  <div class="section pt-0">
    <div class="row no-gutters">
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
        <a href="#" class="sigma_ig-item">
          <img src="assets/img/ig/1.jpg" alt="ig">
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
        <a href="#" class="sigma_ig-item">
          <img src="assets/img/ig/2.jpg" alt="ig">
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
        <a href="#" class="sigma_ig-item">
          <img src="assets/img/ig/3.jpg" alt="ig">
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
        <a href="#" class="sigma_ig-item">
          <img src="assets/img/ig/4.jpg" alt="ig">
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
        <a href="#" class="sigma_ig-item">
          <img src="assets/img/ig/5.jpg" alt="ig">
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
        <a href="#" class="sigma_ig-item">
          <img src="assets/img/ig/6.jpg" alt="ig">
        </a>
      </div>
    </div>
  </div>
  <!-- Instagram End -->

  <!-- Blog start -->
  <div class="section section-padding pt-0">
    <div class="container">

      <div class="section-title text-center">
        <h4 class="title">Latest News</h4>
        <p>Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>

      <div class="row">

        <!-- Article Start -->      
        @foreach ($blog as $item)
          <div class="col-lg-6">
            <article class="sigma_post">
              <div class="sigma_post-thumb">
                <a href="{{ url('/details_blog',$item) }}">
                  <img src="{{ asset('post-images/'. $item->foto) }}" style="width:700px; height:350px" alt="post">
                </a>
              </div>
              <div class="sigma_post-body">
                <div class="sigma_post-meta">
                  <a href="{{ url('/details_blog',$item) }}" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
                </div>
                <h5> <a href="{{ url('/details_blog',$item) }}">{{ $item->nama_blog }}</a> </h5>
                <p>{!! $deskripsi = substr($item->deskripsi, 0, 400) !!} <a href="{{ url('/details_blog',$item) }}">...Read more</a></p>
              </div>
            </article>
          </div>
        @endforeach
        <!-- Article End -->

        <!-- Article Start -->
        {{-- @foreach ($blog as $item)
          <div class="col-lg-6">

            <article class="sigma_post sigma_post-list list-sm">
              <div class="sigma_post-thumb">
                <a href="{{ url('/details_blog',$item) }}">
                  <img src="{{ asset('post-images/'. $item->foto) }} " alt="post">
                </a>
              </div>
              <div class="sigma_post-body">
                <div class="sigma_post-meta">
                  <a href="{{ url('/details_blog',$item) }}" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
                </div>
                <h5> <a href="{{ url('/details_blog',$item) }}">{{ $item->nama_blog }}</a> </h5>
              </div>
            </article>
          </div>
        @endforeach --}}
        <!-- Article End -->

      </div>
    </div>
  </div>
  <!-- Blog End -->
@endsection