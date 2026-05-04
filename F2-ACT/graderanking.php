<!DOCTYPE html>
<html>
<head>
<title>Grade Ranking</title>

<style>
    body {
        font-family: "Times New Roman", Times, serif; 
        text-align: center;
        background-color: #e0f7fa;
    }
    .card {
        background: white;
        padding: 20px;
        margin: 50px auto;
        width: 300px;
        border-radius: 10px;
    }
</style>
</head>

<body>

<div class="card">
<h2>Grade Ranking</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Grade: <input type="number" name="grade" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['grade'])) {
    $name = $_POST['name'];
    $grade = $_POST['grade'];

    if ($grade >= 93) $rank = "A";
    elseif ($grade >= 90) $rank = "A-";
    elseif ($grade >= 87) $rank = "B+";
    elseif ($grade >= 83) $rank = "B";
    elseif ($grade >= 80) $rank = "B-";
    elseif ($grade >= 77) $rank = "C+";
    elseif ($grade >= 73) $rank = "C";
    elseif ($grade >= 70) $rank = "C-";
    elseif ($grade >= 67) $rank = "D+";
    elseif ($grade >= 63) $rank = "D";
    elseif ($grade >= 60) $rank = "D-";
    else $rank = "F";

    echo "<h3>Name: $name</h3>";
    echo "<h3>Grade: $grade</h3>";
    echo "<h3>Rank: $rank</h3>";
    echo "<img src='Image.jpg' alt='Picture' width='120'>";
}
?>
</div>

</body>
</html>
