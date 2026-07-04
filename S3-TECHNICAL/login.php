<?php
session_start();

// Static username and password
$validUsername = "Lee123";
$validPassword = "12345";

$message = "";

// Load cookies if they exist
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $validUsername && $password == $validPassword){

        $_SESSION['username'] = $username;

        // Remember Me
        if(isset($_POST['remember'])){
            setcookie("username", $username, time() + (86400 * 7), "/");
            setcookie("password", $password, time() + (86400 * 7), "/");
        }else{
            setcookie("username", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");
        }

        header("Location: home.php");
        exit();

    }else{

        $message = "<p class='error'>Invalid Username or Password!</p>";

    }

}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Login Form</h2>

<?php echo $message; ?>

<form method="POST">

<label>Username</label>
<input
type="text"
name="username"
value="<?php echo htmlspecialchars($username); ?>"
required>

<label>Password</label>
<input
type="password"
name="password"
value="<?php echo htmlspecialchars($password); ?>"
required>

<div class="checkbox">
<input type="checkbox" name="remember"> Remember Me
</div>

<input type="submit" name="login" value="Login">

</form>

</div>

</body>
</html>