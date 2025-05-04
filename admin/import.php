<?php
require 'database.php';

// Handle uploaded CSV
if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] == 0) {
    $fileTmp = $_FILES['csv_file']['tmp_name'];

    if (($handle = fopen($fileTmp, 'r')) !== FALSE) {
        fgetcsv($handle); // skip header row

        while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
            // Example: assuming CSV has columns: student_name, roll_no, class
            $dept_id = $conn->real_escape_string($data[0]);
            $dept_name = $conn->real_escape_string($data[1]);
            $sname = $conn->real_escape_string($data[2]);
            $semail = $conn->real_escape_string($data[3]);
            $spassword = $conn->real_escape_string($data[4]);
            $scollegename = $conn->real_escape_string($data[5]);

            $sql1 = "INSERT INTO student (dept_id, dept_name, sname, semail, spassword, scollegename) 
                    VALUES ('$dept_id', '$dept_name', '$sname', '$semail', '$spassword', '$scollegename')";
            $sql2 = "INSERT INTO department (dept_id, dept_name, sname, semail)
                    VALUES ('$dept_id', '$dept_name', '$sname', '$semail')";
            $conn->query($sql1);
            $conn->query($sql2);
        }

        fclose($handle);
        echo "Students imported successfully!";
    } else {
        echo "Failed to open uploaded file.";
    }
} else {
    echo "Please upload a CSV file.";
}
require 'mail.php';
if (isset($sname) && isset($semail) && isset($spassword) && isset($scollegename)) {
    sendStudentMail($sname, $semail, $spassword, $scollegename);
}
$conn->close();

// Redirect to addstudent.php after successful import
header("Location: addstudent.php");
exit();
?>
