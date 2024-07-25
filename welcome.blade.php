<!-- Sets the language of the page based on the application locale -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- External stylesheet from DaisyUI for Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css"/>
    <!-- Tailwind CSS script -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Competition Management System</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="icon.jpg">

    <!-- Custom CSS styles -->
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Additional Libraries Stylesheets -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>

    <!-- Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Additional inline styles -->
    <style>
        .util {
            display: flex;
            flex-direction: column;
            background-color: ghostwhite;
        }
        .newsletter {
            margin-bottom: 130px;
        }
        .main{
            background-color: ghostwhite;
        }
    </style>
</head>
<body>
<!-- Header section -->
<header>
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <!-- Brand logo and navigation link -->
                <a href="{{ route('welcome') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase"><span class="text-green-600">M</span><span class="text-sky-700">C</span><span class="text-green-600">M</span><span class="text-sky-700">S</span></h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <!-- Contact information -->
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">mathcompmagtsyst@gmail.com</p>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">+256 741 474 780</p>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <!-- Social media links -->
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="me-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Navigation menu -->
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="{{ route('home') }}" class="navbar-brand d-block
                    d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase"><span class="text-green-600">M</span><span class="text-sky-700">C</span><span class="text-green-600">M</span><span class="text-sky-700">S</span></h1>
                    </a>
                    <!-- Responsive navbar toggle button -->
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <!-- Main navigation links -->
                            <a href="{{ route('welcome') }}" class="nav-item nav-link">Home</a>


                        </div>
                        <!-- Conditional display for guest users -->
{{--                        @guest--}}
                            <!-- Register and Login buttons for larger screens -->
                            <a href="{{ route('register') }}" class="btn btn-secondary rounded-1 py-4 px-md-5 d-none d-lg-block">Register</a>
                            <!-- Login button for larger screens -->
                            <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Login <i class="fa fa-arrow-right ms-3"></i></a>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/img2.webp);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <!-- Main page title -->
                <h1 class="display-4 text-4xl text-white mb-3 animated slideInDown">
                    Mathematics Competition Management System
                </h1>
            </div>
        </div>
    </div>
</header>

<main class="main">
    <!-- Hero section -->
    <div class="hero mt-16">
        <div class="hero-content flex-col lg:flex-row">
            <!-- Hero image and text content -->
            <img src="img/mt.jpg" class="max-w-sm rounded-lg shadow-2xl"/>
            <div>
                <h1 class="text-5xl font-bold">Welcome to <span class="text-green-600">M</span><span class="text-sky-700">C</span><span class="text-green-600">M</span><span class="text-sky-700">S</span></h1>
                <p class="py-6">Explore the world of mathematics, compete with the best, and unlock your potential.</p>
                <!-- CTA button -->
                <button class="btn btn-primary"><a href={{route('dashboard')
                }}>view Performance Results
                    </a></button>
            </div>
        </div>
    </div>

    <!-- How to access the system section -->
    <section id="direction">
        <h2 class="text-3xl font-bold mt-16">How to access the system</h2>

        <div>

        </div>
        <br>
        <div>
            <p><span>Already registered?</span> Simply log in to the system using your username and password, and you'll be able to view and attempt available challenges.</p>
        </div>
    </section>


</main>

<!-- Newsletter Subscription section -->
<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
        <div class="col-lg-10 border rounded p-1">
            <div class="border rounded text-center p-1">
                <div class="bg-white rounded text-center p-5">
                    <!-- Newsletter subscription form -->
                    <h4 class="mb-4">Subscribe <span class="text-primary text-uppercase">News Letter</span></h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer component -->
<x-footer></x-footer>

<!-- Back to Top button -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
