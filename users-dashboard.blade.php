<!-- Sets the language of the page based on the application locale -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- External stylesheet from DaisyUI for Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css"
          rel="stylesheet" type="text/css"/>
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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
          rel="stylesheet">

    <!-- Additional Libraries Stylesheets -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
          rel="stylesheet"/>

    <!-- Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<!-- Additional inline styles -->
<style>
    img{
        border-radius: 40px;
        height: 80px;
        width: 80px;
        cursor: pointer;
        border: 3px solid orange;
    }

    .menu{
        background-color: ghostwhite;
        border: 3px solid black;
        display: none;
        margin-right: 20px;
        border-radius: 20px;
    }
    .image:hover .menu{
        display: block;
    }
    .admin{
        margin-bottom: 10px;
    }
    .admin:hover,.logout:hover{
        background-color: orange;
        color: black;
        font-weight: bolder;

    }
    .newsletter{
        margin-bottom: 130px;
    }
    .schoolstat{
        display: none;
    }
    .pupilStat{
        display: none;
    }
    .type{
        display: none;
        color: orange;
        /*position: relative;*/
    }

</style>

<body>
<!-- Header section -->
<header>
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <!-- Brand logo and navigation link -->
                <a href="welcome.blade.php"
                   class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-primary text-uppercase"><span
                            class="text-green-600">M</span><span
                            class="text-sky-700">C</span><span
                            class="text-green-600">M</span><span
                            class="text-sky-700">S</span></h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <!-- Contact information -->
                        <div
                            class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">
                                mathcompmagtsyst@gmail.com</p>
                        </div>
                        <div
                            class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">+256 741 474 780
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <!-- Social media links -->
                        <div
                            class="d-inline-flex align-items-center py-2">
                            <a class="me-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="me-3" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="me-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="" href=""><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Navigation menu -->
                <nav
                    class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="index.html"
                       class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase"><span
                                class="text-green-600">M</span><span
                                class="text-sky-700">C</span><span
                                class="text-green-600">M</span><span
                                class="text-sky-700">S</span></h1>
                    </a>
                    <!-- Responsive navbar toggle button -->
                    <button type="button" class="navbar-toggler"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse justify-content-between"
                        id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <!-- Main navigation links -->
                            <a href={{route('welcome')}}
                       class="nav-item nav-link">Home</a>
                            <a href={{route('admin-dashboard')}} class="nav-item
                               nav-link">About</a>
                            <a href="#">Best Performing Schools</a>
                        </div>

                        <!-- Conditional display for guest users -->
                        @guest()
                            <!-- Register and Login buttons for larger screens -->
                            <a href={{route('register')}}
                       class=" btn btn-secondary rounded-1 py-4 px-md-5
                               d-none d-lg-block">Register</a>
                    </div>
                    <!-- Login button for larger screens -->
                    <a href="{{ route('login') }}"
                       class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">login<i
                            class="fa fa-arrow-right ms-3"></i></a>
            </div>
            @endguest
            <!-- Conditional display for authenticated users -->
            @auth
                <!-- User profile image and dropdown menu -->
                <div class="image">
                    <img src="https://picsum.photos/200" alt="">
                    <div class="menu">
                        <!-- Dashboard link -->
                        <div class="admin">
                            <a style="color:black;font-size:  20px;
                            color:black;cursor: pointer;"
                               href="{{ route('admin-dashboard') }}"
                               class="dashboard">Admin Dashboard</a></div>
                        <!-- Logout form -->
                        <div class="logout">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button style="color:black;cursor:pointer;"
                                        class="logout-btn">Logout
                                </button>
                            </form>
                        </div> @endauth
                    </div>
                    </nav>
                </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0"
         style="background-image: url(img/img2.webp);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <!-- Main page title -->
                <h1 class="display-4 text-4xl text-white mb-3 animated slideInDown">
                    Mathematics Competition
                    Management System</h1>

            </div>
        </div>
    </div>
</header>
{{--<main>--}}

    <!-- Hero section -->
{{--    <div class="hero   mt-16">--}}
{{--        <div class="hero mt-16">--}}
{{--            <div class="hero-content flex-col lg:flex-row">--}}
{{--                <!-- Hero image and text content -->--}}
{{--                <img src="img\mt.jpg" class="max-w-sm rounded-lg shadow-2xl"/>--}}
{{--                <div>--}}
{{--                    <h1 class="text-5xl font-bold">Welcome to <span--}}
{{--                            class="text-green-600">M</span><span--}}
{{--                            class="text-sky-700">C</span><span--}}
{{--                            class="text-green-600">M</span><span--}}
{{--                            class="text-sky-700">S</span></h1>--}}
{{--                    <p class="py-6">Explore the world of mathematics, complete--}}
{{--                        with the best, and unlock your--}}
{{--                        potential.</p>--}}
{{--                    <!-- CTA button -->--}}
{{--                    <button class="btn btn-primary"><a href={{route--}}
{{--                    ('users-dashboard')}}>Get--}}
{{--                            Started</a></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</main>--}}








<aside id="sidebar" class="sidebar mt-12">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="\dashboard">
                <i class="bi bi-grid"></i>
                <span>Analytics</span>
            </a>
        </li><!-- End Dashboard Nav -->






        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
               href="\table-data">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <!-- <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li> -->
                <li>
                    <a href="\table-data">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="\dashboard" data-bs-toggle="collapse"
               href={{route('dashboard')}}>
                <i class="bi bi-bar-chart"></i><span>Rankings</span><i class="bi  ms-auto"></i>
            </a>

        </li><!-- End Charts Nav -->



        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link " href="\welcome">
                <i class="bi bi-file-earmark"></i>
                <span>Home</span>
            </a>
        </li><!-- End Blank Page Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" href="\pages-faq">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="\contact us">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->






    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Performance of schools and participants over the years and time</h1>

    </div><!-- End Page Title -->



    <section class="section">
        <div class="row rank">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2011-2017</h5>

                        <!-- Line Chart -->
                        <canvas id="lineChart" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#lineChart'), {
                                    type: 'line',
                                    data: {
                                        labels: ['2011', '2012', '2013', '2014', '2015',
                                            '2016', '2017'
                                        ],
                                        datasets: [{
                                            label: 'Line Chart',
                                            data: [65, 59, 80, 81, 56, 55, 40],
                                            fill: false,
                                            borderColor: 'rgb(75, 192, 192)',
                                            tension: 0.1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            });
                        </script>
                        <!-- End Line CHart -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2018-2024</h5>
                        <!--Bar graph-->

                        <canvas id="barChart" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#barChart'), {
                                    type: 'bar',
                                    data: {
                                        labels: ['2018', '2019', '2020', '2021', '2022',
                                            '2023', '2024'
                                        ],
                                        datasets: [{
                                            label: 'Bar Chart',
                                            data: [65, 59, 80, 81, 56, 55, 40],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(255, 159, 64, 0.2)',
                                                'rgba(255, 205, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(201, 203, 207, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(255, 159, 64)',
                                                'rgb(255, 205, 86)',
                                                'rgb(75, 192, 192)',
                                                'rgb(54, 162, 235)',
                                                'rgb(153, 102, 255)',
                                                'rgb(201, 203, 207)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            });
                        </script>
                        <!-- End Bar CHart -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Percentage Repetition of Questions</h5>

                        <!-- Pie Chart -->
                        <canvas id="pieChart" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#pieChart'), {
                                    type: 'pie',
                                    data: {
                                        labels: [
                                            '2011-2015',
                                            '2016-2020',
                                            '2021-2024'
                                        ],
                                        datasets: [{
                                            label: 'Percentage',
                                            data: [300, 50, 100],
                                            backgroundColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(54, 162, 235)',
                                                'rgb(255, 205, 86)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                    }
                                });
                            });
                        </script>
                        <!-- End Pie CHart -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Most Correctly Answered Questions</h5>

                        <!-- Doughnut Chart -->
                        <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#doughnutChart'), {
                                    type: 'doughnut',
                                    data: {
                                        labels: [
                                            'Logic',
                                            'Bearing',
                                            'Sets'
                                        ],
                                        datasets: [{
                                            label: 'Percentage',
                                            data: [300, 50, 100],
                                            backgroundColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(54, 162, 235)',
                                                'rgb(255, 205, 86)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                    }
                                });
                            });
                        </script>
                        <!-- End Doughnut CHart -->

                    </div>
                </div>
            </div>


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
                        <h4 class="mb-4">Subscribe <span
                                class="text-primary text-uppercase">News Letter
                        </h4>
                        <div class="position-relative mx-auto"
                             style="max-width: 400px;">
                            <input class="form-control w-100 py-3 ps-4 pe-5"
                                   type="text"
                                   placeholder="Enter your email">
                            <button type="button"
                                    class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer component -->
    <x-footer></x-footer>
    <!-- Back to Top button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script
        src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </footer>
</body>

</html>
