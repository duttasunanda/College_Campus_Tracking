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
                            </div>
                        </div>
                    </div>
                </main>
                <?php require('footer.php') ?>