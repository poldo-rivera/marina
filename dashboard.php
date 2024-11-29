<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
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
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page name (e.g., dashboard.php)
    ?>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidenav.php"; ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <!-- Stats Widget Section -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-fill" style="font-size: 36px; color: #3498db; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="card-title" style="margin-bottom: 0;">Total Guests</h5>
                                </div>
                            </div>
                            <p class="card-text text-center" style="font-size: 20px; font-weight: bold; margin-bottom: 0;">150</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-cash-stack" style="font-size: 36px; color: #3498db; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="card-title" style="margin-bottom: 0;">Sales This Month</h5>
                                </div>
                            </div>
                            <p class="card-text text-center" style="font-size: 20px; font-weight: bold; margin-bottom: 0;">P120,000</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar-check" style="font-size: 36px; color: #3498db; margin-right: 15px;"></i>
                                <div>
                                    <h5 class="card-title" style="margin-bottom: 0;">Bookings This Month</h5>
                                </div>
                            </div>
                            <p class="card-text text-center" style="font-size: 20px; font-weight: bold; margin-bottom: 0;">5</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Charts Section -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sales Analytics</h5>
                            <div id="salesChart" style="height: 300px;"></div> <!-- Use a chart library -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Growth</h5>
                            <div id="userGrowthChart" style="height: 300px;"></div> <!-- Use a chart library -->
                        </div>
                    </div>
                </div>

            </div><!-- End Charts Section -->

            <div class="row">

                <!-- Recent Activity Section -->
                <div class="col-lg-6">
                    <div class="card recent-activity-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Recent Activity</h5>
                            <ul class="list-unstyled recent-activity-list">
                                <li class="recent-activity-item">
                                    <i class="bi bi-person-circle activity-icon"></i>
                                    <span>Admin logged in at 10:00 AM</span>
                                </li>
                                <li class="recent-activity-item">
                                    <i class="bi bi-person-fill activity-icon"></i>
                                    <span>User JohnDoe updated profile</span>
                                </li>
                                <li class="recent-activity-item">
                                    <i class="bi bi-cart-check activity-icon"></i>
                                    <span>New order placed by user123</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- To-Do Section -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">To-Do List</h5>
                            <ul class="list-unstyled">
                                <li>Update product stock</li>
                                <li>Review pending orders</li>
                                <li>Check server performance</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div><!-- End Recent Activity and To-Do Sections -->
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

    <!-- Initialize Charts -->
    <script>
        var salesChart = new ApexCharts(document.querySelector("#salesChart"), {
            chart: {
                type: 'line'
            },
            series: [{
                name: "Sales",
                data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            }
        });
        salesChart.render();

        var userGrowthChart = new ApexCharts(document.querySelector("#userGrowthChart"), {
            chart: {
                type: 'bar'
            },
            series: [{
                name: "Users",
                data: [10, 20, 30, 40, 50, 60, 70, 80, 90]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            }
        });
        userGrowthChart.render();
    </script>
</body>
</html>
