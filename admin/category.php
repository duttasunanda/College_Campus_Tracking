<?php
require('database.php'); // Ensure you have a database connection file

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_query = "DELETE FROM job WHERE id = $delete_id";
    mysqli_query($conn, $delete_query);
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page
    exit();
}
require('header.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">All Joblist</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Joblist</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="addCategory.php" class="btn btn-info">Add New Joblist </a>
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
                                        <th>Company Name</th>
                                        <th>Details</th>
                                        <th>Responsibility</th>
                                        <th>Qualification</th>
                                        <th>Last Date</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require('database.php'); // Ensure you have a database connection file

                                    // Handle delete request
                                    if (isset($_GET['delete_id'])) {
                                        $delete_id = intval($_GET['delete_id']);
                                        $delete_query = "DELETE FROM job WHERE id = $delete_id";
                                        mysqli_query($conn, $delete_query);
                                        header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page
                                        exit();
                                    }

                                    $query = "SELECT id, company_name, details, responsibility, qualification, last_date FROM job";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<tr>';
                                            echo '<td>' . htmlspecialchars($row['company_name']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['details']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['responsibility']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['qualification']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['last_date']) . '</td>';
                                            echo '<td><a href="category.php?delete_id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this job?\')">Delete</a></td>';
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<tr><td colspan="5">No job listings found.</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require('footer.php') ?>