<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page name (e.g., dashboard.php)
    ?>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidenav.php"; ?>


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Reports</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="reports.php">Reports</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Financial Report Card -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-file-earmark-bar-graph mb-3" style="font-size: 40px;"></i>
                            <h5 class="card-title">Financial Report</h5>
                            <p class="card-text">Generate a detailed report on financials, including revenue, expenses, and profits.</p>
                            <a href="financial-report.php" class="btn btn-primary">Generate Report</a>
                        </div>
                    </div>
                </div><!-- End Financial Report Card -->

                <!-- Customer Report Card -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-person-lines-fill mb-3" style="font-size: 40px;"></i>
                            <h5 class="card-title">Customer Report</h5>
                            <p class="card-text">View and generate reports on customer bookings and payments.</p>
                            <a href="customer-report.php" class="btn btn-primary">Generate Report</a>
                        </div>
                    </div>
                </div><!-- End Customer Report Card -->

                <!-- Inventory Report Card -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-box mb-3" style="font-size: 40px;"></i>
                            <h5 class="card-title">Inventory Report</h5>
                            <p class="card-text">Generate a report on inventory levels, including items used and remaining stock.</p>
                            <a href="inventory-report.php" class="btn btn-primary">Generate Report</a>
                        </div>
                    </div>
                </div><!-- End Inventory Report Card -->
            </div><!-- End Row -->

            <div class="row">
                <!-- Diving Report Card -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-water mb-3" style="font-size: 40px;"></i>
                            <h5 class="card-title">Diving Report</h5>
                            <p class="card-text">Generate a report on diving activities, including participation, schedules, and revenue.</p>
                            <a href="diving-report.php" class="btn btn-primary">Generate Report</a>
                        </div>
                    </div>
                </div><!-- End Diving Report Card -->

                <!-- Booking Report Card -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-calendar-check mb-3" style="font-size: 40px;"></i>
                            <h5 class="card-title">Booking Report</h5>
                            <p class="card-text">View all room and service bookings, along with customer details and booking statuses.</p>
                            <a href="booking-report.php" class="btn btn-primary">Generate Report</a>
                        </div>
                    </div>
                </div><!-- End Booking Report Card -->
            </div><!-- End Row -->
        </section>
    </main>


    

    <?php include "includes/footer.php"; ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>