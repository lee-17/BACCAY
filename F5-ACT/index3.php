<?php
session_start();
if(isset($_POST['send'])){
   $_SESSION['color1']=$_POST['color1'];
   $_SESSION['color2']=$_POST['color2'];
   $_SESSION['color3']=$_POST['color3'];
   $_SESSION['color4']=$_POST['color4'];
   $_SESSION['color5']=$_POST['color5'];
   header("Location: index4.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Colors</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1> Colors</h1>
<form method="POST">
<label>Color 1</label>
<input type="text" name="color1">
<label>Color 2</label>
<input type="text" name="color2">
<label>Color 3</label>
<input type="text" name="color3">
<label>Color 4</label>
<input type="text" name="color4">
<label>Color 5</label>
<input type="text" name="color5">
<button type="submit" name="send">Send Colors</button>
</form>
</div>
</body>
</html>