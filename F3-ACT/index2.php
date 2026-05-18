<!DOCTYPE html>
<html>
<head>
<title>Activity 3 - User Defined Function</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<h2>User Defined Function</h2>
<?php
function calculate($a, $b, $c)
{
   $sum = $a + $b + $c;
   $difference = $a - $b - $c;
   $product = $a * $b * $c;
   $quotient = $a / $b / $c;
   echo "<table>";
   echo "<tr>";
   echo "<th colspan='2'>Numbers: $a, $b, $c</th>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Sum</td>";
   echo "<td>$sum</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Difference</td>";
   echo "<td>$difference</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Product</td>";
   echo "<td>$product</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Quotient</td>";
   echo "<td>$quotient</td>";
   echo "</tr>";
   echo "</table>";
}
calculate(60, 5, 2);
?>
</body>
</html>