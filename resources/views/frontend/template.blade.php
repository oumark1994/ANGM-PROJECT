<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ANGV-TCHAD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/mylogo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Ndjamena,Tchad</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                  
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+233 0345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab "></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary">ANGV-TCHAD</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav m-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link  {{request()->is('/') ? 'active':''}}">Home</a>
                <a href="/#about" class="nav-item nav-link">A Propos</a>
                <a href="/#mission" class="nav-item nav-link">Missions</a>
                <a href="{{url('/nouvelles')}}" class="nav-item nav-link {{request()->is('nouvelles') ? 'active':''}}">Nouvelles</a>
                <a href="{{url('/actualites')}}" class="nav-item nav-link  {{request()->is('actualites') ? 'active':''}}">Actualites</a>
                <a href="{{url('/lesgalleries')}}" class="nav-item nav-link  {{request()->is('lesgalleries') ? 'active':''}}">Galerie</a>
                <a href="{{url('/contact')}}" class="nav-item nav-link {{request()->is('contact') ? 'active':''}}">Contact</a>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
  @yield('content')
 
  <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center g-5">
            <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">A propos angv-tchad</h5>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, fugiat</p>
                   
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Ndjamena,Tchad</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+235000000</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@angv-tchad.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
             
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Navigation</h5>
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="/#about" class="nav-item nav-link">A Propos</a>
                <a href="/#mission" class="nav-item nav-link">Missions</a>
                <a href="{{url('/nouvelles')}}" class="nav-item nav-link">Nouvelles</a>
                <a href="{{url('/actualites')}}" class="nav-item nav-link">Actualites</a>
                <a href="{{url('/lesgalleries')}}" class="nav-item nav-link">Galerie</a>
                <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Localites</h5>

                <a href="/#" class="nav-item nav-link">Ndjamena</a>
                <a href="/#" class="nav-item nav-link">Abeche</a>
                <a href="/#" class="nav-item nav-link">Sarch</a>
                <a href="/#" class="nav-item nav-link">Moundou</a>
                <a href="/#" class="nav-item nav-link">Am-timan</a>
           
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Angv-Tchad</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://kolladigital">kolladigital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
</body>

</html>