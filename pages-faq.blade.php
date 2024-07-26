<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>F.A.Q</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body>

    <header>
        <div class="container-fluid bg-dark px-0 ">
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
                                <a href="/welcome" class="nav-item nav-link">About</a>
                                <!-- <a href="registration.blade.php" class="nav-item nav-link">Webmail</a> -->
                                <a href="/contact us" class="nav-item nav-link active">Contact Us</a>

                            </div>
                            <!-- <a href="/contact us" class="nav-item nav-link active">Contact Us</a> -->
                        </div>
                        <a href="/dashboard"
                            class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block bg-orange-400">
                            Dashboard
                        </a>
                </div>
                </nav>
            </div>
        </div>
        </div>
        <!-- Header End -->
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar mt-14">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link collapsed" href="\dashboard">
                        <i class="bi bi-grid"></i>
                        <span>Analytics</span>
                    </a>
                </li><!-- End Dashboard Nav -->




                <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
            href="/dasboard">
            <i class="bi bi-journal-text"></i><span>School Rankings</span>
        </a> -->

                </li><!-- End  rank Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                        href="\table-data">
                        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                        <li>
                            <a href="\table-data">
                                <i class="bi bi-circle"></i><span>Data Tables</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="\dashboard" data-bs-toggle="collapse"
                        href="\dashboard">
                        <i class="bi bi-bar-chart"></i><span>Rankings</span><i class="bi bi-chevron-down ms-auto"></i>
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
        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Frequently Asked Questions</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Frequently Asked Questions</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section faq">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card basic">
                            <div class="card-body">
                                <h5 class="card-title">Basic Questions</h5>

                                <div>
                                    <h6>1. What is the eligibility criteria for participating in the competition?
                                    </h6>
                                    <p> The competition is open to students aged 13-18, enrolled in grades 9-12.
                                    </p>
                                </div>

                                <div class="pt-2">
                                    <h6>2.What is the format of the competition (individual/team, online/offline, etc.)?
                                    </h6>
                                    <p>The competition is an individual, online event, consisting of multiple-choice
                                        questions and problem-solving tasks.

                                    </p>
                                </div>

                                <div class="pt-2">
                                    <h6>3. What are the rules and regulations of the competition?
                                    </h6>
                                    <p>Please see our website for the full rules and regulations, including rules on
                                        cheating, plagiarism, and technical issues.

                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- F.A.Q Group 1 -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> F.A.Q Group 1
                                </h5>

                                <div class="accordion accordion-flush" id="faq-group-1">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-1"
                                                type="button" data-bs-toggle="collapse">
                                                Can I bring any reference materials or calculators?
                                            </button>
                                        </h2>
                                        <div id="faqsOne-1" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                No, all necessary materials will be provided online.


                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-2"
                                                type="button" data-bs-toggle="collapse">
                                                Can I request a refund if I am unable to participate?

                                            </button>
                                        </h2>
                                        <div id="faqsOne-2" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                Refunds are available up to one week before the competition, minus a $5
                                                administrative fee.

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-3"
                                                type="button" data-bs-toggle="collapse">
                                                How will the competition be judged?

                                            </button>
                                        </h2>
                                        <div id="faqsOne-3" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                The competition will be judged by a panel of experienced mathematics
                                                teachers and professors.

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-4"
                                                type="button" data-bs-toggle="collapse">
                                                Are there any prizes or awards for the winners?

                                            </button>
                                        </h2>
                                        <div id="faqsOne-4" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                Yes, prizes include cash awards, trophies, and certificates, with the
                                                top
                                                winner receiving a $1,000 scholarship.


                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsOne-5"
                                                type="button" data-bs-toggle="collapse">
                                                What is the deadline for registration?

                                            </button>
                                        </h2>
                                        <div id="faqsOne-5" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-1">
                                            <div class="accordion-body">
                                                Registration closes on August 15th, 2024.

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End F.A.Q Group 1 -->

                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q Group 2 -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">F.A.Q Group 2</h5>

                                <div class="accordion accordion-flush" id="faq-group-2">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1"
                                                type="button" data-bs-toggle="collapse">
                                                How do I contact the organizers if I have any questions or concerns?

                                            </button>
                                        </h2>
                                        <div id="faqsTwo-1" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-2">
                                            <div class="accordion-body">
                                                Please email us at mailto:info@mathcompetition.org
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2"
                                                type="button" data-bs-toggle="collapse">
                                                Are there any specific software or tools required for the competition?

                                            </button>
                                        </h2>
                                        <div id="faqsTwo-2" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-2">
                                            <div class="accordion-body">
                                                No, only a computer with internet access is required.

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3"
                                                type="button" data-bs-toggle="collapse">
                                                Can I participate if I am not a student (e.g. teacher, professional)?

                                            </button>
                                        </h2>
                                        <div id="faqsTwo-3" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-2">
                                            <div class="accordion-body">
                                                No, the competition is only open to students.

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4"
                                                type="button" data-bs-toggle="collapse">
                                                Will there be any training or resources provided to help prepare for the
                                                competition?

                                            </button>
                                        </h2>
                                        <div id="faqsTwo-4" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-2">
                                            <div class="accordion-body">
                                                Yes, we offer online resources and practice tests to help participants
                                                prepare.


                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5"
                                                type="button" data-bs-toggle="collapse">
                                                How will the results be announced?

                                            </button>
                                        </h2>
                                        <div id="faqsTwo-5" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-2">
                                            <div class="accordion-body">
                                                Results will be announced via email
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End F.A.Q Group 2 -->

                        <!-- F.A.Q Group 3 -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">F.A.Q Group 3</h5>

                                <div class="accordion accordion-flush" id="faq-group-3">

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsThree-1"
                                                type="button" data-bs-toggle="collapse">
                                                How do I register for the competition?

                                            </button>
                                        </h2>
                                        <div id="faqsThree-1" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-3">
                                            <div class="accordion-body">
                                                Registration is online, through our commandline Interface, and requires
                                                a
                                                valid email
                                                address and password.


                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsThree-2"
                                                type="button" data-bs-toggle="collapse">
                                                How will my personal data and privacy be protected?

                                            </button>
                                        </h2>
                                        <div id="faqsThree-2" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-3">
                                            <div class="accordion-body">
                                                Please see our privacy policy on our website for details on how we
                                                protect
                                                participant data.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsThree-3"
                                                type="button" data-bs-toggle="collapse">
                                                Can I bring any reference materials or calculators?

                                            </button>
                                        </h2>
                                        <div id="faqsThree-3" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-3">
                                            <div class="accordion-body">
                                                No, all necessary materials will be provided online.

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsThree-4"
                                                type="button" data-bs-toggle="collapse">
                                                How long does the competition last?

                                            </button>
                                        </h2>
                                        <div id="faqsThree-4" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-3">
                                            <div class="accordion-body">
                                                The competition lasts 2 hours, with a 10-minute break.


                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" data-bs-target="#faqsThree-5"
                                                type="button" data-bs-toggle="collapse">
                                                How will the competition be judged?

                                            </button>
                                        </h2>
                                        <div id="faqsThree-5" class="accordion-collapse collapse"
                                            data-bs-parent="#faq-group-3">
                                            <div class="accordion-body">
                                                Your results will be generated automatically by the system.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End F.A.Q Group 3 -->

                    </div>

                </div>
            </section>

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>23magic Software Enginieers</span></strong>. All Rights Reserved
            </div>

        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!--Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>