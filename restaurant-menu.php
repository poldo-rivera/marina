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
            <h1>Restaurant Menu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="restaurant-menu.php">Restaurant Menu</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Restaurant Menu Section -->
        <div class="container">
            <div class="row">
                <!-- Menu Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/grilledSalmon.jpeg" class="card-img-top" alt="Grilled Salmon" height="258px">
                        <div class="card-body">
                            <h5 class="card-title">Grilled Salmon</h5>
                            <p class="card-text">Delicious grilled salmon with a side of vegetables.</p>
                            <p><strong>Price:</strong> $15.99</p>
                            <p><strong>Status:</strong> <span class="badge bg-success">Available</span></p>
                            <div class="d-flex justify-content-between">
                                <a href="edit-menu-item.php?id=1" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="delete-menu-item.php?id=1" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Menu Card 1 -->

                <!-- Menu Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/vegetable_salad.jpeg" class="card-img-top" alt="Vegetable Salad" height="258px">
                        <div class="card-body">
                            <h5 class="card-title">Vegetable Salad</h5>
                            <p class="card-text">Fresh seasonal vegetables served with dressing.</p>
                            <p><strong>Price:</strong> $8.50</p>
                            <p><strong>Status:</strong> <span class="badge bg-danger">Unavailable</span></p>
                            <div class="d-flex justify-content-between">
                                <a href="edit-menu-item.php?id=2" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="delete-menu-item.php?id=2" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Menu Card 2 -->

                <!-- Menu Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/pasta_carbonara.jpeg" class="card-img-top" alt="Pasta Carbonara" height="258px">
                        <div class="card-body">
                            <h5 class="card-title">Pasta Carbonara</h5>
                            <p class="card-text">Classic pasta carbonara with bacon and creamy sauce.</p>
                            <p><strong>Price:</strong> $12.00</p>
                            <p><strong>Status:</strong> <span class="badge bg-success">Available</span></p>
                            <div class="d-flex justify-content-between">
                                <a href="edit-menu-item.php?id=3" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="delete-menu-item.php?id=3" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Menu Card 3 -->

                <!-- Additional Menu Cards -->
                <!-- Add more cards for additional menu items in the same format as above -->
                
            </div><!-- End Row -->
        </div><!-- End Restaurant Menu Section -->

        <!-- Add New Menu Item Button -->
        <div class="text-center mt-4">
            <a href="add-menu-item.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New Menu Item</a>
        </div>

    </main><!-- End Main Content -->


    

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