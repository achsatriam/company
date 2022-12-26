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

              <div class="sigma_rating-wrapper">
                <div class="sigma_rating">
                  <i class="far fa-star active"></i>
                  <i class="far fa-star active"></i>
                  <i class="far fa-star active"></i>
                  <i class="far fa-star active"></i>
                  <i class="far fa-star"></i>
                </div>
                <span>255 Reviews</span>
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

        <ul class="nav" id="bordered-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab-product-desc-tab" data-toggle="pill" href="#tab-product-desc" role="tab" aria-controls="tab-product-desc" aria-selected="true">Deskripsi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-product-info-tab" data-toggle="pill" href="#tab-product-info" role="tab" aria-controls="tab-product-info" aria-selected="false">Informasi Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-product-reviews-tab" data-toggle="pill" href="#tab-product-reviews" role="tab" aria-controls="tab-product-reviews" aria-selected="false">Reviews </a>
          </li>
        </ul>

        <div class="tab-content" id="bordered-tabContent">
          <div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel" aria-labelledby="tab-product-desc-tab">
            <h4>Deskripsi</h4>
            {!! $produk->deskripsi !!}
          </div>
          <div class="tab-pane fade" id="tab-product-info" role="tabpanel" aria-labelledby="tab-product-info-tab">
            <h4>Additional Information</h4>

            <table>
              <thead>
                <tr>
                  <th scope="col">Attributes</th>
                  <th scope="col">Values</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <strong>Color</strong> </td>
                  <td>blue, red, yellow, green</td>
                </tr>
                <tr>
                  <td> <strong>Material</strong> </td>
                  <td>wood, plastic, stainless steel</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="tab-product-reviews" role="tabpanel" aria-labelledby="tab-product-reviews-tab">
            <h4>Leave a Review</h4>

            <div class="sigma_rating-wrapper">
              <div class="sigma_rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <span>Your Review</span>
            </div>

            <!-- Review Form start -->
            <div class="comment-form">
              <form method="post">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" placeholder="Full Name" name="fname" value="">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" placeholder="Email Address" name="email" value="">
                  </div>
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" placeholder="Type your comment..." name="comment" rows="7"></textarea>
                  </div>
                </div>

                <button type="submit" class="sigma_btn-custom secondary btn-pill" name="button">Post Review</button>
              </form>
            </div>
            <!-- Review Form End -->

            <!-- Reviews Start -->
            <div class="comments-list">
              <ul>
                <li class="comment-item">
                  <img src="assets/img/people/1.jpg" alt="comment author">
                  <div class="comment-body">

                    <h5>Robert John</h5>
                    <div class="sigma_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>

                    <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <a href="#" class="btn-link"> Reply <i class="far fa-reply"></i> </a>
                    <span><i class="far fa-clock"></i> January 13 2020</span>
                  </div>
                </li>
                <li class="comment-item">
                  <img src="assets/img/people/2.jpg" alt="comment author">
                  <div class="comment-body">
                    <h5>Christine Hill</h5>
                    <div class="sigma_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                    </div>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches</p>
                    <a href="#" class="btn-link"> Reply <i class="far fa-reply"></i> </a>
                    <span><i class="far fa-clock"></i> January 13 2020</span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- Reviews End -->

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
          <!-- Product End -->

          {{-- <!-- Product Start -->
            <div class="sigma_product">
              <div class="sigma_product-thumb">
                <a href="product-single.html"><img src="assets/img/products/2.jpg" alt="product"></a>
              </div>
              <div class="sigma_product-body">
                <h5 class="sigma_product-title"> <a href="product-single.html">Package Design</a> </h5>
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
                <h5 class="sigma_product-title"> <a href="product-single.html">Cover Van</a> </h5>
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
                <h5 class="sigma_product-title"> <a href="product-single.html">Book Cover</a> </h5>
                <div class="sigma_product-price">
                  <span>29$</span>
                </div>
                <a href="product-single.html" class="sigma_btn-custom btn-sm dark btn-pill">Buy Now</a>

              </div>
            </div> --}}
          <!-- Product End -->

        </div>
        <!-- Products End -->

      </div>

    </div>
  </div>
  <!-- Related Products End -->
@endsection