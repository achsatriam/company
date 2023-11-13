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
            <h1>About us</h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About us</li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    <!-- Subheader End -->

    <!-- About Start -->
    <section class="section">
        <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5 mb-lg-30 position-relative">
            <div class="sigma_dots dots-1 secondary d-none d-lg-block"></div>
            <img src="assets/img/about.jpg" alt="about">
            </div>

            <div class="offset-lg-1 col-lg-5">
            <div class="sigma_about-content">
                <div class="section-title text-left">
                <h4 class="title">Be Your Own Boss </h4>
                <span class="small-text custom-primary">Start your business venture</span>
                </div>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
                sometimes by accident, sometimes on purpose (injected humour and the like). If you are going to use a passage of Lorem Ipsum.</p>
                <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined. chunks as necessary.</p>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
                sometimes by accident, sometimes on purpose (injected humour and the like). If you are going to use a passage of Lorem Ipsum.</p>
            </div>
            </div>

            <div class="col-lg-1">
            <div class="sigma_dots dots-2 primary d-none d-lg-block"></div>
            </div>

        </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Icons Start -->
    <div class="section section-padding pt-0">
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

    <!-- CTA Start -->
    <div class="section section-lg bg-cover bg-center bg-norepeat" style="background-image: url(assets/img/banner/5.jpg)">
        <div class="container">

        <div class="section-title text-center">
            <h6 class="subtitle custom-secondary">About Us</h6>
            <h4 class="title text-white"> Let Us Help You With All Of Your Printing Needs </h4>
            <p class="text-white">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed.</p>
        </div>

        </div>
        <svg class="bottom-skew" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,320L1440,192L1440,320L0,320Z"></path>
        </svg>
    </div>
    <!-- CTA End -->

    <!-- Services Start -->
    <div class="section section-padding">
        <div class="container">

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

    <!-- Contact form Start -->
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
    <!-- Contact form End -->

    <!-- Blog start -->
    <div class="section section-padding">
        <div class="container">

        <div class="section-title text-center">
            <h4 class="title">Latest News</h4>
            <p>Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="row">
            <!-- Article Start -->
            <div class="col-lg-4 col-md-6">
            <article class="sigma_post">
                <div class="sigma_post-thumb">
                <a href="blog-details.html">
                    <img src="assets/img/blog/1.jpg" alt="post">
                </a>
                </div>
                <div class="sigma_post-body">
                <div class="sigma_post-meta">
                    <div class="sigma_post-categories">
                    <a href="blog-details.html" class="sigma_post-category">T-shirt Design</a>
                    </div>
                    <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
                </div>
                <h5> <a href="blog-details.html">Hue Colors that better match trendy designs</a> </h5>
                </div>
            </article>
            </div>
            <!-- Article End -->

            <!-- Article Start -->
            <div class="col-lg-4 col-md-6">
            <article class="sigma_post">
                <div class="sigma_post-thumb">
                <a href="blog-details.html">
                    <img src="assets/img/blog/2.jpg" alt="post">
                </a>
                </div>
                <div class="sigma_post-body">
                <div class="sigma_post-meta">
                    <div class="sigma_post-categories">
                    <a href="blog-details.html" class="sigma_post-category">T-shirt Design</a>
                    </div>
                    <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
                </div>
                <h5> <a href="blog-details.html">We are providing free copies for back to school</a> </h5>
                </div>
            </article>
            </div>
            <!-- Article End -->

            <!-- Article Start -->
            <div class="col-lg-4 col-md-6">
            <article class="sigma_post">
                <div class="sigma_post-thumb">
                <a href="blog-details.html">
                    <img src="assets/img/blog/3.jpg" alt="post">
                </a>
                </div>
                <div class="sigma_post-body">
                <div class="sigma_post-meta">
                    <div class="sigma_post-categories">
                    <a href="blog-details.html" class="sigma_post-category">T-shirt Design</a>
                    </div>
                    <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2021</a>
                </div>
                <h5> <a href="blog-details.html">How to relax all day without additives</a> </h5>
                </div>
            </article>
            </div>
            <!-- Article End -->
        </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection