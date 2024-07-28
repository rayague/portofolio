<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PortoFolio . À propos</title>
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
                        <a href="{{ route('aboutView') }}" class="nav-item nav-link active">À propos</a>
                        <a href="{{ route('servicesView') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('blogView') }}" class="nav-item nav-link">Blog</a>
                        <a href="{{ route('contactView') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">À propos</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Acceuil</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">À propos</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center pb-1">
                <div class="col-lg-5">
                    <img class="img-thumbnail p-3" src="{{ asset('template/img/about.jpg') }}" alt="About Us">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Qui Nous Sommes</small>
                    <h1 class="mt-2 mb-4">Le Fournisseur de Services Créatifs le Plus Efficace pour les Entreprises</h1>
                    <p class="mb-4">Nous sommes spécialisés dans la fourniture de services créatifs adaptés aux besoins des entreprises. Notre équipe s'engage à offrir des solutions innovantes qui garantissent un impact positif sur votre marque. Avec une expertise éprouvée, nous travaillons avec vous pour transformer vos idées en réalisations concrètes.</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Lire la Suite</a>
                </div>
            </div>
            @foreach($contacts as $contact)
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Notre Bureau</h5>
                            <p class="m-0">{{ $contact->bp }} {{ $contact->city }}, {{ $contact->country }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Écrivez-Nous</h5>
                            <p class="m-0">{{ $contact->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center border mb-4 mb-lg-0 p-4" style="height: 120px;">
                        <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="font-weight-bold">Appelez-Nous</h5>
                            <p class="m-0">{{ $contact->telephone }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid pt-5 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Pourquoi Choisir Nous</small>
                    <h1 class="mt-2 mb-3">25 Ans d'Expérience</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Nous avons acquis une solide expérience dans notre domaine, ce qui nous permet de répondre efficacement aux besoins de nos clients.</h4>
                    <div class="list-inline mb-4">
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Une expertise éprouvée dans divers secteurs</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Un service client exceptionnel et attentif</p>
                        <p class="font-weight-semi-bold mb-2"><i class="fa fa-angle-right text-primary mr-2"></i>Des solutions sur mesure pour chaque projet</p>
                    </div>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">En Savoir Plus</a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">25</h2>
                                <h5 class="font-weight-bold mb-4">Années d'Expérience</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">10</h2>
                                <h5 class="font-weight-bold mb-4">Experts Qualifiés</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">15</h2>
                                <h5 class="font-weight-bold mb-4">Clients Satisfaits</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-1">
                            <div class="d-flex flex-column align-items-center border px-4 mb-4">
                                <h2 class="display-3 text-primary mb-3" data-toggle="counter-up">2</h2>
                                <h5 class="font-weight-bold mb-4">Projets Complétés</h5>
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
                    <small class="bg-primary text-white text-uppercase font-weight-bold px-1">Rencontrez l'Équipe</small>
                    <h1 class="mt-2 mb-3">Découvrez les Experts Derrière notre Réussite</h1>
                    <h4 class="font-weight-normal text-muted mb-4">Notre équipe est composée d'experts passionnés et dévoués, chacun apportant des compétences uniques. Ensemble, nous travaillons pour transformer vos idées en projets réussis et innovants, tout en assurant une qualité exceptionnelle à chaque étape.</h4>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Rencontrer Tous les Experts</a>
                </div>
                
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-1.jpg') }}" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">John Doe</h5>
                                <span>CEO, Founder</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-2.jpg') }}" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">Kate Wilson</h5>
                                <span>Designer</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-3.jpg') }}" alt="">
                            </div>
                            <div class="border border-top-0 text-center" style="padding: 30px;">
                                <h5 class="font-weight-bold">John Brown</h5>
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('template/img/team-4.jpg') }}" alt="">
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
    <script src="{{ asset('template/mail/jqBootstrapValidation.min.js ') }}"></script>
    <script src="{{ asset('template/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>