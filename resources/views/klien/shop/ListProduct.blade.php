@extends('klien.layout.App')

@section('content')
  <!-- Products Start -->
  <div class="section">
    <div class="container">

      <!-- Product Count & Orderby Start -->
      <div class="sigma_shop-global">
        <p>Showing <b>20</b> of <b>320</b> products </p>
        <form method="post">
          <select class="form-control" name="orderby">
            <option value="default">Default sorting</option>
            <option value="latest">Latest release</option>
            <option value="price-down">Price: High - Low</option>
            <option value="price-up">Price: Low - High</option>
            <option value="popularity">Popularity Sorting</option>
          </select>
        </form>
      </div>
      <!-- Product Count & Orderby End -->

      <div class="row masonry">

        <!-- Product Start -->
        @foreach($produks as $item)
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
            <div class="sigma_product">
              {{-- <div class="sigma_product-badge sigma_badge-featured">
                <i class="fa fa-star"></i>
              </div> --}}
              <div class="sigma_product-thumb">
                <a href="{{ route('produk.detail',$item) }}"><img src="{{ asset('post-images/'. $item->foto) }}" alt="product"></a>
              </div>
              <div class="sigma_product-body">
                <h5 class="sigma_product-title"> <a href="{{ route('produk.detail',$item) }}">{{ $item->nama_produk }}</a> </h5>
                <div class="sigma_product-price">
                  <span>{{ $item->harga }}</span>
                </div>
                <a href="{{ route('produk.detail',$item) }}" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>
              </div>
            </div>
          </div>
        @endforeach
        <!-- Product End -->

        {{-- <!-- Product Start -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
          <div class="sigma_product">
            <div class="sigma_product-thumb">
              <a href="/details_product"><img src="assets/img/products/2.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="/details_product">Package Design</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
              </div>
              <a href="/details_product" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
          <div class="sigma_product">
            <div class="sigma_product-badge sigma_badge-sale">
              25% Off
            </div>
            <div class="sigma_product-thumb">
              <a href="/details_product"><img src="assets/img/products/3.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="/details_product">Cover Van</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
                <span>29$</span>
              </div>
              <a href="/details_product" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
          <div class="sigma_product">
            <div class="sigma_product-badge sigma_badge-featured">
              <i class="fa fa-star"></i>
            </div>
            <div class="sigma_product-thumb">
              <a href="/details_product"><img src="assets/img/products/4.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="/details_product">Book Cover</a> </h5>
              <div class="sigma_product-price">
                <span>29$</span>
              </div>
              <a href="/details_product" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
          <div class="sigma_product">
            <div class="sigma_product-badge sigma_badge-featured">
              <i class="fa fa-star"></i>
            </div>
            <div class="sigma_product-thumb">
              <a href="/details_product"><img src="assets/img/products/5.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="/details_product">Pillow Casings</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
              </div>
              <a href="/details_product" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
          <div class="sigma_product">
            <div class="sigma_product-thumb">
              <div class="sigma_product-badge sigma_badge-sale">
                25% Off
              </div>
              <a href="/details_product"><img src="assets/img/products/6.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="/details_product">Book Modeling</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
                <span>29$</span>
              </div>
              <a href="/details_product" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
          <div class="sigma_product">
            <div class="sigma_product-thumb">
              <a href="/details_product"><img src="assets/img/products/7.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="/details_product">Cup Designs</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
              </div>
              <a href="/details_product" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
        </div>
        <!-- Product End -->

        <!-- Product Start -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 masonry-item">
          <div class="sigma_product">
            <div class="sigma_product-thumb">
              <a href="/details_product"><img src="assets/img/products/8.jpg" alt="product"></a>
            </div>
            <div class="sigma_product-body">
              <h5 class="sigma_product-title"> <a href="/details_product">Polaroid Enhancement</a> </h5>
              <div class="sigma_product-price">
                <span>19$</span>
              </div>
              <a href="/details_product" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

            </div>
          </div>
        </div>
        <!-- Product End --> --}}

      </div>

      <!-- Pagination Start -->
      <ul class="pagination">
        <li class="page-item active">
          <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
      <!-- Pagination End -->

    </div>
  </div>
  <!-- Products End -->

  <!-- Clients Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="row no-gutters">

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
              <img src="assets/img/clients/1.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/2.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/3.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/4.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/5.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/6.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/7.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/8.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/9.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/10.html" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/11.png" alt="client">
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 p-0">
          <div class="sigma_client">
            <img src="assets/img/clients/12.png" alt="client">
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Clients End -->
@endsection