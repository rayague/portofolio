<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DotCom - Creative Agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('template/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar p-0">
        <div class="container-lg p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 text-white display-4"><span class="text-primary">P</span>orto<span class="text-primary">F</span>olio</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('aboutView') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('servicesView') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('blogView') }}" class="nav-item nav-link">Blog Grid</a>
                        <a href="{{ route('contactView') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            {{-- <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol> --}}
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{ asset('template/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Creative Services For Brands Grow</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset('template/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Team Members</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset('template/img/carousel-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Creative Agency</h5>
                            <h1 class="display-3 text-white mb-md-4">Happy Clients & Positive Reviews</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="{{ asset('template/img/about.jpg')}}" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Who We Are</small>
                    <h1 class="mt-2 mb-4">Most Effective Creative Service Provider For Companies</h1>
                    <p class="mb-4">Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Read More</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Our Office</h5>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Email Us</h5>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Call Us</h5>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What we do</small>
                    <h1 class="mt-2 mb-3">We Offer Creative Services</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd dolores elitr sed est duo ea ipsum justo diam, est erat lorem. Est magna sea clita diam tempor elitr</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Discover More</a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-laptop-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Web Design</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-code text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Development</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-envelope-open-text text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Marketing</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="d-flex">
                                <i class="fa fa-3x fa-chart-line text-primary mr-4"></i>
                                <div class="d-flex flex-column">
                                    <h4 class="font-weight-bold mb-3">Strategy</h4>
                                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                                    <a class="font-weight-semi-bold" href="">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid pt-5 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Why Choose Us</small>
                    <h1 class="mt-2 mb-3">25 Years Expereince</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd dolores elitr sed est duo ea ipsum justo diam, est erat lorem</h4>
                    <div class="list-inline mb-4">
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Lorem ut kasd dolores elitr</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Jsto dolor lorem ipsum</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Diama ipsum est dolor</p>
                    </div>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Learn More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">25</h2>
                                <h5 class="font-weight-bold mb-4">Years Expereince</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">225</h2>
                                <h5 class="font-weight-bold mb-4">SKilled Experts</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">1050</h2>
                                <h5 class="font-weight-bold mb-4">Happy Clients</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">2500</h2>
                                <h5 class="font-weight-bold mb-4">Complete Projects</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Meet The Team</small>
                    <h1 class="mt-2 mb-3">Meet Experts of Behind Work</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Eirmod diam magna sed sea rebum, elitr diam dolor lorem ipsum, ipsum stet magna ea diam vero stet vero</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Meet All Experts</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-1.jpg')}}" alt="">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">John Doe</h5>
                                <span>CEO, Founder</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-2.jpg')}}" alt="">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Kate Wilson</h5>
                                <span>Designer</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-3.jpg')}}" alt="">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">John Brown</h5>
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-4.jpg')}}" alt="">
                                <div class="team-overlay position-absolute d-flex align-items-center justify-content-center m-3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-outline-secondary rounded-circle text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Paul Watson</h5>
                                <span>Marketer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">What clients say</small>
                    <h1 class="mt-2 mb-3">Clients Say About Our Services</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Lorem ut kasd elitr sed est duo ea ipsum justo diam, est erat lorem clita diam elitr</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Submit Review</a>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('template/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('template/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('template/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('template/img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('template/img/testimonial-5.jpg')}}" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">Client Name</h6>
                                    <i class="text-muted">Profession</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Our Blog</small>
                <h1 class="mt-2 mb-5">Latest From Blog</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('template/img/blog-1.jpg')}}" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('template/img/user.jpg')}}" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{ asset('template/img/blog-2.jpg')}}" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                            style="width: 80px; height: 80px; bottom: 0; left: 0;">
                            <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                            <h1 class="m-0">01</h1>
                        </div>
                    </div>
                    <div class="border border-top-0" style="padding: 30px;">
                        <div class="d-flex mb-3">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('template/img/user.jpg')}}" alt="">
                                <a class="text-muted ml-2" href="">John Doe</a>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <i class="far fa-bookmark text-primary"></i>
                                <a class="text-muted ml-2" href="">Web Design</a>
                            </div>
                        </div>
                        <a class="h5 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5 ">
        <div class="row pt-5 justify-content-lg-between">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4"><span class="text-primary">P</span>orto<span class="text-primary">F</span>olio</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 float-right">
                <h5 class="font-weight-bold text-primary mb-4">Get In Touch</h5>
                <p>Dolor clita stet nonumy clita diam vero, et et ipsum diam labore</p>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
            <a class="font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('template/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('template/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>