

@extends('layouts.pages')
@section('content')

    <!-- Carousel Start -->
    <div class="p-0 container-fluid position-relative">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="mb-3 text-white text-uppercase animated slideInDown">Creative & Innovative</h5>
                            <h1 class="text-white display-1 mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="mailto:amtechdigitalnetworks@gmail.com" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chat with us</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="mb-3 text-white text-uppercase animated slideInDown">Creative & Innovative</h5>
                            <h1 class="text-white display-1 mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="mailto:amtechdigitalnetworks@gmail.com" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chat with us</a>
                            <a href="#contact-us" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Facts Start -->
    <div class="py-5 container-fluid facts pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="p-4 shadow bg-primary d-flex align-items-center justify-content-center" style="height: 150px;">
                        <div class="mb-2 bg-white rounded d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-0 text-white">Happy Clients</h5>
                            <h1 class="mb-0 text-white" data-toggle="counter-up">126</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="p-4 shadow bg-light d-flex align-items-center justify-content-center" style="height: 150px;">
                        <div class="mb-2 rounded bg-primary d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="text-white fa fa-check"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-0 text-primary">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">2345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="p-4 shadow bg-primary d-flex align-items-center justify-content-center" style="height: 150px;">
                        <div class="mb-2 bg-white rounded d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-0 text-white">Win Awards</h5>
                            <h1 class="mb-0 text-white" data-toggle="counter-up">75</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    @include('pages.partials.about')
    <!-- About End -->


    <!-- Features Start -->
    @include('pages.partials.features')
    <!-- Features Start -->


    <!-- Service Start -->
    @include('pages.partials.services')
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    @include('pages.partials.pricing')
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    @include('pages.partials.quote')
    <!-- Quote End -->


    <!-- Testimonial Start -->
    @include('pages.partials.testimonial')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('pages.partials.team')
    <!-- Team End -->


    <!-- Blog Start -->
    @include('pages.partials.blog')
    <!-- Blog Start -->


    <!-- Vendor Start -->
    @include('pages.partials.vendor')
    <!-- Vendor End -->

@endsection
