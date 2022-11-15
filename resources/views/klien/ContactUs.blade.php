@extends('klien.layout.App')

@section('content')
    <!-- Icons Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="section-title text-center">
                <h6 class="subtitle">Information</h6>
                <h4 class="title">Get in Touch</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipi sicing elit, sed do eiusmod tempor incididut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="sigma_icon-block icon-block-7">
                        <i class="flaticon-call"></i>
                        <div class="sigma_icon-block-content">
                            <h5>Call Us</h5>
                            <p>+123 456 789 - +123 874 930</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sigma_icon-block icon-block-7">
                        <i class="flaticon-message"></i>
                        <div class="sigma_icon-block-content">
                            <h5>Mail Us</h5>
                            <p>info@example.com - support@example.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sigma_icon-block icon-block-7">
                        <i class="flaticon-paper-plane"></i>
                        <div class="sigma_icon-block-content">
                            <h5>Find Us</h5>
                            <p>121 King Street, Melbourne Victoria</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Icons End -->

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
            <div class="section pb-0">
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
            <div class="bg-cover sigma_contact-bg" style="background-image: url(assets/img/about3.jpg);"></div>
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
                        <li>
                            <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fab fa-twitter"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact form End -->

    <!-- Clients Start -->
    <div class="section">
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
                        <img src="assets/img/clients/10.png" alt="client">
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