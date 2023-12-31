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

    <div class="main-container" style="margin-right: 100px; margin-left: 100px">
      <div class="sigma_subheader-inner">
        <h1>Blog</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home Page</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->
  <!-- Post Content Start -->
  <div class="section sigma_post-single">
    <div class="main-container" style="margin-right: 100px; margin-left: 100px">

      <div class="row">

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <div class="sidebar">

            <!-- Search Widget Start -->
            <div class="sidebar-widget widget-search">
              <h5 class="widget-title">Search</h5>
              <form method="get" action="{{ route('list_blog') }}">
                <div class="sigma_search-adv-input">
                  <input type="text" value="{{ request()->input('search', old('search')) }}" class="form-control" placeholder="search" name="search">
                  <input type="text" class="form-control" name="category" hidden value="{{request()->category}}">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
            <!-- Search Widget End -->

            <!-- Categories Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Our Categories </h5>
              <ul class="sidebar-widget-list">
                @foreach ($kategoris as $item)
                  <li> <a style="{{(request()->category == $item->id)?'color: #61be66;':''}}" href="{{ route('list_blog', ["category"=>$item->id, "search"=>request()->search]) }}"> {{ $item->kategori_blog }} </a> </li>
                @endforeach
              </ul>

            </div>
            <!-- Categories End -->
          </div>
        </div>
        <div class="col-8">
          <div class="row">
            @foreach ($blogs as $item)
            <div class="col-md-4">
              <article class="sigma_post">
                <div class="sigma_post-thumb" style="height: 172px">
                    <a href="{{ url('/details_blog',$item) }}">
                      <img class="img-fluid" src="{{ asset('post-images/'. $item->foto) }}" alt="post">
                    </a>
                </div>
                <div class="sigma_post-body">
                    <div class="sigma_post-meta">
                      <div class="sigma_post-categories">
                        <a href="blog-details.html" class="sigma_post-category">{{ $item->kategori_blog->kategori_blog }}</a>
                      </div>
                      <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i>{{ $item->tanggal_blog }}</a>
                    </div>
                    <h5> <a href="blog-details.html">{{ $item->nama_blog }}</a> </h5>
                </div>
                </article>
              </div>
              <!-- Article End -->
              
              @endforeach
            </div>
         </div>
      </div>
        <!-- Sidebar End -->
       
        

    </div>
  </div>
  <!-- Post Content End -->
@endsection