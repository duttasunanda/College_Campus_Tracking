<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="utf-8">
    <title>login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">COLLEGE CAMPUS TRACKING</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.php" class="dropdown-item">Job List</a>
                            <a href="job-detail.php" class="dropdown-item">Job Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.php" class="dropdown-item">Job Category</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.php" class="dropdown-item active">404</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Register</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Registor start  -->
        
        <form class="login mt-5 mx-5" method="post" name="register" action="register.php" enctype="multipart/form-data">
            <h1 class="text-center">Register</h1>
            <div class="form-group">
            <label for="dept_id">Department ID*</label>
            <input type="text" class="form-control" id="dept_id" name="dept_id" placeholder="Enter your department ID" required>
            <br>
            </div>
            <div class="form-group">
            <label for="department">Department*</label>
            <input type="text" class="form-control" id="department" name="department" placeholder="Enter your department" required>
            <br>
            </div>
            <div class="form-group">
            <label for="sname">Name*</label>
            <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter your name" required>
            <br>
            </div>
            <div class="form-group">
            <label for="semail">Email*</label>
            <input type="email" class="form-control" id="semail" name="semail" placeholder="Enter your email" required>
            <br>
            </div>
            <div class="form-group">
            <label for="spassword">Password*</label>
            <input type="password" class="form-control" id="spassword" name="spassword" placeholder="Enter your password" required>
            <br>
            </div>
            <div class="form-group">
            <label for="sdob">Date of Birth*</label>
            <input type="date" class="form-control" id="sdob" name="sdob" required>
            <br>
            </div>
            <div class="form-group">
            <label for="sphone">Phone*</label>
            <input type="text" class="form-control" id="sphone" name="sphone" placeholder="Enter your phone number" required>
            <br>
            </div>
            <div class="form-group">
            <label for="sgender">Gender*</label>
            <select class="form-control" id="sgender" name="sgender" required>
            <option value="" disabled selected>Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
            </select>
            <br>
            </div>
            <div class="form-group">
            <label for="slanguage">Language*</label>
            <input type="text" class="form-control" id="slanguage" name="slanguage" placeholder="Enter your language" required>
            <br>
            </div>
            <div class="form-group">
            <label for="scollegeName">College Name*</label>
            <input type="text" class="form-control" id="scollegeName" name="scollegeName" placeholder="Enter your College Name " required>
            <br>
            </div>
            <div class="form-group">
            <label for="sclass">Class*</label>
            <select class="form-control" id="sclass" name="sclass" required>
            <option value="" disabled selected>Select your class</option>
            <option value="class_10">Class 10</option>
            <option value="class_12">Class 12</option>
            </select>
            <br>
            </div>
            <div class="form-group">
            <label for="scgpa">Average CGPA*</label>
            <input type="text" class="form-control" id="scgpa" name="scgpa" placeholder="Enter your CGPA" required>
            <br>
            </div>
            <div class="form-group">
            <label for="saddress">Address*</label>
            <input type="text" class="form-control" id="saddress" name="saddress" placeholder="Enter your address" required>
            <br>
            </div>
            <div class="form-group">
            <label for="scv">CV*</label>
            <input type="file" class="form-control" id="scv" name="scv" accept=".pdf,.doc,.docx" required>
            <small id="cvHelp" class="form-text text-muted">Accepted formats: .pdf, .doc, .docx</small>
            <br>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <br><br>
            <p class="text-center">Already a member? <a href="login.php">Login</a></p>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require("database.php");

            $dept_id = $_POST['dept_id'];
            $department = $_POST['department'];
            $sname = $_POST['sname'];
            $semail = $_POST['semail'];
            $spassword = $_POST['spassword'];
            $sdob = $_POST['sdob'];
            $sphone = $_POST['sphone'];
            $sgender = $_POST['sgender'];
            $slanguage = $_POST['slanguage'];
            $scollegeName = $_POST['scollegeName'];
            $sclass = $_POST['sclass'];
            $scgpa = $_POST['scgpa'];
            $saddress = $_POST['saddress'];

            // File upload handling
            $scv = $_FILES['scv'];
            $scv_name = $scv['name'];
            $scv_tmp_name = $scv['tmp_name'];
            $scv_folder = "uploads/" . $scv_name;

            if (move_uploaded_file($scv_tmp_name, $scv_folder)) {
            $query = "INSERT INTO student (dept_id, department, sname, semail, spassword, sdob, sphone, sgender, slanguage,scollegeName, sclass, scgpa, saddress, scv) 
                  VALUES ('$dept_id', '$department', '$sname', '$semail', '$spassword', '$sdob', '$sphone', '$sgender', '$slanguage','$scollegeName', '$sclass', '$scgpa', '$saddress', '$scv_folder')";

            if (mysqli_query($conn, $query)) {
                echo "<script>a lert('Registration successful!');window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
            } else {
            echo "<script>alert('Failed to upload CV.');</script>";
            }
        }
        ?>
        <!-- Registor End -->

        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="about.php">About Us</a>
                        <a class="btn btn-link text-white-50" href="contact.php">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="index.php">Our Services</a>
                        <a class="btn btn-link text-white-50" href="index.php">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="index.php">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="about.php">About Us</a>
                        <a class="btn btn-link text-white-50" href="contact.php">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="index.php">Our Services</a>
                        <a class="btn btn-link text-white-50" href="index.php">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="index.php">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Address: 74/27, MULAJORH ROAD PRITINAGAR, Jagatdal, North 24 Parganas, West Bengal, 743125</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8274856555</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>anubhob40@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/anubhobpaul/?utm_source=qr&igsh=MndzcWVudWwxbDZs#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Sonu.M.20?mibextid=Ta7yifwSUDhrfWSo"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@Lyrically_Riddhika"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/anubhob-paul-676799321?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>