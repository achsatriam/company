@extends('klien.layout.App')

@section('content')


  <!-- Subheader Start -->
  <div class="sigma_subheader primary-bg">

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

    <div class="container">
      <div class="sigma_subheader-inner">
        <h1>Produk Details</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk Details</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Product Content Start -->
    <div class="section">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="">
              <img src="{{ asset('post-images/'. $produk->foto) }}" style="width:600px; height:350px" alt="product">
            </div>

          </div>
          <div style="margin-top: 10px" class="col-md-6">

            <div class="sigma_product-single-content">

              <h4 class="entry-title"> {{ $produk->nama_produk }} </h4>

              <div class="sigma_product-price">
                <span>Rp {{ number_format($produk->harga) }}</span>
              </div>
              <p> 
                <strong>Availablity: <span>{{ $produk->status }}</span></strong> 
              </p>

              <form class="sigma_product-atc-form">
                <div class="qty-outter">
                  <ul class="sigma_sm">
                  <li>
                    <a href="https://api.whatsapp.com/send?phone=62089678833232&text=Halo%20admin,%20saya%20ingin%20order%20{{ $produk->nama_produk }}" class="sigma_btn-custom btn-pill" target="blank">Order Now <i class="fab fa-whatsapp"></i></a>
                  </li>
                </div>

              </form>
            </div>

          </div>
        </div>

      </div>
    </div>
  <!-- Product Content End -->

  <!-- Additional Information Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="sigma_product-additional-info">
        <div class="tab-content" id="bordered-tabContent">
          <div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel" aria-labelledby="tab-product-desc-tab">
            <h4>Deskripsi</h4>
            {!! $produk->deskripsi !!}
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Additional Information End -->

  <!-- Related Products start -->
  <div class="section pt-0">
    <div class="container">

      <div class="section-title text-center">
        <h4 class="title">Related Products</h4>
        <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
      </div>

      <div class="sigma_related-posts">

        <!-- Products Post Start -->
        <div class="sigma_related-slider">

          <!-- Product Start -->
          @foreach ($related_produk as $item)
            <div class="sigma_product">
              <div class="sigma_product-badge sigma_badge-featured">
                <i class="fa fa-star"></i>
              </div>
              <div class="sigma_product-thumb">
                <a href="{{ url('/details_product',$item) }}"><img src="{{ asset('post-images/'. $item->foto) }} "style="width:400px; height:250px" alt="product"></a>
              </div>
              <div class="sigma_product-body">
                <h5 class="sigma_product-title"> <a href="{{ url('/details_product',$item) }}">{{ $item->nama_produk }}</a> </h5>
                <div class="sigma_product-price">
                  <span>Rp {{ number_format($item->harga) }}</span>
                </div>
                <a href="{{ url('/details_product',$item) }}" class="sigma_btn-custom btn-sm dark btn-pill">Details</a>
              </div>
            </div>
          @endforeach
        </div>
        <!-- Products End -->

      </div>

    </div>
  </div>
  <!-- Related Products End -->
@endsection