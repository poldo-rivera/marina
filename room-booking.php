<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    
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

    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page name
    ?>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidenav.php"; ?>

        <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Room Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Room Booking</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Booking Form -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reserve A Room</h5>
                            <form action="process_booking.php" method="POST" class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter first name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter last name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="checkIn" class="form-label">Check-In Date</label>
                                    <input type="date" id="checkIn" name="checkIn" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="checkOut" class="form-label">Check-Out Date</label>
                                    <input type="date" id="checkOut" name="checkOut" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="roomType" class="form-label">Room Type</label>
                                    <select id="roomType" name="roomType" class="form-select" required>
                                        <option value="single">Single Room</option>
                                        <option value="double">Double Room</option>
                                        <option value="suite">Suite</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="package" class="form-label">Package</label>
                                    <select id="package" name="package" class="form-select" required>
                                        <option value="standard">Standard Package</option>
                                        <option value="deluxe">Deluxe Package</option>
                                        <option value="premium">Premium Package</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="requests" class="form-label">Special Requests</label>
                                    <input type="text" id="requests" name="requests" class="form-control" placeholder="e.g., Extra bed, sea view">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Check Availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Available Room Packages Section -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Available Room Packages</h5>
                            <div class="row">
                                <!-- Example Room -->
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <img src="assets/img/room.jpg" class="card-img-top" alt="Room Image">
                                        <div class="card-body">
                                            <h5 class="card-title">Deluxe Suite</h5>
                                            <p class="card-text">A luxurious suite with a sea view and king-size bed.</p>
                                            <p class="card-text"><strong>Price:</strong> $150/night</p>
                                            <button class="btn btn-success w-100">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more room cards as needed -->
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
