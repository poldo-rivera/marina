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
</head>

<body>
    <?php
    include "../includes/guest-header.php";
    include "../includes/guest-sidenav.php";
    ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Booking and Purchase History</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Combined History Table -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">History</h5>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Transaction ID</th>
                                            <th>Type</th>
                                            <th>Item/Room</th>
                                            <th>Package</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Receipt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example history row (Booking) -->
                                        <tr>
                                            <td>1</td>
                                            <td>BK001</td>
                                            <td>Booking</td>
                                            <td>Ocean View Suite</td>
                                            <td>All-Inclusive</td>
                                            <td>2024-12-01 - 2024-12-07</td>
                                            <td>$1,200</td>
                                            <td>Confirmed</td>
                                            <td><a href="receipt.php?transaction_id=BK001" class="btn btn-sm btn-primary"><i class="bi bi-file-earmark-pdf"></i> View Receipt</a></td>
                                        </tr>
                                        <!-- Example history row (Purchase) -->
                                        <tr>
                                            <td>2</td>
                                            <td>P001</td>
                                            <td>Purchase</td>
                                            <td>Diving Equipment</td>
                                            <td>N/A</td>
                                            <td>2024-11-20</td>
                                            <td>$150</td>
                                            <td>Completed</td>
                                            <td><a href="receipt.php?transaction_id=P001" class="btn btn-sm btn-primary"><i class="bi bi-file-earmark-pdf"></i> View Receipt</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>P002</td>
                                            <td>Purchase</td>
                                            <td>Restaurant Meal</td>
                                            <td>Standard</td>
                                            <td>2024-11-22</td>
                                            <td>$40</td>
                                            <td>Completed</td>
                                            <td><a href="receipt.php?transaction_id=P002" class="btn btn-sm btn-primary"><i class="bi bi-file-earmark-pdf"></i> View Receipt</a></td>
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
