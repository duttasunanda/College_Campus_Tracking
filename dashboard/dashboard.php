<?php 
    session_start(); // Start the session
    require('database.php');
 ?>
<?php require('header.php') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4 shadow-lg">
                                    <div class="card-header text-center font-weight-bold">
                                        <i class="fas fa-briefcase"></i> Current Job Companies
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        require('database.php'); // Ensure you have a database connection file

                                        $query = "SELECT company_name, last_date FROM job"; // Replace 'job' with your actual table name
                                        $result = mysqli_query($conn, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            echo '<table class="table table-bordered table-hover text-white">';
                                            echo '<thead class="thead-light">';
                                            echo '<tr>';
                                            echo '<th>Company Name</th>';
                                            echo '<th>Last Date to Apply</th>';
                                            echo '</tr>';
                                            echo '</thead>';
                                            echo '<tbody>';
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>' . htmlspecialchars($row['company_name']) . '</td>';
                                                echo '<td>' . htmlspecialchars($row['last_date']) . '</td>';
                                                echo '</tr>';
                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        } else {
                                            echo '<p class="text-white text-center"><i class="fas fa-info-circle"></i> No jobs available</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link font-weight-bold" href="category.php">
                                            View Details <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4 shadow-lg">
                                    <div class="card-header text-center font-weight-bold">
                                        <i class="fas fa-user-graduate"></i> Total Students
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        require('database.php'); // Ensure you have a database connection file

                                        $query = "SELECT COUNT(*) AS total_students FROM student"; // Replace 'student' with your actual table name
                                        $result = mysqli_query($conn, $query);

                                        if ($result) {
                                            $row = mysqli_fetch_assoc($result);
                                            echo '<p class="text-white text-center display-4">' . htmlspecialchars($row['total_students']) . '</p>';
                                        } else {
                                            echo '<p class="text-white text-center"><i class="fas fa-info-circle"></i> Unable to fetch data</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link font-weight-bold" href="student.php">
                                            View Details <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php require('footer.php') ?>
                