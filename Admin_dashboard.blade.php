<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Competition Management System</title>
    <link rel="icon" type="image/png" sizes="32x32" href="icon.jpg">

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css"
          rel="stylesheet">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
          rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        .footer {
            margin-left: 20px;
        }

        .menu {
            background-color: ghostwhite;
            color: white;
            border-radius: 10px;
            border: 5px solid black;
            margin-right: 10px;
            height: 10vh;
            position: absolute;
            display: none;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 60px;
            cursor: pointer;
            border: 3px solid orange;
            margin-left: 20px;
            margin-top: 20px;
        }

        .image:hover .menu {
            display: block;
        }

        .util {
            position: relative;
            width: 200px;
            height: 200px;
        }

        .logout {
            margin-top: 25px;
        }

        #schedule {
            margin-top: 400px;
            margin-bottom: 200px;
        }

        .menu:hover {
            background-color: #d7c35a;
            color: black;
            font-weight: bolder;
            width: 100px;
            height: 100px;
        }

        .alert {
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #5cb85c;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: inline-block;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary"
             style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="util">
                @auth
                    <div class="image">
                        <img src="https://picsum.photos/200" alt="">
                    </div>
                @endauth
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div
                            class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">mathcompmagtsyst@gmail.com</p>
                        </div>
                        <div
                            class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">+256 741 474 780</p>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
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
                <nav
                    class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                    <a href="index" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase"><span
                                class="text-green-600">M</span><span
                                class="text-sky-700">C</span><span
                                class="text-green-600">M</span><span
                                class="text-sky-700">S</span></h1>
                    </a>
                    <button type="button" class="navbar-toggler"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse justify-content-between"
                        id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href={{route('home')}}
                               class="nav-item nav-link">Home</a>
                            <a href={{route('upload-question-page')}}
                               class="nav-item nav-link
                               active">Upload Questions</a>
                            <a href={{route('upload-answer-page')}}
                            class="nav-item
                               nav-link"> Upload Answers</a>
                            <a href={{route('upload-school-page')}}
                               class="nav-item nav-link
                               active">Upload Schools</a>
                            <a href={{route
                            ('dashboard')}}
                                                    class="nav-link">Statistics</a>

                        </div>
                        <div class="logout" style="background-color: orange;
                        color: black;width: 100px;height: 100px;cursor:
                        pointer;">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button style="color:black;
                                    cursor:pointer; margin-top: 42px;
                                    margin-left: 5px;color: white;font-size:
                                    25px;"
                                        class="logout-btn">Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0"
         style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    Admin Dashboard</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Schedule Start -->
    <section>
        <div class="container-fluid booking pb-5 wow fadeIn"
             data-wow-delay="0.1s" id="schedule">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1"
                                         data-target-input="nearest">
                                        <input type="text"
                                               class="form-control datetimepicker-input"
                                               placeholder="Set Opening date"
                                               data-target="#date1"
                                               data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2"
                                         data-target-input="nearest">
                                        <input type="text"
                                               class="form-control datetimepicker-input"
                                               placeholder="Set Closing Date"
                                               data-target="#date2"
                                               data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-footer></x-footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script
    src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template JavaScript -->
<script src="js/main.js"></script>

<script>
    $(document).ready(function () {
        $(".datetimepicker-input").datetimepicker({
            format: "YYYY-MM-DD"
        });
    });

    document.addEventListener('alpine:init', () => {
        Alpine.data('formSubmit', () => ({
            submit() {
                this.$refs.btn.disabled = true;
                this.$refs.btn.innerHTML = `<div class="spinner"></div>Please wait...`;
                // Simulate form submission
                setTimeout(() => {
                    this.$el.submit();
                }, 2000);
            }
        }));
    });
    // Hide the session message after 3 seconds
    document.addEventListener('DOMContentLoaded', function () {
        const sessionMessage = document.getElementsByClassName('alert');
        if (sessionMessage) {
            setTimeout(() => {
                sessionMessage.style.display = 'none';
            }, 5000);
        }
    });
</script>
</body>

</html>
