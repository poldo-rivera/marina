<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Bay 101 Dive Resort - Book a Dive</title>
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
            <h1>Book a Dive Session</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="guest-dive-booking.php">Book Dive</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Dive Booking Form -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Select Your Dive Package</h5>

                                <form action="process_booking.php" method="POST">
                                    <!-- Dive Package Selection -->
                                    <div class="mb-3">
                                        <label for="package" class="form-label">Dive Package</label>
                                        <select class="form-select" id="package" name="package" required>
                                            <option value="Standard Package">Standard Package</option>
                                            <option value="Premium Package">Premium Package</option>
                                            <option value="VIP Package">VIP Package</option>
                                        </select>
                                    </div>

                                    <!-- Number of Guests -->
                                    <div class="mb-3">
                                        <label for="guest_count" class="form-label">Number of Guests</label>
                                        <input type="number" class="form-control" id="guest_count" name="guest_count" min="1" max="10" required>
                                    </div>

                                    <!-- Booking Date -->
                                    <div class="mb-3">
                                        <label for="book_date" class="form-label">Booking Date</label>
                                        <input type="date" class="form-control" id="book_date" name="book_date" required>
                                    </div>

                                    <!-- Booking Time -->
                                    <div class="mb-3">
                                        <label for="book_time" class="form-label">Booking Time</label>
                                        <select class="form-select" id="book_time" name="book_time" required>
                                            <option value="9:00 AM">9:00 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="2:00 PM">2:00 PM</option>
                                            <option value="6:00 AM">6:00 AM (Special)</option>
                                            <option value="6:00 PM">6:00 PM (Special)</option>
                                        </select>
                                    </div>

                                    <!-- Equipment to Rent (Checkboxes) -->
                                    <div class="mb-3">
                                        <label class="form-label">Equipment to Rent</label><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="mask" name="equipment[]" value="Mask">
                                            <label class="form-check-label" for="mask">Mask</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="fins" name="equipment[]" value="Fins">
                                            <label class="form-check-label" for="fins">Fins</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="regulator" name="equipment[]" value="Regulator">
                                            <label class="form-check-label" for="regulator">Regulator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bcd" name="equipment[]" value="BCD">
                                            <label class="form-check-label" for="bcd">BCD</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="wetsuit" name="equipment[]" value="Wetsuit">
                                            <label class="form-check-label" for="wetsuit">Wetsuit</label>
                                        </div>
                                    </div>


                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary">Book Now</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Dive Booking Form -->
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
