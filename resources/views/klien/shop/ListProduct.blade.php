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
        <h1>Produk</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Products Start -->
  <div st class="section">
    <div class="container">
      <div>
        <div style="display: flex">
          <div>
            <!-- Search Widget Start -->
            <div>
              <div class="sidebar-widget widget-search">
                <h5 class="widget-title">Search</h5>
                <form method="get" action="{{ route('list_product') }}">
                  <div class="sigma_search-adv-input">
                    <input type="text" value="{{ request()->input('search', old('search')) }}" class="form-control" placeholder="search" name="search">
                    <input type="text" class="form-control" name="category" hidden value="{{request()->category}}">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- Search Widget End -->
            <!-- Categories Start -->
            <div style="margin-top: 1cm">
              <div class="sidebar-widget">
                <h5 class="widget-title"> Our Categories </h5>
                <ul class="sidebar-widget-list">
                  @foreach ($kategoris as $item)
                    <li> <a style="{{(request()->category == $item->id)?'color: #61be66;':''}}" href="{{ route('list_product', ["category"=>$item->id, "search"=>request()->search]) }}"> {{ $item->kategori_produk }} </a> </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- Categories End -->
          </div>
          <!-- Product Count & Orderby Start -->
          <div class="col-lg-9" style="margin-left: 1cm">
            <!-- Product Count & Orderby End -->

            <div class="row">

              <!-- Product Start -->
              @foreach($produks as $item)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="sigma_product">
                    <div class="sigma_product-thumb">
                      <a href="{{ url('/details_product',$item) }}"><img src="{{ asset('post-images/'. $item->foto) }}" style="width:350px; height:200px" alt="product"></a>
                    </div>
                    <div class="sigma_product-body">
                      <h5 class="sigma_product-title"> <a href="{{ url('/details_product',$item) }}">{{ $item->nama_produk }}</a> </h5>
                      <div class="sigma_product-price">
                        <span>Rp {{ number_format($item->harga) }}</span>
                      </div>
                      <a href="{{ url('/details_product',$item) }}" class="sigma_btn-custom btn-sm dark btn-pill">Details</a>
                    </div>
                  </div>
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
      <!-- Pagination Start -->
      <ul style="margin-top: 3cm" class="pagination">
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
@endsection