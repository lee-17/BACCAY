<?php

$conn = new mysqli("localhost", "root", "", "dogdb");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Dog Information Records</h2>

<table>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Address</th>
        <th>Color</th>
        <th>Height</th>
        <th>Weight</th>
    </tr>

    <?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['breed']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['color']."</td>
                    <td>".$row['height']."</td>
                    <td>".$row['weight']."</td>
                  </tr>";
        }

    } else {
        echo "<tr><td colspan='8'>No Records Found</td></tr>";
    }

    ?>

</table>

<div class="back">
    <a href="register.php">Back to Registration</a>
</div>

</body>
</html>