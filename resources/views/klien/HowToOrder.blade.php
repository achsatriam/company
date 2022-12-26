@extends('klien.layout.App')

@section('content')
    <!-- Header Start -->
    <header class="sigma_header header-1 can-sticky header-absolute header-light">

        <!-- Middle Header Start -->
        <div class="sigma_header-middle">
        <div class="container">
            <nav class="navbar">

            <!-- Logo Start -->
            <div class="sigma_logo-wrapper">
                <a class="navbar-brand" href="index-2.html">
                <img src="{{ asset('assets/img/logo.png')}}" alt="logo">
                </a>
            </div>
            <!-- Logo End -->

            <!-- Menu -->
            <ul class="navbar-nav">
                <li class="menu-item">
                <a href="/">Home Page</a>
                </li>
                <li class="menu-item">
                <a href="/list_blog">Blog</a>
                </li>
                <li class="menu-item">
                <a href="/list_product">Produk</a>
                </li>
                <li class="menu-item">
                <a href="/how_to_order">How to order</a>
                </li>
                <li class="menu-item">
                <a href="/about_us">About us</a>
                </li>
                <li class="menu-item">
                <a href="/contact_us">Contact Us</a>
                </li>
            </ul>

            <!-- Controls -->
            <a href="contact-us.html" class="sigma_btn-custom btn-sm light btn-pill d-none d-lg-block">Get a Quote</a>

            <!-- Mobile Toggler -->
            <div class="aside-toggler style-2 aside-trigger-left">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            </nav>
        </div>
        </div>
        <!-- Middle Header End -->

    </header>
    <!-- Header End -->

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
            <h1>How to order</h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">How to order</li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    <!-- Subheader End -->

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

    <!-- Testimonials Start -->
    <section class="section">
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
    
    <!-- Instagram Start -->
    <div class="section">
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
@endsection