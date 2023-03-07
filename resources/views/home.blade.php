<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LaundrySukses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ ('mockup/img/favicon.ico" rel="icon') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ ('mockup/https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap') }}" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="{{ ('mockup/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ ('mockup/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ ('mockup/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">LAUNDRY</span>SUKSES</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/login" class="nav-item nav-link active">Login</a>
                        <a href="/register" class="nav-item nav-link">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('mockup/img/apa.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry Sampai Bersih</h4>
                            <h1 class="display-3 text-white mb-md-4">Best For Laundry Services</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Staff</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 0 30px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex">
                        <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Our Location</h5>
                            <p class="m-0 text-white">123 Street, Karawang, RENGASDENGKLOK</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Email Us</h5>
                            <p class="m-0 text-white">sayyidalghifari10@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Call Us</h5>
                            <p class="m-0 text-white">+082123610445</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
  
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3"></h6>
            <h1 class="display-4 text-center mb-5">Jenis Pakaian</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="image">
                    <img src="{{asset('mockup/img/jaket.png')}}" class="img-circle elevation-2" alt="User Image">
                            <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Jaket</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="image">
                    <img src="{{asset('mockup/img/bed_cover.png')}}" class="img-circle elevation-2" alt="User Image">
                            <i class="fas fa-3x fa-soap text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Bed Cover</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="image">
                    <img src="{{asset('mockup/img/kaos.png')}}" class="img-circle elevation-2" alt="User Image">
                            <i class="fa fa-3x fa-burn text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Kaos</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="image">
                    <img src="{{asset('mockup/img/selimut.png')}}" class="img-circle elevation-2" alt="User Image">
                            <i class="fa fa-3x fa-tshirt text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Selimut</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
  
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">Your Site Name</a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ ('mockup/https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ ('mockup/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ ('mockup/lib/easing/easing.min.js') }}"></script>
    <script src="{{ ('mockup/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ ('mockup/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ ('mockup/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ ('mockup/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ ('mockup/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ ('mockup/js/main.js') }}"></script>
</body>

</html>