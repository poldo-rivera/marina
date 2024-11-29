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
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/homepage.css"> <!-- Custom Styles -->

</head>

<body>
    <?php
    include "../includes/guest-header.php";
    include "../includes/guest-sidenav.php";
    ?>

    <main id="main" class="main">
        <div class="container">
            <div class="pagetitle text-center">
                <h1>Welcome to Ocean Bay 101 Dive Resort</h1>
                <p class="lead">Your gateway to a luxurious and unforgettable stay</p>
            </div>

            <!-- Resort Introduction Section -->
            <section class="resort-introduction text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <img src="../assets/img/front-desk.jpeg" class="card-img-top" alt="Resort Image">
                            <div class="card-body">
                                <h5 class="card-title">Experience the Serenity</h5>
                                <p class="card-text">Ocean Bay 101 Dive Resort offers breathtaking views, top-notch accommodations, and unique experiences. Whether you’re looking to relax or dive into adventure, we’ve got it all for you.</p>
                                <a href="guest-room-booking.php" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <img src="../assets/img/dive.jpeg" class="card-img-top" alt="Diving Experience">
                            <div class="card-body">
                                <h5 class="card-title">Explore the Depths</h5>
                                <p class="card-text">Join us for thrilling diving experiences and explore the underwater beauty of Ocean Bay. Our expert guides will ensure your safety and make your dive unforgettable.</p>
                                <a href="guest-dive-booking.php" class="btn btn-success">Book a Dive</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Us Section -->
            <section id="about-us" class="about-us mt-5 text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h3 class="card-title">About Ocean Bay 101 Dive Resort</h3>
                                <p class="card-text">Ocean Bay 101 Dive Resort is your perfect escape from the hustle and bustle of city life. Nestled on the pristine shores, we offer luxurious rooms, exciting diving activities, and an exclusive restaurant experience. Our mission is to provide our guests with an unforgettable resort experience surrounded by natural beauty and tranquility.</p>
                                <a href="about-us.php" class="btn btn-info">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Information Section (Cards with Images) -->
            <section class="information mt-5">
                <h2 class="text-center mb-4">Discover More About Us</h2>
                <div class="row">
                    <!-- Restaurant Menu Card -->
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                            <img src="../assets/img/vegetable_salad.jpeg" class="card-img-top" alt="Restaurant Menu">
                            <div class="card-body">
                                <h5 class="card-title">Restaurant Menu</h5>
                                <p class="card-text">Indulge in a variety of exquisite dishes, specially crafted to satisfy your culinary cravings. Our restaurant serves freshly prepared meals using the finest ingredients.</p>
                                <a href="guest-restaurant-menu.php" class="btn btn-primary">View Menu</a>
                            </div>
                        </div>
                    </div>
                    <!-- Packages Card -->
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                            <img src="../assets/img/picture.jpeg" class="card-img-top" alt="Exclusive Packages">
                            <div class="card-body">
                                <h5 class="card-title">Exclusive Packages</h5>
                                <p class="card-text">We offer all-inclusive packages that combine accommodation, meals, and dive activities to give you the perfect vacation experience. Find out more about our exclusive offers.</p>
                                <a href="guest-packages.php" class="btn btn-primary">View Packages</a>
                            </div>
                        </div>
                    </div>
                    <!-- Hotel Rooms Card -->
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                            <img src="../assets/img/two-beds.jpg" class="card-img-top" alt="Hotel Rooms">
                            <div class="card-body">
                                <h5 class="card-title">Hotel Rooms</h5>
                                <p class="card-text">Our luxurious rooms provide a tranquil and comfortable stay with stunning views of the ocean. Choose from a variety of room types that suit your needs.</p>
                                <a href="guest-rooms.php" class="btn btn-primary">View Rooms</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>

</html>
