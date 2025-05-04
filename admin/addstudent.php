<?php 
include('header.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Add New Job</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="student.php">Student</a></li>
                            <li class="breadcrumb-item active">Add New Student</li>
                        </ol>

                        <div class="card mb-4 border-0">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $dept_id = $_POST['dept_id'];
                                $dept_name = $_POST['dept_name'];
                                $sname = $_POST['sname'];
                                $semail = $_POST['semail'];
                                $spassword = $_POST['spassword'];
                                $scollegename = $_POST['scollegename'];
                                
                                // Database connection
                                include('database.php'); // Ensure you have a database connection file

                                $sql1 = "INSERT INTO student (dept_id, dept_name, sname, semail, spassword, scollegename) VALUES ('$dept_id', '$dept_name', '$sname','$semail', '$spassword', '$scollegename')";
                                $sql2 = "INSERT INTO department (dept_id, dept_name, sname, semail) VALUES ('$dept_id', '$dept_name', '$sname','$semail')";

                                if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
                                    echo "<div class='alert alert-success'>Student added successfully.</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                                }
                                require 'mail.php';
                                sendStudentMail($sname, $semail, $spassword, $scollegename);
                                $conn->close();
                            }
                            ?>

                            <form method="POST">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="dept_id" name="dept_id" type="text" placeholder="Enter Department Id" required />
                                            <label for="dept_id">Dept Id</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="dept_name" name="dept_name" placeholder="Enter Department Name" required></textarea>
                                            <label for="dept_name">Department Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="sname" name="sname" placeholder="Enter Student Name" required></textarea>
                                            <label for="sname">Student Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="semail" name="semail" placeholder="Enter Student Email" required></textarea>
                                            <label for="semail">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="spassword" name="spassword" placeholder="Enter Password" required></textarea>
                                            <label for="spassword">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" id="scollegename" name="scollegename" placeholder="Enter College Name" required></textarea>
                                            <label for="scollegename">College Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-3">
                                    <div class="col-6">
                                        <div class="d-grid">
                                            <input type="submit" name="ok" value="Add Student" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <h3>UPLOAD STUDENT CSV FILE</h3>
                            <form action="import.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="csv_file" accept=".csv" required>
                                <br><br>
                                <input type="submit" name="submit" value="Upload and Import">
                            </form>

                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>Department ID</th>
                                        <th>Department Name</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Password</th>   
                                        <th>College Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Fetch and display data from the database
                                   include('database.php'); // Ensure you have a database connection file
                                    $sql = "SELECT dept_id, dept_name, sname, semail, spassword, scollegename FROM student";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                    <td>{$row['dept_id']}</td>
                                                    <td>{$row['dept_name']}</td>
                                                    <td>{$row['sname']}</td>
                                                    <td>{$row['semail']}</td>
                                                    <td>{$row['spassword']}</td>
                                                    <td>{$row['scollegename']}</td>
                                                  </tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan=6'>No student found</td></tr>";
                                    }

                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                <?php require('footer.php') ?>
