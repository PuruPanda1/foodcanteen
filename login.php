<?php
require_once "components/navbar.php";
if(isset($_SESSION['email'])){
    header("location:index.php");
    exit;
}
require_once "config.php";

$email = $password = "";
$email_error = $password_error = "";


if($_SERVER['REQUEST_METHOD']=='POST')
{
    // Checking for empty email id and password
    if(empty(trim($_POST['email'])) && empty(trim($_POST['password'])))
    {
        if(empty(trim($_POST['email'])))
        {
            $email_error = "Email cannot be empty";
        }
        else
        {
            $password_error = "Password cannot be empty";
        }
    }
    else
    {
        $email = trim($_POST["email"]);
        $sql = "SELECT * FROM `users` WHERE email='$email';";
        $result = mysqli_query($conn,$sql);
        // checking if the email id exits or not in the system
        if(mysqli_num_rows($result) < 1)
        {
            $email_error = "User not found, kindly register yourself";
        }
        // if user is present check for the password in else block
        else{
            $row = mysqli_fetch_assoc($result);
            if($_POST['password']!=$row['password'])
            {
                $password_error = "Wrong Password! Try again";
            }
            else
            {
                // now we can log in the user to our system
                $_SESSION['email']=$email;
                $_SESSION['username']=$row['username'];
                $_SESSION['loggedin']=true;
                header("location:index.php");
            }
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodOrderWeb</title>
    <!-- linking css file here-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginform.css">
</head>
<body>
<!-- Login Form -->
<div class="loginForm">
    <h1>Log In</h1>
    <h5 class="loginText">Enter your details here for login</h5>
    <form action="login.php" method="POST">
        <input type="email" class="user_input" placeholder="Email" name="email" id="email">
        <input type="password" class="user_input" placeholder="Password" name="password" id="password">
        <h5>To create new account - <a href="./register.php">Click Here</a></h5>
        <div class="buttons">
            <button type="submit" class="submit_button">Log In</button>
            <button type="reset" class="reset_button">Reset</button>
        </div>
    </form>
</div>
</body>
</html>