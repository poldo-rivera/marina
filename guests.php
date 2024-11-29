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
            <h1>Guests</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="guests.php">Guests</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Guest List -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Guest List</h5>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Guest ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Room</th>
                                            <th>Package</th>
                                            <th>Check-In</th>
                                            <th>Check-Out</th>
                                            <th>Total Amount Due</th>
                                            <th>Payment Status</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example guest rows -->
                                        <tr>
                                            <td data-label="#">1</td>
                                            <td data-label="Guest ID">G123</td>
                                            <td data-label="Name">John Doe</td>
                                            <td data-label="Email">johndoe@example.com</td>
                                            <td data-label="Phone">+1234567890</td>
                                            <td data-label="Room">Ocean View Suite</td>
                                            <td data-label="Package">All-Inclusive</td>
                                            <td data-label="Check-In">2024-12-01</td>
                                            <td data-label="Check-Out">2024-12-07</td>
                                            <td data-label="Total Amount Due">$1,200</td>
                                            <td data-label="Payment Status">Paid</td>
                                            <td data-label="Payment"><a href="payment_page.php?guest_id=1" class="btn btn-sm btn-success"><i class="bi bi-credit-card"></i> Pay </a></td>
                                        </tr>
                                        <tr>
                                            <td data-label="#">2</td>
                                            <td data-label="Guest ID">G124</td>
                                            <td data-label="Name">Jane Smith</td>
                                            <td data-label="Email">janesmith@example.com</td>
                                            <td data-label="Phone">+0987654321</td>
                                            <td data-label="Room">Beachfront Room</td>
                                            <td data-label="Package">Standard</td>
                                            <td data-label="Check-In">2024-12-05</td>
                                            <td data-label="Check-Out">2024-12-10</td>
                                            <td data-label="Total Amount Due">$800</td>
                                            <td data-label="Payment Status">Pending</td>
                                            <td data-label="Payment"><a href="payment_page.php?guest_id=2" class="btn btn-sm btn-success"><i class="bi bi-credit-card"></i> Pay </a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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