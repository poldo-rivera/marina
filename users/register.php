<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
</head>

<body>
    <?php
        include '../includes/dbcon.php'; // Database connection

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get form data and sanitize inputs
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $dob = $_POST['dob'];
            $contactNo = $_POST['contact'];
            $city = $_POST['city'];
            $province = $_POST['province'];
            $country = $_POST['country'];
            $postalCode = $_POST['postal-code'];
            $profilePicture = ''; // If you plan to handle file uploads, you'll need extra code for that.
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userType = 'Guest'; // Default userType

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Step 1: Insert into the guest table
            $guestSql = "INSERT INTO guest (fname, lname, dob, contactNo, city, province, country, postalCode, profilePicture) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            if ($stmt = $mysqli->prepare($guestSql)) {
                $stmt->bind_param("sssssssss", $fname, $lname, $dob, $contactNo, $city, $province, $country, $postalCode, $profilePicture);
                if ($stmt->execute()) {
                    // Get the guestID of the newly inserted guest
                    $guestID = $stmt->insert_id;
                } else {
                    echo "Error inserting guest: " . $stmt->error;
                    exit;
                }
                $stmt->close();
            }

            // Step 2: Insert into the accounts table with the guestID
            $accountSql = "INSERT INTO accounts (username, password, userType, dateCreated, guestID) 
                        VALUES (?, ?, ?, NOW(), ?)";
            if ($stmt = $mysqli->prepare($accountSql)) {
                $stmt->bind_param("sssi", $username, $hashedPassword, $userType, $guestID);
                if ($stmt->execute()) {
                    // Account successfully created, redirect to login page
                    header("Location: ../login.php"); // Redirect to login page
                    exit();
                } else {
                    echo "Error creating account: " . $stmt->error;
                }
                $stmt->close();
            }
        }
    ?>


    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="#" class="logo d-flex align-items-center w-auto">
                                    <img src="../assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Ocean Bay 101 Dive Resort</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form class="row g-3" action="register.php" method="POST">
                                        <div class="col-md-6">
                                            <label for="fname" class="form-label">First Name</label>
                                            <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your first name" required>
                                            <div class="invalid-feedback">Please, enter your first name!</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="lname" class="form-label">Last Name</label>
                                            <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter your last name" required>
                                            <div class="invalid-feedback">Please, enter your last name!</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="contact" class="form-label">Contact Number</label>
                                            <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter your contact number" required>
                                            <div class="invalid-feedback">Please, enter your contact number!</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="country" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="province" class="form-label">Province/State</label>
                                            <input type="text" class="form-control" id="province" name="province" placeholder="Enter your province/state" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="postal-code" class="form-label">Postal Code</label>
                                            <input type="text" class="form-control" id="postal-code" name="postal-code" placeholder="Enter your postal code" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" id="dob" required>
                                            <div class="invalid-feedback">Please, enter your date of birth!</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" required>
                                            <div class="invalid-feedback">Please enter a valid Email address!</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="username" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username" class="form-control" id="username" required>
                                                <div class="invalid-feedback">Please choose a username.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <!-- Center the Terms and Conditions Checkbox -->
                                        <div class="col-12 d-flex justify-content-center">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>

                                        <!-- Center the Already Have an Account Link -->
                                        <div class="col-12 d-flex justify-content-center">
                                            <p class="small mb-0">Already have an account? <a href="../login.php">Log in</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>



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