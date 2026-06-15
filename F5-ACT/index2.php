<?php
setcookie("firstname", "Aemie", time() + 10);
setcookie("middlename", "R.", time() + 20);
setcookie("lastname", "Roswell", time() + 30);
?>
<!DOCTYPE html>
<html>
<head>
<title>Cookie </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Cookie</h1>
<div class="result">
<p>
<strong>First Name:</strong>
<?php
           if(isset($_COOKIE['firstname']))
               echo $_COOKIE['firstname'];
           else
               echo "Expired";
           ?>
</p>
<p>
<strong>Middle Name:</strong>
<?php
           if(isset($_COOKIE['middlename']))
               echo $_COOKIE['middlename'];
           else
               echo "Expired";
           ?>
</p>
<p>
<strong>Last Name:</strong>
<?php
           if(isset($_COOKIE['lastname']))
               echo $_COOKIE['lastname'];
           else
               echo "Expired";
           ?>
</p>
<p><b>Refresh the page after 10, 20, and 30 seconds to see the cookies expire.</b></p>
</div>
</div>
</body>
</html>