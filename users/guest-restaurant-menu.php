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

    <style>
        .menu-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin: 15px;
            max-width: 300px;
            text-align: center;
        }

        .menu-card img {
            width: 100%;
            height: 250px; /* Set a fixed height for uniformity */
            object-fit: cover; /* Ensures the images are not distorted */
        }

        .menu-card .card-body {
            padding: 15px;
        }

        .menu-card .price {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
        }

        .menu-card .availability {
            margin-top: 10px;
            color: green;
        }

        .menu-card .unavailable {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    include "../includes/guest-header.php";
    include "../includes/guest-sidenav.php";
    ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Restaurant Menu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="guest-restaurant-menu.php">Restaurant Menu</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Menu Item 1 -->
                        <div class="col-md-4">
                            <div class="menu-card">
                                <img src="../assets/img/menu1.jpeg" alt="Menu Item 1">
                                <div class="card-body">
                                    <h5 class="card-title">Grilled Seafood Platter</h5>
                                    <p class="card-text">A delicious platter with a selection of grilled seafood, served with vegetables and sauce.</p>
                                    <div class="price">$25.00</div>
                                    <div class="availability">Available</div>
                                </div>
                            </div>
                        </div>

                        <!-- Menu Item 2 -->
                        <div class="col-md-4">
                            <div class="menu-card">
                                <img src="../assets/img/menu2.jpeg" alt="Menu Item 2">
                                <div class="card-body">
                                    <h5 class="card-title">Beef Steak</h5>
                                    <p class="card-text">Juicy, tender beef steak grilled to perfection and served with mashed potatoes.</p>
                                    <div class="price">$30.00</div>
                                    <div class="availability unavailable">Out of Stock</div>
                                </div>
                            </div>
                        </div>

                        <!-- Menu Item 3 -->
                        <div class="col-md-4">
                            <div class="menu-card">
                                <img src="../assets/img/vegetable_salad.jpeg" alt="Menu Item 3">
                                <div class="card-body">
                                    <h5 class="card-title">Vegetarian Salad</h5>
                                    <p class="card-text">A fresh salad made with seasonal vegetables, nuts, and a light vinaigrette dressing.</p>
                                    <div class="price">$15.00</div>
                                    <div class="availability">Available</div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more menu items as needed -->
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
