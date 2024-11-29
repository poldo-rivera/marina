<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dive Booking</title>
    
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

        <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dive Booking</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dive Booking</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Dive Booking Form -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reserve A Dive</h5>

                            <!-- Dive Booking Form -->
                            <form action="process_dive_booking.php" method="POST" class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter your first name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter your last name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="diveDate" class="form-label">Dive Date</label>
                                    <input type="date" id="diveDate" name="diveDate" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="diveSchedule" class="form-label">Dive Schedule</label>
                                    <select id="diveSchedule" name="diveSchedule" class="form-select" required>
                                        <option value="9am">9:00 AM</option>
                                        <option value="11am">11:00 AM</option>
                                        <option value="2pm">2:00 PM</option>
                                        <option value="6am">6:00 AM (Additional Dive)</option>
                                        <option value="6pm">6:00 PM (Additional Dive)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="diveType" class="form-label">Dive Type</label>
                                    <select id="diveType" name="diveType" class="form-select" required>
                                        <option value="shore">Shore Dive</option>
                                        <option value="boat">Boat Dive</option>
                                        <option value="night">Night Dive</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="requests" class="form-label">Special Requests</label>
                                    <input type="text" id="requests" name="requests" class="form-control" placeholder="e.g., Equipment rental, underwater photography">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Equipment Rentals (Optional)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="mask" name="equipment[]" value="mask">
                                        <label class="form-check-label" for="mask">Mask</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="fins" name="equipment[]" value="fins">
                                        <label class="form-check-label" for="fins">Fins</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="wetsuit" name="equipment[]" value="wetsuit">
                                        <label class="form-check-label" for="wetsuit">Wetsuit</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="tank" name="equipment[]" value="tank">
                                        <label class="form-check-label" for="tank">Tank</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="bcd" name="equipment[]" value="bcd">
                                        <label class="form-check-label" for="bcd">BCD (Buoyancy Control Device)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Book Your Dive</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Dive Booking Form -->

                <!-- Booked Dives List -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Dives</h5>

                            <!-- Table displaying booked dives -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Scheduled Dive</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>9:00 AM, Dec 15</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>2:00 PM, Dec 16</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Booked Dives List -->
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
