<!DOCTYPE html>
<html>
<head>
<title>Personal Information - GET</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Personal Information</h1>
<form method="GET">
<label>First Name</label>
<input type="text" name="firstname" required>
<label>Middle Name</label>
<input type="text" name="middlename" required>
<label>Last Name</label>
<input type="text" name="lastname" required>
<label>Date of Birth</label>
<input type="date" name="dob" required>
<label>Address</label>
<textarea name="address" required></textarea>
<button type="submit">Submit</button>
</form>
<?php
   if(isset($_GET['firstname']))
   {
       echo "<div class='result'>";
       echo "<h2>Submitted Information</h2>";
       echo "<p><b>First Name:</b> ".$_GET['firstname']."</p>";
       echo "<p><b>Middle Name:</b> ".$_GET['middlename']."</p>";
       echo "<p><b>Last Name:</b> ".$_GET['lastname']."</p>";
       echo "<p><b>Date of Birth:</b> ".$_GET['dob']."</p>";
       echo "<p><b>Address:</b> ".$_GET['address']."</p>";
       echo "</div>";
   }
   ?>
</div>
</body>
</html>