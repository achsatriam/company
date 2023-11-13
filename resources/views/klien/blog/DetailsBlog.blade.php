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
        <h1>Blog Details</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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
      <div class="col-md-12">
        <div class="">
          <img src="{{ asset('post-images/'. $blog->foto) }}" style="width:100%" alt="product">
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
          <h4 class="entry-title"> {{ $blog->nama_blog }} </h4>
          <a href="" class="sigma_post-date"> <i class="far fa-calendar"></i>{!! $blog->tanggal_blog !!}</a>
        </li>
      <div class="tab-content" id="bordered-tabContent">
        <div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel" aria-labelledby="tab-product-desc-tab">
          {!! $blog->deskripsi !!}
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
      <h4 class="title">Related Blogs</h4>
      <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    </div>

    <div class="sigma_related-posts">

      <!-- Products Post Start -->
      <div class="sigma_related-slider">

        <!-- Product Start -->
        @foreach ($related_blog as $item)
          <div class="sigma_product">
            <article class="sigma_post">
              <div class="sigma_post-thumb" style="width:350px; height:200px">
              <a href="{{ url('/details_blog',$item) }}">
                  <img class="img-fluid" src="{{ asset('post-images/'. $item->foto) }}" alt="post">
              </a>
              </div>
              <div class="sigma_post-body">
              <div class="sigma_post-meta">
                  <div class="sigma_post-categories">
                  <a href="{{ url('/details_blog',$item) }}" class="sigma_post-category">{{ $item->kategori_blog->kategori_blog }}</a>
                  </div>
                  <a href="{{ url('/details_blog',$item) }}" class="sigma_post-date"> <i class="far fa-calendar"></i>{{ $item->tanggal_blog }}</a>
              </div>
              <h5> <a href="{{ url('/details_blog',$item) }}">{{ $item->nama_blog }}</a> </h5>
              </div>
          </article>
          </div>
        @endforeach
      </div>
      <!-- Products End -->

    </div>

  </div>
</div>
<!-- Related Products End -->
@endsection


