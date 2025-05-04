<?php require('header.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Add New Job</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                            <li class="breadcrumb-item active">Add New Job</li>
                        </ol>

                        <div class="card mb-4 border-0">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $company_name = $_POST['company_name'];
                                $details = $_POST['details'];
                                $responsibility = $_POST['responsibility'];
                                $qualification = $_POST['qualification'];
                                $last_date = $_POST['last_date'];

                                // Database connection
                                include('database.php'); // Ensure you have a database connection file

                                $sql = "INSERT INTO job (company_name, details, responsibility, qualification, last_date) VALUES ('$company_name', '$details', '$responsibility','$qualification', '$last_date')";
                                if ($conn->query($sql) === TRUE) {
                                    echo "<div class='alert alert-success'>New job added successfully</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                                }

                                $conn->close();
                            }
                            ?>

                            <form method="POST">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="company_name" name="company_name" type="text" placeholder="Enter company name" required />
                                            <label for="company_name">Company Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="details" name="details" placeholder="Enter job details" required></textarea>
                                            <label for="details">Job Details</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="responsibility" name="responsibility" placeholder="Enter job responsibility" required></textarea>
                                            <label for="responsibility">Job Responsibility</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="qualification" name="qualification" placeholder="Enter job qualification" required></textarea>
                                            <label for="qualification">Qualification</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="last_date" name="last_date" type="date" required />
                                            <label for="last_date">Last Date</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-3">
                                    <div class="col-6">
                                        <div class="d-grid">
                                            <input type="submit" name="ok" value="Add Job" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Details</th>
                                        <th>Responsibility</th>
                                        <th>Qualification</th>
                                        <th>Last Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Fetch and display data from the database
                                   include('database.php'); // Ensure you have a database connection file
                                    $sql = "SELECT company_name, details, responsibility, qualification, last_date FROM job";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                    <td>{$row['company_name']}</td>
                                                    <td>{$row['details']}</td>
                                                    <td>{$row['responsibility']}</td>
                                                    <td>{$row['qualification']}</td>
                                                    <td>{$row['last_date']}</td>
                                                  </tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan=5'>No jobs found</td></tr>";
                                    }

                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                <?php require('footer.php') ?>