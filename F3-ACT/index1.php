<!DOCTYPE html>
<html>
<head>
<title>Number 2</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<h2>Array Operations</h2>
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = array_sum($numbers);
// Difference
$difference = $numbers[0];
for($i = 1; $i < count($numbers); $i++){
   $difference -= $numbers[$i];
}
$product = 1;
foreach($numbers as $num){
   $product *= $num;
}
$quotient = $numbers[0];
for($i = 1; $i < count($numbers); $i++){
   if($numbers[$i] != 0){
       $quotient /= $numbers[$i];
   }
}

echo "<table>";
echo "<tr>";
echo "<th colspan='2'>Array list: " . implode(", ", $numbers) . "</th>";
echo "</tr>";
echo "<tr>";
echo "<td>Addition</td>";
echo "<td>$sum</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Subtraction</td>";
echo "<td>$difference</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Multiplication</td>";
echo "<td>$product</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Division</td>";
echo "<td>$quotient</td>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>