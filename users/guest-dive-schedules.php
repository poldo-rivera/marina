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

    <style>
        .card-img-top {
            width: 100%;
            height: 200px; /* Adjust this height as needed */
            object-fit: cover; /* Ensures images are not stretched */
        }
    </style>
</head>

<body>
    <?php
    include "../includes/guest-header.php";
    include "../includes/guest-sidenav.php";
    ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Diving Schedules</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="guest-dive-schedules.php">Diving Schedules</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Diving Schedule Cards -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/img/dive.jpeg" class="card-img-top" alt="Morning Dive">
                        <div class="card-body">
                            <h5 class="card-title">Morning Dive - 9:00 AM</h5>
                            <p class="card-text">Join us for a peaceful morning dive at our premier location. Explore the vibrant underwater world with an experienced guide.</p>
                            <p><strong>Available Dive Masters:</strong></p>
                            <ul>
                                <li>John Doe</li>
                                <li>Jane Smith</li>
                            </ul>
                            <a href="guest-dive-booking.php?schedule=morning" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/img/package1.jpg" class="card-img-top" alt="Midday Dive">
                        <div class="card-body">
                            <h5 class="card-title">Midday Dive - 11:00 AM</h5>
                            <p class="card-text">Dive during the midday for a chance to see a variety of marine life. Perfect for those who prefer a bit more warmth!</p>
                            <p><strong>Available Dive Masters:</strong></p>
                            <ul>
                                <li>Alice Brown</li>
                                <li>Michael Lee</li>
                            </ul>
                            <a href="guest-dive-booking.php?schedule=midday" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/img/package2.jpg" class="card-img-top" alt="Afternoon Dive">
                        <div class="card-body">
                            <h5 class="card-title">Afternoon Dive - 2:00 PM</h5>
                            <p class="card-text">Enjoy a refreshing afternoon dive, ideal for capturing stunning underwater photos and observing local wildlife.</p>
                            <p><strong>Available Dive Masters:</strong></p>
                            <ul>
                                <li>Maria Gonzalez</li>
                                <li>David Lee</li>
                            </ul>
                            <a href="guest-dive-booking.php?schedule=afternoon" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/img/package3.jpeg" class="card-img-top" alt="Evening Dive">
                        <div class="card-body">
                            <h5 class="card-title">Evening Dive - 6:00 PM</h5>
                            <p class="card-text">A magical evening dive as the sun sets. Experience the underwater world as it transforms with the setting sun.</p>
                            <p><strong>Available Dive Masters:</strong></p>
                            <ul>
                                <li>Chris Williams</li>
                                <li>Emma Clark</li>
                            </ul>
                            <a href="guest-dive-booking.php?schedule=evening" class="btn btn-primary">Book Now</a>
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
