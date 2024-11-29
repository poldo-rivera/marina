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

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Inventory</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="inventory.php">Inventory</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- Inventory Table Section -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Current Inventory</h5>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item Name</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total Value</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example of inventory items -->
                                        <tr>
                                            <td>1</td>
                                            <td>Scuba Tank</td>
                                            <td>Diving Equipment</td>
                                            <td>30</td>
                                            <td>$50</td>
                                            <td>$1500</td>
                                            <td><span class="badge bg-success">In Stock</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="edit_inventory.php?id=1" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil-square" style="font-size: 1.25rem;"></i>
                                                    </a>
                                                    <a href="delete_inventory.php?id=1" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash" style="font-size: 1.25rem;"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Diving Mask</td>
                                            <td>Diving Equipment</td>
                                            <td>15</td>
                                            <td>$20</td>
                                            <td>$300</td>
                                            <td><span class="badge bg-warning">Low Stock</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="edit_inventory.php?id=2" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil-square" style="font-size: 1.25rem;"></i>
                                                    </a>
                                                    <a href="delete_inventory.php?id=2" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash" style="font-size: 1.25rem;"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Life Jacket</td>
                                            <td>Safety Gear</td>
                                            <td>50</td>
                                            <td>$25</td>
                                            <td>$1250</td>
                                            <td><span class="badge bg-success">In Stock</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="edit_inventory.php?id=3" class="btn btn-sm btn-warning">
                                                        <i class="bi bi-pencil-square" style="font-size: 1.25rem;"></i>
                                                    </a>
                                                    <a href="delete_inventory.php?id=3" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash" style="font-size: 1.25rem;"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Additional inventory items can be listed here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add New Item Form -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Item</h5>

                            <form action="process_inventory.php" method="POST">
                                <div class="mb-3">
                                    <label for="itemName" class="form-label">Item Name</label>
                                    <input type="text" id="itemName" name="itemName" class="form-control" placeholder="Enter item name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select id="category" name="category" class="form-select" required>
                                        <option value="Diving Equipment">Diving Equipment</option>
                                        <option value="Safety Gear">Safety Gear</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" id="quantity" name="quantity" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="unitPrice" class="form-label">Unit Price ($)</label>
                                    <input type="number" id="unitPrice" name="unitPrice" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Add Item</button>
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
