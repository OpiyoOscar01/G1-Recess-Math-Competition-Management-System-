<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" sizes="32x32" href="icon.jpg">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">
</head>
</head>

<body>
    <header>
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="welcome.blade.php"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase"> <span class="text-green-600">M</span><span
                                class="text-sky-700">C</span><span class="text-green-600">M</span><span
                                class="text-sky-700">S</span></h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">math@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+256 741 474 780 </p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase"> <span class="text-green-600">M</span><span
                                    class="text-sky-700">C</span><span class="text-green-600">M</span><span
                                    class="text-sky-700">S</span></h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="/welcome" class="nav-item nav-link">Home</a>
                                <a href="#about" class="nav-item nav-link">About</a>
                                <!-- <a href="registration.blade.php" class="nav-item nav-link">Webmail</a> -->
                                <a href="/contact us" class="nav-item nav-link active">Contact Us</a>

                            </div>
                            <!-- <a href="/contact us" class="nav-item nav-link active">Contact Us</a> -->
                        </div>
                        <a href="/login" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">
                            <i class="fa ms-3">login</i>
                        </a>
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
                    <h1 class="display-4 text-4xl text-white mb-3 animated slideInDown">Mathematics Competition
                        Management System</h1>

                </div>
            </div>
        </div>
    </header>
    <main>

        <!-- <div class="back">-->
        <div class="hero   mt-16">
            <div class="hero mt-16">
                <div class="hero-content flex-col lg:flex-row">
                    <img src="img\mt.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                    <div>
                        <h1 class="text-5xl font-bold">Welcome to <span class="text-green-600">M</span><span
                                class="text-sky-700">C</span><span class="text-green-600">M</span><span
                                class="text-sky-700">S</span></h1>
                        <p class="py-6">Explore the world of mathematics, compete with the best, and unlock your
                            potential.</p>
                        <button class="btn btn-primary"><a href="#about">Get Started</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!--</div> -->
        <section id="direction">
            <h2 class="text-3xl font-bold mt-16">How to access the system</h2>

            <div>
                <p>
                    Welcome to the Mathematics Challenge! To access the system, each pupil and Administrator needs to
                    create an account in this platform. You will need to select the <span class="text-blue-600"><a
                            href="Registration.blade.php"> login </a></span> option at the upper left corner of your
                    device, simply register
                    your username, firstname, school registration number, and image file.
                    Once registered, you can access the dashboard, view available challenges and attempt them. Good
                    luck!
                </p>
            </div>
            <br>
            <div>
                <p><span>Already registered?</span> Simply log in to the system using your username and password,
                    and you'll be able to view and attempt available challenges. </p>
            </div>
        </section>
        <section id="about">
            <h2 class="text-3xl font-bold mt-5">About the System</h2>
            <p1>The system is designed to enable School administrators, representatives and primary school pupils to log
                into the system.
                Having successfully registered, pupils are granted access to view the available challenges, and start
                attempting the Challenges they are interested in.</p1>
        </section>
    </main>
    <section>

        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe <span class="text-primary text-uppercase">News Letter</h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Enter your email">
                                <button type="button"
                                    class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->


        <footer>
            <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container pb-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-4">
                            <div class="bg-primary rounded p-4">
                                <a href="index.html">
                                    <h1 class="text-white text-uppercase mb-3"><span
                                            class="text-green-600">M</span><span class="text-sky-700">C</span><span
                                            class="text-green-600">M</span><span class="text-sky-700">S</span></h1>
                                </a>
                                <p class="text-white mb-0">
                                    Register with <a class="text-dark fw-medium" href="Registration.blade.php"><span
                                            class="text-green-600">M</span><span class="text-sky-700">C</span><span
                                            class="text-green-600">M</span><span class="text-sky-700">S</span></a>
                                <p class="text-white mb-0"></a>, explore and enjoy the Mathematics world with other
                                    Mathematicians.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Makerere University, Kampala,
                                Uganda</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+256 741 474 780</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>math@example.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                    <a class="btn btn-link" href="">About Us</a>
                                    <a class="btn btn-link" href="">Contact Us</a>
                                    <a class="btn btn-link" href="">Privacy Policy</a>
                                    <a class="btn btn-link" href="">Terms & Condition</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#"><span class="text-green-600">M</span><span
                                        class="text-sky-700">C</span><span class="text-green-600">M</span><span
                                        class="text-sky-700">S</span>
                                </a>, All Right Reserved.


                                Designed By <a class="border-bottom">23magic Software Engineers</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="">Home</a>
                                    <a href="">Cookies</a>
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
            </div>

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
        </footer>
</body>

</html>
<