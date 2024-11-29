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
            <h1>Rooms</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Rooms</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Room List -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Available Rooms</h5>

                            <!-- Table displaying room details -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Room Name</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example room rows -->
                                    <tr>
                                        <td>1</td>
                                        <td>Ocean View Suite</td>
                                        <td>Suite</td>
                                        <td><span class="badge bg-success">Available</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Deluxe Room</td>
                                        <td>Double</td>
                                        <td><span class="badge bg-warning">Booked</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add Room Form -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Room</h5>

                            <form action="process_add_room.php" method="POST">
                                <div class="mb-3">
                                    <label for="roomName" class="form-label">Room Name</label>
                                    <input type="text" id="roomName" name="roomName" class="form-control" placeholder="Enter room name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="roomType" class="form-label">Room Type</label>
                                    <select id="roomType" name="roomType" class="form-select" required>
                                        <option value="single">Single Room</option>
                                        <option value="double">Double Room</option>
                                        <option value="suite">Suite</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="roomStatus" class="form-label">Status</label>
                                    <select id="roomStatus" name="roomStatus" class="form-select" required>
                                        <option value="available">Available</option>
                                        <option value="booked">Booked</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Add Room</button>
                            </form>
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