<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Bay 101 Dive Resort</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/guest-packages.css">
</head>

<body>
    <?php
    include "../includes/guest-header.php";
    include "../includes/guest-sidenav.php";
    ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Packages</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="guest-packages.php">Packages</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="container">
                <h3>Room & Meal Packages</h3>
                <div class="row">
                    <!-- Hotel Room Package 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="../assets/img/room3.jpg" class="card-img-top" alt="Hotel Room 1">
                            <div class="card-body">
                                <h5 class="card-title">Ocean View Suite</h5>
                                <p class="card-text">A luxurious suite with ocean views and all-around meals.</p>
                                <p class="price">$1,200 / night</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Hotel Room Package 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="../assets/img/two-beds.jpg" class="card-img-top" alt="Hotel Room 2">
                            <div class="card-body">
                                <h5 class="card-title">Beachfront Room</h5>
                                <p class="card-text">A beautiful beachfront room with exclusive meal packages.</p>
                                <p class="price">$800 / night</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Hotel Room Package 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="../assets/img/room.jpg" class="card-img-top" alt="Hotel Room 3">
                            <div class="card-body">
                                <h5 class="card-title">Garden View Room</h5>
                                <p class="card-text">A peaceful garden view room with breakfast included.</p>
                                <p class="price">$600 / night</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Diving Packages</h3>
                <div class="row">
                    <!-- Diving Package 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="../assets/img/package3.jpeg" class="card-img-top" alt="Diving 1">
                            <div class="card-body">
                                <h5 class="card-title">Morning Dive</h5>
                                <p class="card-text">Explore the depths of the ocean in the early morning dive session.</p>
                                <p class="price">$100 / session</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Diving Package 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="../assets/img/package1.jpg" class="card-img-top" alt="Diving 2">
                            <div class="card-body">
                                <h5 class="card-title">Afternoon Dive</h5>
                                <p class="card-text">Dive into the crystal-clear waters in the afternoon session.</p>
                                <p class="price">$120 / session</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Diving Package 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="../assets/img/package2.jpg" class="card-img-top" alt="Diving 3">
                            <div class="card-body">
                                <h5 class="card-title">Night Dive</h5>
                                <p class="card-text">A thrilling night dive to discover the nocturnal ocean life.</p>
                                <p class="price">$150 / session</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include "../includes/footer.php";?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>
