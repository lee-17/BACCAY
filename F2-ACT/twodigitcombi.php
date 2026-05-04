<!DOCTYPE html>
<html>
<head>
    <title>Two Digit Combinations</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>

<body>

<h3>Two Digit Combinations:</h3>

<?php
for ($i = 0; $i <= 99; $i++) {
    echo str_pad($i, 2, "0", STR_PAD_LEFT) . ", ";
}
?>

</body>
</html>