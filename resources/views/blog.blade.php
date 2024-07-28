<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PortoFolio . Blog</title>
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
                        <a href="/" class="nav-item nav-link">Acceuil</a>
                        <a href="{{ route('aboutView') }}" class="nav-item nav-link">À propos</a>
                        <a href="{{ route('servicesView') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('blogView') }}" class="nav-item nav-link active">Blog</a>
                        <a href="{{ route('contactView') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Blog</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Acceuil</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Blog</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('template/img/blog-1.jpg') }}" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                                style="width: 80px; height: 80px; bottom: 0; left: 0;">
                                <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                                <h1 class="m-0">01</h1>
                            </div>
                        </div>
                        <div class="border border-top-0 mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('template/img/user.jpg') }}" alt="">
                                    <a class="text-muted ml-2" href="">John Doe</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                    <a class="text-muted ml-2" href="">Web Design</a>
                                </div>
                            </div>
                            <a class="h4 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('template/img/blog-2.jpg') }}" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                                style="width: 80px; height: 80px; bottom: 0; left: 0;">
                                <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                                <h1 class="m-0">01</h1>
                            </div>
                        </div>
                        <div class="border border-top-0 mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('template/img/user.jpg') }}" alt="">
                                    <a class="text-muted ml-2" href="">John Doe</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                    <a class="text-muted ml-2" href="">Web Design</a>
                                </div>
                            </div>
                            <a class="h4 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('template/img/blog-1.jpg') }}" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                                style="width: 80px; height: 80px; bottom: 0; left: 0;">
                                <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                                <h1 class="m-0">01</h1>
                            </div>
                        </div>
                        <div class="border border-top-0 mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('template/img/user.jpg') }}" alt="">
                                    <a class="text-muted ml-2" href="">John Doe</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                    <a class="text-muted ml-2" href="">Web Design</a>
                                </div>
                            </div>
                            <a class="h4 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('template/img/blog-2.jpg') }}" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                                style="width: 80px; height: 80px; bottom: 0; left: 0;">
                                <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                                <h1 class="m-0">01</h1>
                            </div>
                        </div>
                        <div class="border border-top-0 mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('template/img/user.jpg') }}" alt="">
                                    <a class="text-muted ml-2" href="">John Doe</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                    <a class="text-muted ml-2" href="">Web Design</a>
                                </div>
                            </div>
                            <a class="h4 font-weight-bold" href="">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div> --}}
            </div>
            <!-- Blog Grid End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form End -->

                <!-- Category Start -->
                {{-- <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Categories</h3>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Web Development</a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Online Marketing</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Keyword Research</a>
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Email Marketing</a>
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div> --}}
                <!-- Category End -->

                <!-- Recent Post Start -->
                {{-- <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Recent Post</h3>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('template/img/blog-1.jpg') }}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('template/img/blog-2.jpg') }}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('template/img/blog-1.jpg') }}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('template/img/blog-2.jpg') }}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('template/img/blog-1.jpg') }}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                </div> --}}
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="border p-3 mb-5">
                    <img src="{{ asset('template/img/blog-1.jpg') }}" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags End -->

                <!-- Image Start -->
                <div class="border p-3 mb-5">
                    <img src="{{ asset('template/img/blog-2.jpg') }}" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="font-weight-bold mb-4">Plain Text</h3>
                    <div class="border p-3">
                        Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor clita sit et elitr eirmod.
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5 justify-content-lg-between ">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4"><span class="text-primary">P</span>orto<span class="text-primary">F</span>olio</h1>
                </a>
                <p>Nous nous spécialisons dans la création de contenus visuels impressionnants qui capturent l'essence de votre marque. Notre équipe est dédiée à fournir des designs de haute qualité qui résonnent avec votre audience.</p>
                @foreach($sociauxes as $socialMedia)
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $socialMedia->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $socialMedia->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $socialMedia->instagram }}"><i class="fab fa-instagram"></i></a>
                </div>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6 mb-5 float-right">
                <h5 class="font-weight-bold text-primary mb-4">Contactez-nous</h5>
                <p>N'hésitez pas à nous contacter pour toute demande ou collaboration. Nous sommes toujours là pour vous aider et répondons rapidement à vos messages.</p>
                @foreach($contacts as $contact)
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $contact->bp }}{{ $contact->city }}, {{ $contact->country }}</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>{{ $contact->telephone }}</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>{{ $contact->email }}</p>
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