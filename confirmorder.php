<?php
require_once "config.php";
if($_SERVER['REQUEST_METHOD']=='POST')
    {
        // if not logged in, redirect to the login page 
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
        {
            echo "<script> alert('Redirecting to Login Page'); </script>";
            echo "<script>setTimeout(\"location.href = './login.php';\",0);</script>";
        }
        else
        {
            $sql = "";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                echo '<script> alert("Ordered Sucessfully"); </script>';
            }
            else{
                echo '<script> alert("Failed to order"); </script>';
            }
        }
    }
?>