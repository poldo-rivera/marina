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
            <h1>Book Your Stay</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="guest-room-booking.php">Book Room</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Booking Form -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Booking Form</h5>

                                <form action="booking-confirmation.php" method="POST">
                                    
                                    <!-- Package Selection -->
                                    <div class="row mb-3">
                                        <label for="package" class="col-sm-4 col-form-label">Package</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="package" name="package" required>
                                                <option value="">Select Package</option>
                                                <option value="allInclusive">All-Inclusive</option>
                                                <option value="standard">Standard</option>
                                                <option value="premium">Premium</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Number of Accompanying Guests -->
                                    <div class="row mb-3">
                                        <label for="numGuests" class="col-sm-4 col-form-label">Number of Accompanying Guests</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="numGuests" name="numGuests" min="1" required>
                                        </div>
                                    </div>


                                    <!-- Check-in Date -->
                                    <div class="row mb-3">
                                        <label for="checkInDate" class="col-sm-4 col-form-label">Check-In Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="checkInDate" name="checkInDate" required>
                                        </div>
                                    </div>

                                    <!-- Check-out Date -->
                                    <div class="row mb-3">
                                        <label for="checkOutDate" class="col-sm-4 col-form-label">Check-Out Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" required>
                                        </div>
                                    </div>

                                    <!-- Special Requests -->
                                    <div class="row mb-3">
                                        <label for="specialRequests" class="col-sm-4 col-form-label">Special Requests</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="specialRequests" name="specialRequests" rows="4" placeholder="Enter any special requests here (e.g., dietary preferences, room preferences, etc.)"></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-primary w-100">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Booking Form -->
                </div>
            </div>
        </section>
    </main>

    <?php include "../includes/footer.php"; ?>

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
