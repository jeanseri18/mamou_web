<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMU3eLzq5vHO2+Aa7T8FaH/iIgKtWjU9EF4yB5l" crossorigin="anonymous">

    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.html') }}" />
    <link rel="mask-icon" href="{{ asset('assets/images/favicon/block-safari-pinned-tab.svg') }}" color="#8b3dff" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />
    <meta name="msapplication-TileColor" content="#8b3dff" />
    <meta name="msapplication-config" content="{{ asset('assets/images/favicon/tile.xml') }}" />

    <!-- Color modes -->
    <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="{{ asset('assets/libs/scrollcue/scrollCue.css') }}" />

    <!-- Box icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/boxicons.min.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />

    <title>Allo Service</title>
</head>
<body>
    <!-- Navbar -->
    <div  class=" bg-black text-white py-2 w-100" style="height:60px; "> 
<center>Besoin d'un dépannage d'urgence ? <a class="btn btn-warning btn-xs">cliquez ici </a> ou appelez le   +225 05 86 86 28 26</center>
</div>
    <header>
  
        <nav class="navbar navbar-expand-lg navbar-light w-100">
            <div class="container px-3">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" width=120 alt="Allo Service Logo" /></a>
                <button class="navbar-toggler offcanvas-nav-btn" type="button">
                    <i class="bi bi-list"></i>
                </button>
                <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                    <div class="offcanvas-header">
                        <a href="{{ url('/') }}" class="text-inverse"><img src="{{ asset('assets/images/logo/logo.png') }}" width=120 alt="Allo Service Logo" /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center">                          
                        <ul class="navbar-nav mx-auto align-items-lg-center">
</ul>
                        <!-- Boutons Commencer et Se connecter -->
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary me-2">Demandez un prestation</a>
                            <a href="#" class="btn btn-outline-primary">Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    <footer class="pt-7 bg-light">
    <div class="container">
        <!-- Footer 4 column -->
        <div class="row">
            <div class="col-xxl-5 col-lg-5 col-md-7">
                <div class="mb-7 mb-xl-0">
                    <div class="mb-4">
                        <a href="#">
                            <img src="../assets/images/logo/logo.png" width="120" alt= "logo" class="text-inverse" />
                        </a>
                    </div>
                    <p class="mb-5">Découvrez et connectez-vous avec les entreprises et professionnels de la Côte d'Ivoire sur notre plateforme dédiée.</p>

                    <form class="needs-validation" novalidate>
                        <h5 class="mb-3">Abonnez-vous à notre newsletter</h5>
                        <div class="row g-2">
                            <div class="col-lg-9 col-8">
                                <label for="subscribeEmail" class="visually-hidden">Email</label>
                                <input type="email" class="form-control" id="subscribeEmail" placeholder="Adresse e-mail" required />
                                <div class="invalid-feedback">Veuillez entrer un e-mail valide.</div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div>
                                    <button type="submit" class="btn btn-primary">S'abonner</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4">
                <div class="row" id="ft-links">
                    <div class="col-lg-4 col-12">
                        <div class="position-relative">
                            <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                <h5>Accueil</h5>
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse" href="#collapseAccueil" role="button" aria-expanded="false" aria-controls="collapseAccueil">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseAccueil" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">Présentation</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">Nos services</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">Contactez-nous</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="position-relative">
                            <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                <h5>Authentification</h5>
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse" href="#collapseEntreprise" role="button" aria-expanded="false" aria-controls="collapseEntreprise">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseEntreprise" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">Inscription</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">Connexion</a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="position-relative">
                            <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                <h5>Aide</h5>
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse" href="#collapseAide" role="button" aria-expanded="false" aria-controls="collapseAide">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseAide" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">FAQ</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">Support client</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="text-decoration-none text-reset">Guide utilisateur</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-7 mb-3">
        <div class="row align-items-center">
            <div class="col-md-9">
                <div class="small mb-3 mb-md-0">
                    Copyright © 2024

                    <span class="text-primary"><a href="#">Votre Site</a></span>
                    | Conçu par
                    <span class="text-primary"><a href="#">Votre Nom</a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-md-end d-flex align-items-center justify-content-md-end">
                    <div class="dropdown">
                        <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                            <i class="bi theme-icon-active"></i>
                            <span class="visually-hidden bs-theme-text">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby=

    <!-- Scripts -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/scrollcue/scrollCue.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
</body>
</html>
