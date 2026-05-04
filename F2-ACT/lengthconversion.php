<!DOCTYPE html>
<html>
<head>
<title>Length Converter</title>

<style>
    body {
        font-family: "Times New Roman", Times, serif; 
        text-align: center;
        background-color: #f4f4f4;
    }
    .box {
        background: white;
        padding: 20px;
        margin: 50px auto;
        width: 300px;
        border-radius: 10px;
    }
</style>
</head>

<body>

<div class="box">
<h2>Length Converter</h2>

<form method="post">
    Meters: <input type="number" name="meter" required><br><br>
    <input type="submit" value="Convert">
</form>

<?php
if (isset($_POST['meter'])) {
    $meter = $_POST['meter'];
    $cm = $meter * 100;
    $km = $meter / 1000;
    $inch = $meter * 39.37;

    echo "<p>$meter meters = $cm centimeters</p>";
    echo "<p>$meter meters = $km kilometers</p>";
