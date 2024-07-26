<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


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

    <!--Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


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

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Data Tables</h1>

            </div><!-- End Page Title -->

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">List of best performing schools for all challenges </h5>


                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <b>S</b>chool
                                            </th>
                                            <th>Reg.No</th>
                                            <th>City</th>
                                            <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                                            <th>Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sylvia Peters</td>
                                            <td>6829</td>
                                            <td>Arrah</td>
                                            <td>2015/03/02</td>
                                            <td>93%</td>
                                        </tr>
                                        <tr>
                                            <td>Kasper Craig</td>
                                            <td>5515</td>
                                            <td>Firenze</td>
                                            <td>2015/26/04</td>
                                            <td>96%</td>
                                        </tr>

                                        <tr>
                                            <td>Allegra Shepherd</td>
                                            <td>2576</td>
                                            <td>Meeuwen-Gruitrode</td>
                                            <td>2004/19/04</td>
                                            <td>91%</td>
                                        </tr>
                                        <tr>
                                            <td>Fallon Reyes</td>
                                            <td>3178</td>
                                            <td>Monceau-sur-Sambre</td>
                                            <td>2005/15/02</td>
                                            <td>96%</td>
                                        </tr>
                                        <tr>
                                            <td>Karen Whitley</td>
                                            <td>4357</td>
                                            <td>Sluis</td>
                                            <td>2003/02/05</td>
                                            <td>93%</td>
                                        </tr>
                                        <tr>
                                            <td>Stewart Stephenson</td>
                                            <td>5350</td>
                                            <td>Villa Faraldi</td>
                                            <td>2003/05/07</td>
                                            <td>95%</td>
                                        </tr>
                                        <tr>
                                            <td>Ursula Reynolds</td>
                                            <td>7544</td>
                                            <td>Southampton</td>
                                            <td>1999/16/12</td>
                                            <td>91%</td>
                                        </tr>
                                        <tr>
                                            <td>Adrienne Winters</td>
                                            <td>4425</td>
                                            <td>Laguna Blanca</td>
                                            <td>2014/15/09</td>
                                            <td>94%</td>
                                        </tr>
                                        <tr>
                                            <td>Francesca Brock</td>
                                            <td>1337</td>
                                            <td>Oban</td>
                                            <td>2000/12/06</td>
                                            <td>90%</td>
                                        </tr>
                                        <tr>
                                            <td>Ursa Davenport</td>
                                            <td>7629</td>
                                            <td>New Plymouth</td>
                                            <td>2013/27/06</td>
                                            <td>97%</td>
                                        </tr>
                                        <tr>
                                            <td>Mark Brock</td>
                                            <td>3310</td>
                                            <td>Veenendaal</td>
                                            <td>2006/08/09</td>
                                            <td>91%</td>
                                        </tr>
                                        <tr>
                                            <td>Dale Rush</td>
                                            <td>5050</td>
                                            <td>Chicoutimi</td>
                                            <td>2000/27/03</td>
                                            <td>92%</td>
                                        </tr>
                                        <tr>
                                            <td>Shellie Murphy</td>
                                            <td>3845</td>
                                            <td>Marlborough</td>
                                            <td>2013/13/11</td>
                                            <td>92%</td>
                                        </tr>
                                        <tr>
                                            <td>Porter Nicholson</td>
                                            <td>4539</td>
                                            <td>Bismil</td>
                                            <td>2012/22/10</td>
                                            <td>93%</td>
                                        </tr>
                                        <tr>
                                            <td>Oliver Huber</td>
                                            <td>1265</td>
                                            <td>Hannche</td>
                                            <td>2002/11/01</td>
                                            <td>94%</td>
                                        </tr>
                                        <tr>
                                            <td>Calista Maynard</td>
                                            <td>3315</td>
                                            <td>Pozzuolo del Friuli</td>
                                            <td>2006/23/03</td>
                                            <td>95%</td>
                                        </tr>
                                        <tr>
                                            <td>Lois Vargas</td>
                                            <td>6825</td>
                                            <td>Cumberland</td>
                                            <td>1999/25/04</td>
                                            <td>90%</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Dickson</td>
                                            <td>2785</td>
                                            <td>Woodstock</td>
                                            <td>2001/22/03</td>
                                            <td>92%</td>
                                        </tr>
                                        <tr>
                                            <td>Dalton Jennings</td>
                                            <td>5416</td>
                                            <td>Dudzele</td>
                                            <td>2015/09/02</td>
                                            <td>84%</td>
                                        </tr>
                                        <tr>
                                            <td>Cathleen Kramer</td>
                                            <td>3380</td>
                                            <td>Crowsnest Pass</td>
                                            <td>2012/27/07</td>
                                            <td>93%</td>
                                        </tr>
                                        <tr>
                                            <td>Zachery Morgan</td>
                                            <td>6730</td>
                                            <td>Collines-de-l'Outaouais</td>
                                            <td>2006/04/09</td>
                                            <td>91%</td>
                                        </tr>
                                        <tr>
                                            <td>Yoko Freeman</td>
                                            <td>4077</td>
                                            <td>Lidköping</td>
                                            <td>2002/27/12</td>
                                            <td>98%</td>
                                        </tr>
                                        <tr>
                                            <td>Chaim Waller</td>
                                            <td>4240</td>
                                            <td>North Shore</td>
                                            <td>2010/25/07</td>
                                            <td>95%</td>
                                        </tr>
                                        <tr>
                                            <td>Berk Johnston</td>
                                            <td>4532</td>
                                            <td>Vergnies</td>
                                            <td>2016/23/02</td>
                                            <td>93%</td>
                                        </tr>
                                        <tr>
                                            <td>Tad Munoz</td>
                                            <td>2902</td>
                                            <td>Saint-Nazaire</td>
                                            <td>2010/09/05</td>
                                            <td>95%</td>
                                        </tr>

                                        <tr>
                                            <td>Haviva Hernandez</td>
                                            <td>8136</td>
                                            <td>Suwałki</td>
                                            <td>2000/30/01</td>
                                            <td>96%</td>
                                        </tr>
                                        <tr>
                                            <td>Alisa Horn</td>
                                            <td>9853</td>
                                            <td>Ucluelet</td>
                                            <td>2007/01/11</td>
                                            <td>99%</td>
                                        </tr>
                                        <tr>
                                            <td>Zelenia Roman</td>
                                            <td>7516</td>
                                            <td>Redwater</td>
                                            <td>2012/03/03</td>
                                            <td>80%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">List of worst performing schools for all challenges </h5>
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <b>S</b>chool
                                                    </th>
                                                    <th>Reg.No</th>
                                                    <th>City</th>
                                                    <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                                                    <th>Score</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Unity Pugh</td>
                                                    <td>9958</td>
                                                    <td>Curicó</td>
                                                    <td>2005/02/11</td>
                                                    <td>37%</td>
                                                </tr>
                                                <tr>
                                                    <td>Theodore Duran</td>
                                                    <td>8971</td>
                                                    <td>Dhanbad</td>
                                                    <td>1999/04/07</td>
                                                    <td>17%</td>
                                                </tr>
                                                <tr>
                                                    <td>Kylie Bishop</td>
                                                    <td>3147</td>
                                                    <td>Norman</td>
                                                    <td>2005/09/08</td>
                                                    <td>13%</td>
                                                </tr>
                                                <tr>
                                                    <td>Willow Gilliam</td>
                                                    <td>3497</td>
                                                    <td>Amqui</td>
                                                    <td>2009/29/11</td>
                                                    <td>30%</td>
                                                </tr>
                                                <tr>
                                                    <td>Blossom Dickerson</td>
                                                    <td>5018</td>
                                                    <td>Kempten</td>
                                                    <td>2006/11/09</td>
                                                    <td>17%</td>
                                                </tr>
                                                <tr>
                                                    <td>Elliott Snyder</td>
                                                    <td>3925</td>
                                                    <td>Enines</td>
                                                    <td>2006/03/08</td>
                                                    <td>17%</td>
                                                </tr>
                                                <tr>
                                                    <td>Castor Pugh</td>
                                                    <td>9488</td>
                                                    <td>Neath</td>
                                                    <td>2014/23/12</td>
                                                    <td>23%</td>
                                                </tr>
                                                <tr>
                                                    <td>Pearl Carlson</td>
                                                    <td>6231</td>
                                                    <td>Cobourg</td>
                                                    <td>2014/31/08</td>
                                                    <td>00%</td>
                                                </tr>
                                                <tr>
                                                    <td>Deirdre Bridges</td>
                                                    <td>1579</td>
                                                    <td>Eberswalde-Finow</td>
                                                    <td>2014/26/08</td>
                                                    <td>14%</td>
                                                </tr>
                                                <tr>
                                                    <td>Daniel Baldwin</td>
                                                    <td>6095</td>
                                                    <td>Moircy</td>
                                                    <td>2000/11/01</td>
                                                    <td>33%</td>
                                                </tr>
                                                <tr>
                                                    <td>Phelan Kane</td>
                                                    <td>9519</td>
                                                    <td>Germersheim</td>
                                                    <td>1999/16/04</td>
                                                    <td>27%</td>
                                                </tr>
                                                <tr>
                                                    <td>Quentin Salas</td>
                                                    <td>1339</td>
                                                    <td>Los Andes</td>
                                                    <td>2011/26/01</td>
                                                    <td>19%</td>
                                                </tr>
                                                <tr>
                                                    <td>Armand Suarez</td>
                                                    <td>6583</td>
                                                    <td>Funtua</td>
                                                    <td>1999/06/11</td>
                                                    <td>9%</td>
                                                </tr>
                                                <tr>
                                                    <td>Gretchen Rogers</td>
                                                    <td>5393</td>
                                                    <td>Moxhe</td>
                                                    <td>1998/26/10</td>
                                                    <td>24%</td>
                                                </tr>
                                                <tr>
                                                    <td>Harding Thompson</td>
                                                    <td>2824</td>
                                                    <td>Abeokuta</td>
                                                    <td>2008/06/08</td>
                                                    <td>10%</td>
                                                </tr>
                                                <tr>
                                                    <td>Mira Rocha</td>
                                                    <td>4393</td>
                                                    <td>Port Harcourt</td>
                                                    <td>2002/04/10</td>
                                                    <td>14%</td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>Drew Phillips</td>
                                                    <td>2931</td>
                                                    <td>Goes</td>
                                                    <td>2011/18/10</td>
                                                    <td>58%</td>
                                                </tr>
                                                <tr>
                                                    <td>Emerald Warner</td>
                                                    <td>6205</td>
                                                    <td>Chiavari</td>
                                                    <td>2002/08/04</td>
                                                    <td>58%</td>
                                                </tr>
                                                <tr>
                                                    <td>Colin Burch</td>
                                                    <td>7457</td>
                                                    <td>Anamur</td>
                                                    <td>2004/02/01</td>
                                                    <td>34%</td>
                                                </tr>
                                                <tr>
                                                    <td>Russell Haynes</td>
                                                    <td>8916</td>
                                                    <td>Frascati</td>
                                                    <td>2015/28/04</td>
                                                    <td>18%</td>
                                                </tr>
                                                <tr>
                                                    <td>Brennan Brooks</td>
                                                    <td>9011</td>
                                                    <td>Olmué</td>
                                                    <td>2000/18/04</td>
                                                    <td>2%</td>
                                                </tr>
                                                <tr>
                                                    <td>Kane Anthony</td>
                                                    <td>8075</td>
                                                    <td>LaSalle</td>
                                                    <td>2006/21/05</td>
                                                    <td>93%</td>
                                                </tr>
                                                <tr>
                                                    <td>Scarlett Hurst</td>
                                                    <td>1019</td>
                                                    <td>Brampton</td>
                                                    <td>2015/07/01</td>
                                                    <td>94%</td>
                                                </tr>
                                                <tr>
                                                    <td>James Scott</td>
                                                    <td>3008</td>
                                                    <td>Meux</td>
                                                    <td>2007/30/05</td>
                                                    <td>55%</td>
                                                </tr>
                                                <tr>
                                                    <td>Desiree Ferguson</td>
                                                    <td>9054</td>
                                                    <td>Gojra</td>
                                                    <td>2009/15/02</td>
                                                    <td>81%</td>
                                                </tr>
                                                <tr>
                                                    <td>Elaine Bishop</td>
                                                    <td>9160</td>
                                                    <td>Petrópolis</td>
                                                    <td>2008/23/12</td>
                                                    <td>48%</td>
                                                </tr>
                                                <tr>
                                                    <td>Hilda Nelson</td>
                                                    <td>6307</td>
                                                    <td>Posina</td>
                                                    <td>2004/23/05</td>
                                                    <td>76%</td>
                                                </tr>
                                                <tr>
                                                    <td>Evangeline Beasley</td>
                                                    <td>3820</td>
                                                    <td>Caplan</td>
                                                    <td>2009/12/03</td>
                                                    <td>62%</td>
                                                </tr>
                                                <tr>
                                                    <td>Wyatt Riley</td>
                                                    <td>5694</td>
                                                    <td>Cavaion Veronese</td>
                                                    <td>2012/19/02</td>
                                                    <td>67%</td>
                                                </tr>
                                                <tr>
                                                    <td>Wyatt Mccarthy</td>
                                                    <td>3547</td>
                                                    <td>Patan</td>
                                                    <td>2014/23/06</td>
                                                    <td>9%</td>
                                                </tr>
                                                <tr>
                                                    <td>Cairo Rice</td>
                                                    <td>6273</td>
                                                    <td>Ostra Vetere</td>
                                                    <td>2016/27/02</td>
                                                    <td>13%</td>
                                                </tr> -->
                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                </div>

            </section>
        </main>
        <!-- End #main -->


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

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>