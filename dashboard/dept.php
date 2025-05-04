<?php
require('database.php'); // Ensure you have a database connection file

require('header.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">All Department List</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Department List </li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Department List
                            </div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Department Id</th>
                                        <th>Department Name</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Placement Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require('database.php'); // Ensure you have a database connection file

                                    $query = "SELECT id, dept_id, dept_name, sname, semail, placement FROM department";
                                    $result = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<tr>';
                                            echo '<td>' . htmlspecialchars($row['dept_id']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['dept_name']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['sname']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['semail']) . '</td>';
                                            echo '<td>' . htmlspecialchars($row['placement']) . '</td>';
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