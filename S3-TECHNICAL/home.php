<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>

    <title>Home</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="welcome">

    <h1>Welcome!</h1>

    <h2><?php echo htmlspecialchars($username); ?></h2>

    <p>You have successfully logged in.</p>

    <br>

    <a href="logout.php" class="logout">Logout</a>

</div>

</body>

</html>