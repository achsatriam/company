@extends('klien.layout.App')

@section('content')
  <!-- Post Content Start -->
  <div class="section sigma_post-single">
    <div class="container">

      <div class="row">

        <!-- Sidebar Start -->
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
              <form method="post">
                <div class="sigma_search-adv-input">
                  <input type="text" class="form-control" placeholder="Search Posts" name="search" value="">
                  <button type="submit" name="button"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
            <!-- Search Widget End -->

            <!-- Categories Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Our Categories </h5>
              <ul class="sidebar-widget-list">
                <li> <a href="#"> Slate & Crystal Events </a> </li>
                <li> <a href="#"> Indigo Event Planning </a> </li>
                <li> <a href="#"> Buttercup Events </a> </li>
                <li> <a href="#"> Done Right Event Designs </a> </li>
                <li> <a href="#"> Polished Events </a> </li>
                <li> <a href="#"> Posh Peony Events </a> </li>
                <li> <a href="#"> Dark Roast Events </a> </li>
                <li> <a href="#"> Origami Crane Wedding Planners </a> </li>
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

            <!-- Ad banner Start -->
            <div class="sidebar-widget widget-ad p-0 border-0">
              <a href="#">
                <img src="assets/img/blog/details/5.jpg" alt="ad">
              </a>
            </div>
            <!-- Ad banner End -->

          </div>
        </div>
        <!-- Sidebar End -->

        <div class="col-lg-8">

          <div class="entry-content">
            <div class="sigma_post-single-thumb">
              <img src="{{ asset('post-images/'. $blog->foto) }}" alt="post">
            </div>
            <h3 class="entry-title">{{ $blog->nama_blog }}</h3>
            <div class="sigma_post-meta">
              {{-- <div class="sigma_post-categories">
                <a href="blog-details.html" class="sigma_post-category">{{ $blog->nama_blog }}</a>
              </div> --}}
              <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
            </div>
            <p>
              {!! $blog->deskripsi !!}
            </p>
            {{-- <h4>Becoming a better version of you</h4>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="#">Lorem Ipsum has been the industry's</a> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
              to make a type specimen book.
            </p>
            <a href="assets/img/blog/details/2.jpg" class="gallery-thumb">
              <img src="assets/img/blog/details/2.jpg" alt="post">
            </a>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
              galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
            </p>
            <div class="row">
              <div class="col-md-6">
                <a href="assets/img/blog/details/3.jpg" class="gallery-thumb">
                  <img src="assets/img/blog/details/3.jpg" alt="post">
                </a>
              </div>
              <div class="col-md-6">
                <a href="assets/img/blog/details/4.jpg" class="gallery-thumb">
                  <img src="assets/img/blog/details/4.jpg" alt="post">
                </a>
              </div>
            </div>

            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
              galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
              of Letraset sheets
              containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <blockquote>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </blockquote>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
              specimen book.
              It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
              recently with
              desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </p> --}}
          </div>

          <!-- Post Meta Start -->
          <div class="sigma_post-single-meta">
            <div class="sigma_post-single-meta-item">
              <h6>Tags</h6>
              <div class="tagcloud">
                <a href="#">#Health</a>
                <a href="#">#Spa</a>
                <a href="#">#Fiber</a>
              </div>
            </div>
            <div class="sigma_post-single-meta-item sigma_post-share">
              <h6>Share</h6>
              <ul class="sigma_sm">
                <li>
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Post Meta End -->

          <!-- Comments Start -->
          <div class="section pb-0">
            <h6>Comments</h6>
            <div class="comments-list">
              <ul>
                <li class="comment-item">
                  <img src="assets/img/people/1.jpg" alt="comment author">
                  <div class="comment-body">
                    <h5>Robert John</h5>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <a href="#" class="btn-link"> Reply <i class="far fa-reply"></i> </a>
                    <span> <i class="far fa-clock"></i> January 13 2020</span>
                  </div>
                </li>
                <li class="comment-item">
                  <img src="assets/img/people/2.jpg" alt="comment author">
                  <div class="comment-body">
                    <h5>Christine Hill</h5>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches</p>
                    <a href="#" class="btn-link"> Reply <i class="far fa-reply"></i> </a>
                    <span> <i class="far fa-clock"></i> December 27 2020</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="section pb-0">
            <h6>Leave a Comment</h6>
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
                <button type="submit" class="sigma_btn-custom secondary btn-pill" name="button">Post Comment</button>

              </form>
            </div>
          </div>
          <!-- Comments End -->

        </div>

      </div>

    </div>
  </div>
  <!-- Post Content End -->

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