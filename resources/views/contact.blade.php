<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PortoFolio . Contact</title>
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
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-white display-4"><span class="text-primary">P</span>orto<span class="text-primary">F</span>olio</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/" class="nav-item nav-link">Acceuil</a>
                        <a href="{{ route('aboutView') }}" class="nav-item nav-link">À propos</a>
                        <a href="{{ route('servicesView') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('blogView') }}" class="nav-item nav-link">Blog</a>
                        <a href="{{ route('contactView') }}" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Contact</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">À propos</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Contact</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center">
                <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Get In Touch</small>
                <h1 class="mt-2 mb-5">Contact For Any Queries</h1>
            </div>
            <div class="row">
                @foreach($contacts as $contact)
                <div class="col-md-5">
                    <div class="d-flex align-items-center border mb-3 p-4">
                        <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Our Office</h5>
                            <p class="m-0">{{ $contact->bp }}{{ $contact->city }}, {{ $contact->country }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border mb-3 p-4">
                        <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Email Us</h5>
                            <p class="m-0">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border mb-3 mb-md-0 p-4">
                        <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Call Us</h5>
                            <p class="m-0">{{ $contact->telephone }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-7">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form  action="{{ route('storeNotifications') }}" novalidate="novalidate" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="name" placeholder="Your Name" name="name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control p-4" id="email" placeholder="Your Email" name="email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" name="subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="5" id="message" placeholder="Message" name="message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4 text-white" style="height: 50px;" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start --> 
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5 justify-content-lg-between ">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4"><span class="text-primary">P</span>orto<span class="text-primary">F</span>olio</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                @foreach($sociauxes as $socialMedia)
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $socialMedia->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $socialMedia->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $socialMedia->instagram }}"><i class="fab fa-instagram"></i></a>
                </div>
                @endforeach
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="font-weight-bold text-primary mb-4">Get In Touch</h5>
                <p>Dolor clita stet nonumy clita diam vero, et et ipsum diam labore</p>
                @foreach($contacts as $contact)
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $contact->bp }}{{ $contact->city }}, {{ $contact->country }}</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>{{ $contact->telephone }}</</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>{{ $contact->email }}</</p>
                @endforeach
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