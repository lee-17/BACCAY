<?php
$name = "Leanne Baccay";
$title = "Web Developer";
$phone = "+63 929-746-7026";
$email = "lebaccay@fit.edu.ph";
$location = "Quezon City, Philippines";
$profile = "A motivated web developer with experience in building responsive and user-friendly websites. Passionate about improving skills and creating efficient solutions.";
$skills_personal = ["Time Management", "Communication", "Critical Thinking", "Teamwork"];
$skills_professional = ["HTML", "CSS", "JavaScript", "Python", "C++"];
$education = "BS Information Technology - FEU Institute of Technology";
$experience = [
  [
      "company" => "Freelance",
      "date" => "2023 - Present",
      "role" => "Web Developer",
      "details" => [
          "Built responsive websites using HTML, CSS, and JavaScript",
          "Improved user interface and experience",
          "Maintained and updated web content"
      ]
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resume</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<!-- HEADER -->
<div class="header">
<div class="name">
<h1><?= strtoupper($name); ?></h1>
<p><?= $title; ?></p>
</div>
<div class="contact">
<p><?= $phone; ?></p>
<p><?= $email; ?></p>
<p><?= $location; ?></p>
</div>
</div>
<!-- PROFILE -->
<div class="section-title">PROFILE</div>
<p class="profile"><?= $profile; ?></p>
<!-- EXPERIENCE -->
<div class="section-title">EMPLOYMENT HISTORY</div>
<?php foreach($experience as $job): ?>
<div class="job">
<div class="job-header">
<span><?= $job["company"]; ?></span>
<span><?= $job["date"]; ?></span>
</div>
<p><strong><?= $job["role"]; ?></strong></p>
<ul>
<?php foreach($job["details"] as $d): ?>
<li><?= $d; ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php endforeach; ?>
<!-- EDUCATION -->
<div class="section-title">EDUCATION</div>
<p class="education"><?= $education; ?></p>
<!-- SKILLS -->
<div class="section-title">SKILLS</div>
<div class="skills">
<div>
<strong>Personal</strong>
<ul>
<?php foreach($skills_personal as $s): ?>
<li><?= $s; ?></li>
<?php endforeach; ?>
</ul>
</div>
<div>
<strong>Professional</strong>
<ul>
<?php foreach($skills_professional as $s): ?>
<li><?= $s; ?></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div>
</body>
</html>