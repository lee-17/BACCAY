<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">

    <h2>Student Registration Form</h2>

    <form method="POST">

        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="Enter first name" required>
        </div>

        <div class="form-group">
            <label>Middle Name</label>
            <input type="text" name="mname" placeholder="Enter middle name">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Enter last name" required>
        </div>

        <div class="row">

            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" placeholder="Enter age" required>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <select name="gender">
                    <option value="">Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

        </div>

        <div class="form-group">
            <label>Course</label>
            <input type="text" name="course" placeholder="Enter course" required>
        </div>

        <button type="submit" name="submit" class="btn">
            Register Student
        </button>

    </form>

<?php

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $fullname = strtoupper($fname . " " . $mname . " " . $lname);

    echo "
    <div class='output'>
        <h3>Registered Student Information</h3>

        <p><strong>Full Name:</strong> $fullname</p>
        <p><strong>Age:</strong> " . number_format($age) . "</p>
        <p><strong>Gender:</strong> " . ucfirst($gender) . "</p>
        <p><strong>Course:</strong> " . strtoupper($course) . "</p>
    </div>
    ";
}

?>

</div>

</body>
</html>