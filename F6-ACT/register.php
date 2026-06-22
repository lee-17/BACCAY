<?php

$conn = new mysqli("localhost", "root", "", "dogdb");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs(name, breed, age, address, color, height, weight)
            VALUES('$name','$breed','$age','$address','$color','$height','$weight')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Dog Record Saved Successfully!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Dog Registration Form</h2>

    <form method="POST">

        <input type="text" name="name" placeholder="Dog Name" required>

        <input type="text" name="breed" placeholder="Breed" required>

        <input type="number" name="age" placeholder="Age" required>

        <input type="text" name="address" placeholder="Address" required>

        <input type="text" name="color" placeholder="Color" required>

        <input type="number" step="0.01" name="height" placeholder="Height (cm)" required>

        <input type="number" step="0.01" name="weight" placeholder="Weight (kg)" required>

        <button type="submit" name="save">Save Dog</button>

    </form>

    <div class="menu">
        <a href="view.php">View Dog Records</a>
    </div>

</div>

</body>
</html>