<?php
require('database.php'); // Ensure you have a database connection file

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
                                        <th>Apply</th> <!-- New column for the Apply button -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require('database.php'); // Ensure you have a database connection file

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
                                            echo '<td><a href="apply.php?job_id=' . htmlspecialchars($row['id']) . '" class="btn btn-primary btn-sm">Apply</a></td>'; // Apply button
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<tr><td colspan="6">No job listings found.</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require('footer.php') ?>