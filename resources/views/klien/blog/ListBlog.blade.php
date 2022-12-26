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
        <h1>Blog</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <div class="section">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="sidebar">

            <!-- About Author Start -->
            <div class="sidebar-widget widget-about-author">
              <div class="widget-about-author-inner">
                <img src="assets/img/people/4.jpg" alt="author">
                <h5>About Me</h5>
                <p>"Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit"</p>
                <a href="#">Johny Bora</a>
              </div>
            </div>
            <!-- About Author End -->

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

            <!-- Popular Tags Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title">Popular Tags</h5>
              <div class="tagcloud">
                <a href="#">Isabella</a>
                <a href="#">Samantha</a>
                <a href="#">Emily</a>
                <a href="#">June</a>
                <a href="#">Grace</a>
                <a href="#">Madison</a>
                <a href="#">Heather</a>
                <a href="#">Micheal</a>

              </div>
            </div>
            <!-- Popular Tags End -->

            {{-- <!-- Ad banner Start -->
            <div class="sidebar-widget widget-ad p-0 border-0">
              <a href="#">
                <img src="assets/img/blog/details/5.jpg" alt="ad">
              </a>
            </div>
            <!-- Ad banner End --> --}}

          </div>
        </div>
        <div class="col-lg-8">

          <!-- Article Start -->
          @foreach($blogs as $item)
            <article class="sigma_post">
              <div class="sigma_post-thumb">
                <a href="{{ url('/details_blog',$item) }}">
                  <img src="{{ asset('post-images/'. $item->foto) }}" style="width:750px; height:400px" alt="post">
                </a>
              </div>
              <div class="sigma_post-body">
                <div class="sigma_post-meta">
                  {{-- <div class="sigma_post-categories">
                    <a href="{{ url('blog.detail',$item) }}" class="sigma_post-category">{{ $item->nama_blog }}</a>
                  </div> --}}
                  <a href="{{ url('blog.detail',$item) }}" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
                </div>
                <h5> <a href="{{ url('blog.detail',$item) }}">{{ $item->nama_blog }}</a> </h5>
                <p>{!! $deskripsi = substr($item->deskripsi, 0, 400) !!} <a href="{{ url('blog.detail',$item) }}">...Read more</a></p>
              </div>
            </article>
          @endforeach
          <!-- Article End -->

          {{-- <!-- Article Start (Video) -->
          <article class="sigma_post post-format-video">
            <div class="sigma_post-thumb">
              <img src="assets/img/blog/2-lg.jpg" alt="post">
              <a href="https://www.youtube.com/watch?v=TKnufs85hXk" class="sigma_video-popup popup-youtube">
                <i class="far fa-play"></i>
              </a>
            </div>
            <div class="sigma_post-body">
              <div class="sigma_post-meta">
                <div class="sigma_post-categories">
                  <a href="/details_blog" class="sigma_post-category">T-shirt Design</a>
                </div>
                <a href="/details_blog" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
              </div>
              <h5> <a href="/details_blog">How to relax all day without additives</a> </h5>
              <p>You should be able to find several indispensable facts about motivation in the following paragraphs. If there’s at least one fact you didn’t know before, imagine the difference it might make. It’s so difficult to go on when everything seems to fail, isn’t it.</p>
            </div>
          </article>
          <!-- Article End -->

          <!-- Article Start (Audio) -->
          <article class="sigma_post post-format-audio">
            <div class="sigma_post-thumb">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/41395010&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;visual=false"></iframe>
              </div>
            </div>
            <div class="sigma_post-body">
              <div class="sigma_post-meta">
                <div class="sigma_post-categories">
                  <a href="/details_blog" class="sigma_post-category">T-shirt Design</a>
                </div>
                <a href="/details_blog" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
              </div>
              <h5> <a href="/details_blog">How to relax all day without additives</a> </h5>
              <p>You should be able to find several indispensable facts about motivation in the following paragraphs. If there’s at least one fact you didn’t know before, imagine the difference it might make. It’s so difficult to go on when everything seems to fail, isn’t it.</p>
            </div>
          </article>
          <!-- Article End -->

          <!-- Article Start (Quote) -->
          <article class="sigma_post post-format-quote">
            <div class="sigma_post-body">
              <div class="sigma_post-meta">
                <div class="sigma_post-categories">
                  <a href="/details_blog" class="sigma_post-category">T-shirt Design</a>
                </div>
                <a href="/details_blog" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
              </div>
              <h5> <a href="/details_blog">How to relax all day without additives</a> </h5>
              <p>You should be able to find several indispensable facts about motivation in the following paragraphs. If there’s at least one fact you didn’t know before, imagine the difference it might make. It’s so difficult to go on when everything seems to fail, isn’t it.</p>
            </div>
          </article>
          <!-- Article End --> --}}

        </div>

      </div>

      <!-- Pagination Start -->
      <ul class="pagination mb-0">
        <li class="page-item"><a class="page-link" href="#"> <i class="far fa-chevron-left"></i> </a></li>
        <li class="page-item active">
          <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#"> <i class="far fa-chevron-right"></i> </a></li>
      </ul>
      <!-- Pagination End -->

    </div>
  </div>

  {{-- <!-- Contact form Start -->
  <div class="row">

    <div class="col-lg-2 d-none d-lg-block">
      <div class="section">
        <div class="section-title flip d-none d-lg-block">
          <h4 class="title">Get in Touch!</h4>
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
              <label>Full Name</label>
              <input type="text" class="form-control" name="Name">
            </div>
            <div class="form-group">
              <label>Email Address <em class="text-danger">*</em> </label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label>Subject <em class="text-danger">*</em> </label>
              <input type="text" class="form-control" name="subject">
            </div>
            <div class="form-group">
              <label>Message <em class="text-danger">*</em> </label>
              <textarea name="message" cols="45" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="sigma_btn-custom secondary" name="button">Submit Now</button>
          </form>
        </div>
      </div>
    </div>
    <div class="offset-lg-1 col-lg-6 position-relative">
      <div class="bg-cover sigma_contact-bg mt-0" style="background-image: url(assets/img/about3.jpg);"></div>
      <div class="sigma_contact-info">
        <h3 class="text-white">Contact Details</h3>
        <div class="sigma_contact-info-item">
          <h6>Location</h6>
          <p>121 King Street, Melbourne Victoria</p>
          <p>3000, Autstralia</p>
        </div>
        <div class="sigma_contact-info-item">
          <h6>Mail Box</h6>
          <p>phantom.info@gmail.com</p>
          <p>etchenetomi.info@gmail.com</p>
        </div>
        <div class="sigma_contact-info-item">
          <h6>Mail Box</h6>
          <p>(+555) 666 777 888 999</p>
          <p>(+555) 666 777 888 999</p>
        </div>
        <div class="sigma_contact-info-item">
          <ul class="sigma_sm">
            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <!-- Contact form End --> --}}
@endsection