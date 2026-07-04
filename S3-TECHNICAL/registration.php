<?php

$result = "";

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if($password != $confirm){

        $result = "<p class='error'>Password and Confirm Password are not the same!</p>";

    }else{

        $result = "
        <h2>Registration Information</h2>

        <p><strong>Full Name:</strong> $firstname $middlename $lastname</p>

        <p><strong>Username:</strong> $username</p>

        <p><strong>Password:</strong> $password</p>

        <p><strong>Birthday:</strong> $birthday</p>

        <p><strong>Email:</strong> $email</p>

        <p><strong>Contact Number:</strong> $contact</p>

        ";

    }

}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Registration Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Registration Form</h2>

<form method="POST">

<label>First Name</label>
<input type="text" name="firstname" required>

<label>Middle Name</label>
<input type="text" name="middlename" required>

<label>Last Name</label>
<input type="text" name="lastname" required>

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Confirm Password</label>
<input type="password" name="confirm" required>

<label>Birthday</label>
<input type="date" name="birthday" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Contact Number</label>
<input type="text" name="contact" required>

<input type="submit" name="submit" value="Register">

</form>

</div>

<div class="result">

<?php

echo $result;

?>

</div>

</body>

</html>