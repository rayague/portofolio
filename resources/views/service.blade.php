

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PortoFolio . Services</title>
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
                        <a href="{{ route('servicesView') }}" class="nav-item nav-link active">Services</a>
                        <a href="{{ route('blogView') }}" class="nav-item nav-link">Blog </a>
                        <a href="{{ route('contactView') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Services</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Acceuil</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Services</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 text-center mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Ce que nous faisons</small>
                    <h1 class="mt-2 mb-3">Nous Offrons des Services Créatifs</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Nous proposons une gamme de services créatifs conçus pour répondre aux besoins uniques de nos clients, garantissant des résultats exceptionnels et un impact visuel fort.</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Découvrir Plus</a>
                </div>
            </div>
            
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4 mb-5">
                    <div class="d-flex">
                        <i class="fa fa-3x fa-cogs text-primary mr-4"></i>
                        <div class="d-flex flex-column">
                            <h4 class="font-weight-bold mb-3">{{ $service->title }}</h4>
                            <p>
                                {{ strlen($service->description) > 50 ? substr($service->description, 0, 50) . '...' : $service->description }}
                            </p>
                            <a class="font-weight-semi-bold" href="">Read More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            
            

                <div class="col-md-4 mb-5">
                    <div class="d-flex">
                        <i class="fa fa-3x fa-code text-primary mr-4"></i>
                        <div class="d-flex flex-column">
                            <h4 class="font-weight-bold mb-3">Development</h4>
                            <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr
                                erat</p>
                            <a class="font-weight-semi-bold" href="">Read More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="d-flex">
                        <i class="fa fa-3x fa-envelope-open-text text-primary mr-4"></i>
                        <div class="d-flex flex-column">
                            <h4 class="font-weight-bold mb-3">Marketing</h4>
                            <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr
                                erat</p>
                            <a class="font-weight-semi-bold" href="">Read More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="d-flex">
                        <i class="fa fa-3x fa-chart-line text-primary mr-4"></i>
                        <div class="d-flex flex-column">
                            <h4 class="font-weight-bold mb-3">Strategy</h4>
                            <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr
                                erat</p>
                            <a class="font-weight-semi-bold" href="">Read More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="d-flex">
                        <i class="fa fa-3x fa-search text-primary mr-4"></i>
                        <div class="d-flex flex-column">
                            <h4 class="font-weight-bold mb-3">SEO</h4>
                            <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr
                                erat</p>
                            <a class="font-weight-semi-bold" href="">Read More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="d-flex">
                        <i class="fa fa-3x fa-pen text-primary mr-4"></i>
                        <div class="d-flex flex-column">
                            <h4 class="font-weight-bold mb-3">Content Writing</h4>
                            <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr
                                erat</p>
                            <a class="font-weight-semi-bold" href="">Read More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Ce que disent les clients</small>
                    <h1 class="mt-2 mb-3">Les avis de nos clients sur nos services</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Nos clients témoignent de la qualité de notre service et de notre engagement à les satisfaire. Ils apprécient notre professionnalisme et notre écoute attentive à leurs besoins.</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Soumettre un avis</a>
                </div>
                
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach($clients as $client)
                        <div class="testimonial-item">
                            <div class="testimonial-text position-relative border mb-4" style="padding: 25px 30px;">
                                {{ $client->description }}
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="{{ asset('storage/' . $client->image) }}" style="width: 80px; height: 80px;" alt="Image">
                                <div class="pl-4">
                                    <h6 class="font-weight-bold">{{ $client->name }}</h6>
                                    <i class="text-muted">{{ $client->profession }}</i>
                                </div>
                            </div>
                        </div>
                        @endforeach

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
                                <img class="img-fluid rounded-circle" src="{{ asset('template/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;" alt="Image">
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