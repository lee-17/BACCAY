<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Colors</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1> Colors</h1>
<div class="result">
<p style="color: <?php echo $_SESSION['color1']; ?>;">
<?php echo $_SESSION['color1']; ?>
</p>
<p style="color: <?php echo $_SESSION['color2']; ?>;">
<?php echo $_SESSION['color2']; ?>
</p>
<p style="color: <?php echo $_SESSION['color3']; ?>;">
<?php echo $_SESSION['color3']; ?>
</p>
<p style="color: <?php echo $_SESSION['color4']; ?>;">
<?php echo $_SESSION['color4']; ?>
</p>
<p style="color: <?php echo $_SESSION['color5']; ?>;">
<?php echo $_SESSION['color5']; ?>
</p>
</div>
</div>
</body>
</html>