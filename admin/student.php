<?php
require('database.php'); // Ensure you have a database connection file
// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_query = "DELETE FROM student WHERE id = $delete_id";
    mysqli_query($conn, $delete_query);
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page
    exit();
}
require('header.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">All Student list</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Student list</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="addstudent.php" class="btn btn-info">Add New Student </a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Joblist
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Department Id</th>
                                        <th>Department Name</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>College Name</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require('database.php'); // Ensure you have a database connection file

                                    // Handle delete request
                                    if (isset($_GET['delete_id'])) {
                                        $delete_id = intval($_GET['delete_id']);
                                        $delete_query = "DELETE FROM student WHERE id = $delete_id";
                                        mysqli_query($conn, $delete_query);
                                        header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page
                                        exit();
                                    }

                                    $query = "SELECT id, dept_id, dept_name, sname, semail, spassword, scollegename FROM student";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<tr>';
                                            echo '<td>' . htmlspecialchars($row['dept_id']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['dept_name']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['sname']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['semail']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['spassword']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['scollegename']) . '</td>';
                                            echo '<td><a href="student.php?delete_id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this student name?\')">Delete</a></td>';
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<tr><td colspan="6">No student listings found.</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require('footer.php') ?>