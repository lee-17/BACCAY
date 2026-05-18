<!DOCTYPE html>
<html>
<head>
<title>Student Information in GOSE</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Student Information in GOSE</h2>
<?php
$members = array(
array(
  "name"=>"S.Coups",
  "image"=>"images/scoups.jpg",
  "age"=>30,
  "birthday"=>"August 8, 1995",
  "contact"=>"09170000001"
),
array(
  "name"=>"Jeonghan",
  "image"=>"images/jeonghan.jpg",
  "age"=>30,
  "birthday"=>"October 4, 1995",
  "contact"=>"09170000002"
),
array(
  "name"=>"Joshua",
  "image"=>"images/joshua.jpg",
  "age"=>30,
  "birthday"=>"December 30, 1995",
  "contact"=>"09170000003"
),
array(
  "name"=>"Jun",
  "image"=>"images/jun.jpg",
  "age"=>29,
  "birthday"=>"June 10, 1996",
  "contact"=>"09170000004"
),
array(
  "name"=>"Hoshi",
  "image"=>"images/hoshi.jpg",
  "age"=>29,
  "birthday"=>"June 15, 1996",
  "contact"=>"09170000005"
),
array(
  "name"=>"Wonwoo",
  "image"=>"images/wonwoo.jpg",
  "age"=>29,
  "birthday"=>"July 17, 1996",
  "contact"=>"09170000006"
),
array(
  "name"=>"Woozi",
  "image"=>"images/woozi.jpg",
  "age"=>29,
  "birthday"=>"November 22, 1996",
  "contact"=>"09170000007"
),
array(
  "name"=>"DK",
  "image"=>"images/dk.jpg",
  "age"=>28,
  "birthday"=>"February 18, 1997",
  "contact"=>"09170000008"
),
array(
  "name"=>"Mingyu",
  "image"=>"images/mingyu.jpg",
  "age"=>28,
  "birthday"=>"April 6, 1997",
  "contact"=>"09170000009"
),
array(
  "name"=>"The8",
  "image"=>"images/the8.jpg",
  "age"=>28,
  "birthday"=>"November 7, 1997",
  "contact"=>"09170000010"
)
);
// Sort alphabetically by name
usort($members, function($a, $b){
  return strcmp($a['name'], $b['name']);
});
echo "<table>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Name</th>";
echo "<th>Image</th>";
echo "<th>Age</th>";
echo "<th>Birthday</th>";
echo "<th>Contact Number</th>";
echo "</tr>";
$no = 1;
foreach($members as $member){
  echo "<tr>";
  echo "<td>".$no."</td>";
  echo "<td>".$member['name']."</td>";
  echo "<td><img src='".$member['image']."'></td>";
  echo "<td>".$member['age']."</td>";
  echo "<td>".$member['birthday']."</td>";
  echo "<td>".$member['contact']."</td>";
  echo "</tr>";
  $no++;
}
echo "</table>";
?>
</body>
</html>