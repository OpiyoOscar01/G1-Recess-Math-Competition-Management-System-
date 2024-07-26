

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>MCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheets -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet">

    <!-- Libraries Stylesheets -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
          rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Additional Styles -->
    <style>
        body {
            background-color: #f5f5f5;
        }

        .card {
            max-width: 500px;
            margin: auto; /* Center align the card */
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            margin-bottom: 100px;
            width: 80vh;
        }

        .card h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333333;
        }

        .card form {
            display: grid;
            gap: 20px;
            text-align: left;
        }

        .card form label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }

        .card form input[type="text"],
        .card form input[type="password"],
        .card form input[type="email"],
        .card form button {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #dddddd;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .card form input[type="text"]:focus,
        .card form input[type="password"]:focus,
        .card form input[type="email"]:focus {
            border-color: #6cb2eb;
            outline: none;
        }

        .card form button {
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .card form button:hover {
            background-color: #0056b3;
        }

        .error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 4px;
        }

        .checkbox {
            display: flex;
            align-items: center;
        }

        .checkbox input[type="checkbox"] {
            margin-right: 8px;
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
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html"
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
                        <div
                            class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <p class="mb-0">math@example.com</p>
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
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
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
                        <ul class="navbar-nav mr-auto py-0">
                            <li class="nav-item"><a href={{route('home')}}
                                                    class="nav-link">Home</a>
                            </li>
                            <li class="nav-item"><a href={{route
                            ('admin-dashboard')}}
                                                    class="nav-link">Admin-Dashboard</a>
                            </li>
                            <li class="nav-item"><a href={{route
                            ('upload-question-page')}}
                                                    class="nav-link">Questions</a>
                            </li>
                            <li class="nav-item"><a href={{route
                            ('upload-school-page')}}
                                                    class="nav-link">Schools</a>
                            </li>
                            <li class="nav-item"><a href={{route
                            ('dashboard')}}
                                                    class="nav-link">Statistics</a>
                            </li>
                        </ul>

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
                <h1 class="display-3 text-white mb-3 animated
                slideInDown">Excel Answer Sheet Upload</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <main>
        <!-- Main content goes here -->

        <!-- Task 2 -->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="img/Results.jpeg" alt="Upload Results">
            </figure>
            <div class="card-body">
                <p>Upload Answers Excel Sheet</p>
                <div class="card-actions justify-end">
                    <form action="{{ route('upload-file') }}" method="POST"
                          enctype="multipart/form-data">
                        @if (session('okay'))
                            <p id="alert" style="color: green;"
                               class="alert">{{ session
                            ('okay')
                            }}</p>
                        @elseif (session('error'))
                            <p  style="color: red;"
                                class="alert">{{
                            session
                            ('error') }}</p>
                        @endif

                        @csrf
                        <input type="file" class="file-input file-input-bordered w-full max-w-xs @error('file') ring-red-500 @enderror"
                               value="{{ old('file') }}"
                               name="file" id="file" />
                        <br>
                        @error('file')
                        <p class="error">{{ $message }}</p>
                        @enderror
                        <button type="submit" style="background-color: orange; color: white; margin-right: 200px; padding: 20px; font-size: 20px; border-radius: 25px; margin-top: 10px;">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <x-footer></x-footer>
    <!-- End of Footer Section -->

</div>

<!-- Bootstrap JS and other dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
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
        }))
    })
</script>
<script src="https://unpkg.com/alpinejs@3.x/dist/cdn.min.js" defer></script>
</body>
</html>
