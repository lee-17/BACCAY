<!DOCTYPE html>
<html>
<head>
    <title>My Resume</title>
    <link rel="stylesheet" href="resume.css">
</head>
<body>

<?php
require("header.php");

include("career.php");
include("personal.php");
include("education.php");
include("skills.php");
include("affiliation.php");
include("work.php");

require("footer.php");
?>

</body>
</html>