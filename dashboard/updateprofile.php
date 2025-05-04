<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Update Profile</h2>
                    </div>
                    <div class="card-body">
                        <?php if (isset($success_message)) echo "<div class='alert alert-success'>$success_message</div>"; ?>
                        <?php if (isset($error_message)) echo "<div class='alert alert-danger'>$error_message</div>"; ?>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="sname" class="form-label">Name:</label>
                                    <input type="text" id="sname" name="sname" class="form-control" value="<?php echo htmlspecialchars($student['sname']); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="semail" class="form-label">Email:</label>
                                    <input type="email" id="semail" name="semail" class="form-control" value="<?php echo htmlspecialchars($student['semail']); ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="spassword" class="form-label">Password:</label>
                                    <input type="password" id="spassword" name="spassword" class="form-control" value="<?php echo htmlspecialchars($student['spassword']); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="sdob" class="form-label">Date of Birth:</label>
                                    <input type="date" id="sdob" name="sdob" class="form-control" value="<?php echo htmlspecialchars($student['sdob']); ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="sphone" class="form-label">Phone:</label>
                                    <input type="text" id="sphone" name="sphone" class="form-control" value="<?php echo htmlspecialchars($student['sphone']); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="sgender" class="form-label">Gender:</label>
                                    <select id="sgender" name="sgender" class="form-control" required>
                                        <option value="Male" <?php echo ($student['sgender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                        <option value="Female" <?php echo ($student['sgender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                        <option value="Other" <?php echo ($student['sgender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="slanguage" class="form-label">Language:</label>
                                <input type="text" id="slanguage" name="slanguage" class="form-control" value="<?php echo htmlspecialchars($student['slanguage']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="scollegename" class="form-label">College Name:</label>
                                <input type="text" id="scollegename" name="scollegename" class="form-control" value="<?php echo htmlspecialchars($student['scollegename']); ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="sclass" class="form-label">Class:</label>
                                    <input type="text" id="sclass" name="sclass" class="form-control" value="<?php echo htmlspecialchars($student['sclass']); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="scgpa" class="form-label">CGPA:</label>
                                    <input type="number" step="0.01" id="scgpa" name="scgpa" class="form-control" value="<?php echo htmlspecialchars($student['scgpa']); ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="saddress" class="form-label">Address:</label>
                                <textarea id="saddress" name="saddress" class="form-control" rows="3" required><?php echo htmlspecialchars($student['saddress']); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="scv" class="form-label">CV (PDF):</label>
                                <input type="file" id="scv" name="scv" class="form-control" accept="application/pdf" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
