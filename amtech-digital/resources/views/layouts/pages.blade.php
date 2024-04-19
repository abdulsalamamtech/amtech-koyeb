<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Amtech Digital networks - everithing digital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Amtech Digital Networks, web site, mobile app, graphics design, and ui/ux" name="keywords">
    <meta content="Amtech Digital Networks, web site, mobile app, graphics design, and ui/ux" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
        <div id="spinner" class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner"></div>
        </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
        <div class="px-5 container-fluid bg-dark d-none d-lg-block">
            <div class="row gx-0">
                <div class="mb-2 text-center col-lg-8 text-lg-start mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 State Raod, Nassarawa LGA, Kano State, Nigeria</small>
                        <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+234 90 9192 2467</small>
                        <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@amtech.com.ng</small>
                    </div>
                </div>
                <div class="text-center col-lg-4 text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.twitter.com/amtechdigitalnetworks"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/amtechdigitalnetworks"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/in/amtechdigitalnetworks"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.youtube.com/@amtechdigitalnetworks"><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Topbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="border-0 modal-header">
                    <button type="button" class="bg-white btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="p-3 bg-transparent form-control border-primary" placeholder="Type search keyword">
                        <button class="px-4 btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Navbar Start -->
    <div class="p-0 container-fluid position-relative">
        <nav class="px-5 py-3 navbar navbar-expand-lg navbar-dark py-lg-0">
            <a href="{{ route('home') }}" class="p-0 navbar-brand">
                <h1 class="m-0"><i class="fa fa-sun me-2"></i>Amtech <span class="text-primary">Digital</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="py-0 navbar-nav ms-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::routeIs('home')? 'active': '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::routeIs('about')? 'active': '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ Request::routeIs('services')? 'active': '' }}">Services</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs(['blog'])? 'active': '' }}" data-bs-toggle="dropdown">Blog</a>
                        <div class="m-0 dropdown-menu">
                            <a href="{{ route('blog') }}" class="dropdown-item">Blog Grid</a>
                            <a href="{{ route('blog') }}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs(['price', 'team', 'testimonial', 'quote'])? 'active': '' }}" data-bs-toggle="dropdown">Pages</a>
                        <div class="m-0 dropdown-menu">
                            <a href="{{ route('price') }}" class="dropdown-item">Pricing Plan</a>
                            <a href="{{ route('team') }}" class="dropdown-item">Team Members</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('quote') }}" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::routeIs('contact')? 'active': '' }}">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="mailto:amtechdigitalnetworks@gmail.com" class="px-4 py-2 btn btn-primary ms-3">Chat with us</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    {{-- Load pages Start --}}
        @yield('content')
    {{-- Load Pages End --}}


    <!-- Footer Start -->
    <div class="mt-5 container-fluid bg-dark text-light wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="p-4 text-center d-flex flex-column align-items-center justify-content-center h-100 bg-primary">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-sun me-2"></i>Amtech</h1>
                        </a>
                        <p class="mt-1 mb-1">Digital Networks</p>
                        <p class="mt-3 mb-4">We develop website, mobile app for business and enterprice, we build and customize your brand to stand out.
                        </p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="p-3 border-white form-control" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="pt-5 mb-5 col-lg-4 col-md-12">
                            <div class="pb-3 mb-4 section-title section-title-sm position-relative">
                                <h3 class="mb-0 text-light">Get In Touch</h3>
                            </div>
                            <div class="mb-2 d-flex">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 State Raod, Nassarawa LGA, Kano State, Nigeria</p>
                            </div>
                            <div class="mb-2 d-flex">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@amtech.com.ng</p>
                            </div>
                            <div class="mb-2 d-flex">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+234 909 192 2467</p>
                            </div>
                            <div class="mt-4 d-flex">
                                <a class="btn btn-primary btn-square me-2" href="https//www.twitter.com/amtechdigitalnetworks"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https//www.facebook.com/amtechdigitalnetworks"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https//www.linkedin.com/in/amtechdigitalnetworks"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https//www.youtube.com/@amtechdigitalnetworks"><i class="fab fa-youtube fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="pt-0 mb-5 col-lg-4 col-md-12 pt-lg-5">
                            <div class="pb-3 mb-4 section-title section-title-sm position-relative">
                                <h3 class="mb-0 text-light">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="pt-0 mb-5 col-lg-4 col-md-12 pt-lg-5">
                            <div class="pb-3 mb-4 section-title section-title-sm position-relative">
                                <h3 class="mb-0 text-light">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Graphics Design</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>UI/UX Design</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>App Development</a>
                                <a class="mb-2 text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Enterprice Solution</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Domain Reg & Hosting</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-white container-fluid" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0"> &copy; {{ date('Y') }}
                            <a class="text-white border-bottom" href="/">Amtech Digital Networks</a>. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="rounded btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
