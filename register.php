<?php
require_once "config.php";

$username = $password = $email = $conf_password = "";
$username_error = $password_error = $email_error = $cnf_password_error = "";
$error = false;

// checking for the post request
if($_SERVER['REQUEST_METHOD']=="POST")
{
    // checking username and email and password not empty 
    if(empty(trim($_POST["email"])) || empty(trim($_POST["username"])) || empty(trim($_POST["password"])))
    {
        if(empty(trim($_POST["email"])))
        {
            $email_error ="Email cannot be empty";
        }
        else if( empty(trim($_POST["username"])))
        {
            $username_error = "Username cannot be empty";
        }
        else{
            $password_error = "Password cannot be empty";
        }
    }
    else{
        //  checking if the email already exists 
        $email = trim($_POST["email"]);
        $sql = "SELECT * FROM `users` WHERE email='$email';";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($result);
        if($rows >= 1)
        {
            $email_error = "Email is already used, Kindly try to log in";
        }
        else{
            $username = trim($_POST["username"]);
            $email = trim($_POST["email"]);
            // checking for the password in which password cant be less than 8 digits
            if(strlen(trim($_POST['password']))<8)
            {
                $password_error = "Password cannot be less than 8";
            }
            else
            {
                $password = trim($_POST['password']);
            }
            // checking for the confirmed password 
            if(trim($_POST['cnf_password']!=$password)){
                $password_error = "Password does not match";
            }
            else{
                $cnf_password = trim($_POST['cnf_password']);
            }
        }
    }
    if(empty($email_error) && empty($password_error) && empty($password_error))
    {
        // inserting data into mysql from the html form
        $sql = "INSERT INTO `users` (`userid`,`username`, `email`, `password`, `datetime`) VALUES (NULL,'$username', '$email', '$password', current_timestamp());";
        $result = mysqli_query($conn,$sql);
    }
    else
    {
        $error = true;
        if(!empty($email_error))
            {
                echo "<script>alert('$email_error')</script>";
            }
        else if(!empty($password_error))
        {
            echo "<script>alert('$password_error')</script>";
        }
        else{

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
<!-- navbar section starts here-->
    <section class="navbar">
            <div class="container">
                <div class="logo">
                    <img src="images/logo3.png" alt="App Logo" class="img-responsive">
                </div>
                <div class="menu text-right">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="categories.php">Categories</a>
                        </li>
                        <li>
                            <a href="foods.php">Foods</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="./login.php">Log In</a>
                        </li>
                    </ul>
                </div>

                <div class="clearfix">

                </div>
            </div>
        </section>   
    <!-- navbar section ends here-->

<!-- Login Form -->
<div class="loginForm">
    <h1>Create account</h1>
    <h5 class="loginText">Enter your details for creating the account</h5>
    <form action="register.php" method="POST">
        <input  type="text" class="user_input" placeholder="Username" name="username" id="username">
        <input type="email" class="user_input" placeholder="Email" name="email" id="email">
        <input type="password" class="user_input" placeholder="Password" name="password" id="password">
        <input type="password" class="user_input" placeholder="Confirm Password" name="cnf_password" id="cnf_password">
        <h5>Already have an account? <a href="./login.php">Click Here</a></h5>
        <div class="buttons">
            <button type="submit" class="submit_button">Sign Up</button>
            <button type="reset" class="reset_button">Reset</button>
        </div>
    </form>
</div>
<div class="submitMessage">
<h5>
    <?php
        if($error == false)
        {
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                if($result)
                {
                    echo "Account Created, redirecting to login page<br><br><i><a href='login.php'>Click here</a> if not redirected</i>";
                    echo "<script>setTimeout(\"location.href = './login.php';\",1500);</script>";
                }
                else
                {
                    echo "<style>
                                .submitMessage{
                                    color: red;
                                }
                            </style>";
                    echo "Failed to create an account";
                }
            }
        }
        else
        {
            echo "<style>.submitMessage{
                                color: red;
                                }
                            </style>";
            echo "Failed to create an account";
        }
    ?>
</h5>
</div>
</body>
</html>