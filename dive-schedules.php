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
            <h1>Dive Schedules</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dive-schedules.php">Dive Schedules</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Dive Schedules List -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Scheduled Dives</h5>

                            <!-- Table displaying dive schedules -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Slots Available</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example dive schedule rows -->
                                    <tr>
                                        <td>1</td>
                                        <td>2024-11-30</td>
                                        <td>9:00 AM</td>
                                        <td>Coral Reef Dive Spot</td>
                                        <td>5</td>
                                        <td>
                                            <!-- Add Participant Icon -->
                                            <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addParticipantModal1">
                                                <i class="bi bi-person-plus"></i>
                                            </a>

                                            <!-- View Participants Icon -->
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewParticipantsModal1">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2024-11-30</td>
                                        <td>2:00 PM</td>
                                        <td>Shipwreck Point</td>
                                        <td>3</td>
                                        <td>
                                            <!-- Add Participant Icon -->
                                            <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addParticipantModal2">
                                                <i class="bi bi-person-plus"></i>
                                            </a>

                                            <!-- View Participants Icon -->
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewParticipantsModal2">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add Dive Schedule Form -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Dive Schedule</h5>
                            <form action="process_add_dive.php" method="POST">
                                <div class="mb-3">
                                    <label for="diveDate" class="form-label">Dive Date</label>
                                    <input type="date" id="diveDate" name="diveDate" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="diveTime" class="form-label">Dive Time</label>
                                    <input type="time" id="diveTime" name="diveTime" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="diveLocation" class="form-label">Location</label>
                                    <input type="text" id="diveLocation" name="diveLocation" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="slots" class="form-label">Available Slots</label>
                                    <input type="number" id="slots" name="slots" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Add Dive Schedule</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal for Adding Participants -->
        <!-- Modal 1 -->
        <div class="modal fade" id="addParticipantModal1" tabindex="-1" aria-labelledby="addParticipantModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addParticipantModalLabel1">Add Participant for Dive</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="process_add_participant.php" method="POST">
                            <div class="mb-3">
                                <label for="participantName1" class="form-label">Participant Name</label>
                                <input type="text" id="participantName1" name="participantName" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="participantEmail1" class="form-label">Participant Email</label>
                                <input type="email" id="participantEmail1" name="participantEmail" class="form-control" required>
                            </div>
                            <input type="hidden" name="diveID" value="1"> <!-- Dive ID for this specific dive -->
                            <button type="submit" class="btn btn-primary w-100">Add Participant</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Viewing Participants -->
        <!-- Modal 1 -->
        <div class="modal fade" id="viewParticipantsModal1" tabindex="-1" aria-labelledby="viewParticipantsModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewParticipantsModalLabel1">View Participants for Dive</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- List of participants (example) -->
                        <ul>
                            <li>John Doe - johndoe@example.com</li>
                            <li>Jane Smith - janesmith@example.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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