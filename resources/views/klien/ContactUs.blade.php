@extends('klien.layout.App')

@section('content')
    <!-- Subheader Start -->
    <div class="sigma_subheader">

        <!-- Bottom Wave -->
        <div class="sigma_subheader-shape waves">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>

        <div class="sigma_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914406081493!2d2.292292615201654!3d48.85837360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sin!4v1571115084828!5m2!1sen!2sin"
                height="400" allowfullscreen=""></iframe>
        </div>

    </div>
    <!-- Subheader End -->
    
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

    <!-- Map Start -->
    <div  class="section pt-0">
        <div class="container">

        <div class="sigma_map">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914406081493!2d2.292292615201654!3d48.85837360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sin!4v1571115084828!5m2!1sen!2sin"
            height="400" allowfullscreen=""></iframe>
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
    </div>
    <!-- Map End -->

    <!-- Contact form Start -->
    <div class="row">

        <div style="margin-bottom: 8cm" class="col-lg-2 d-none d-lg-block">
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
@endsection