<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url('assets/img/mbl.png')?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
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
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl. Thamrin, Jakarta, Indonesia</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Jum'at : 09.00 AM - 05.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62 812 3457 876</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://id.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?=base_url('index.php/home')?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img style="width: 55px;" src="<?=base_url('assets/img/mbl.png')?>" alt=""> CarsRent</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?=base_url('index.php/home')?>" class="nav-item nav-link">Home</a>
                <a href="<?=base_url('index.php/home/about')?>" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <!-- <a href="<?=base_url('index.php/home/booking')?>" class="dropdown-item">Booking</a> -->
                        <a href="<?=base_url('index.php/home/managemen')?>" class="dropdown-item active">Managemen</a>
                        <a href="<?=base_url('index.php/home/rental')?>" class="dropdown-item">Rental</a>
                    </div>
                </div>
                <a href="<?=base_url('index.php/home/kontak')?>" class="nav-item nav-link">Contact</a>
            </div>
            <a href="<?=base_url('index.php/auth/login')?>" class="nav-link">
            <button type="button" class="btn btn-outline-danger py-3 px-lg-4">SIGN IN<i class="fa fa-arrow-right ms-3"></i></button></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?=base_url('assets/img/bg2.jpg')?>);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Rental</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Rental</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Varian Kendaraan //</h6>
                <h1 class="mb-5">Mobil</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/alpard.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 600.000/Hari</h5>
                    <p>TOYOTA ALPHARD</p>
                    <a href="<?=base_url('index.php/auth/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-3">
                    <h2 class="mb-0">Rp. 500.000/Hari</h2>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/avanza.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 300.000/Hari</h5>
                    <p>HONDA AVANZA</p>
                    <a href="<?=base_url('index.php/auth/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/xpander.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 400.000/Hari</h5>
                    <p>MITSUBISHI XPANDER</p>
                    <a href="<?=base_url('index.php/auth/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/rush.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 500.000/Hari</h5>
                    <p>TOYOTA RUSH</p>
                    <a href="<?=base_url('index.php/auth/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Thamrin, Jakarta</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812 3457 876</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>carsrent@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Jam Buka</h4>
                    <h6 class="text-light">Senin - Jum'at:</h6>
                    <p class="mb-4">09.00 AM - 05.00 PM</p>
                    <h6 class="text-light">Sabtu - Minggu:</h6>
                    <p class="mb-0">09.00 AM - 01.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Sewa</h4>
                    <a class="btn btn-link" href="">Liburan Keluarga</a>
                    <a class="btn btn-link" href="">Liburan Teman</a>
                    <a class="btn btn-link" href="">Hari Pernikahan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- <h4 class="text-light mb-4">Newsletter</h4> -->
                    <div class="d-flex">
                       <a href="https://www.youtube.com/watch?v=MEW9vhNBYVI"><img src="<?=base_url('assets/img/yt.png')?>" alt="" style="width: 64px; height: 48px;"></a> 
                        <h1 class="text-light"> YouTube</h1>
                    </div>
                    <!-- <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">CarsRent</a>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        2023 <a class="border-bottom" href="https://htmlcodex.com"></a>
                        <br>Distributed By : <a class="border-bottom" href="https://themewagon.com" target="_blank">4TI-06 || Jaminan Kualitas Perangkat Lunak</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <!-- <a href="">Home</a>
                            <a href="">Cookies</a> -->
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/lib/wow/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>
</body>

</html>