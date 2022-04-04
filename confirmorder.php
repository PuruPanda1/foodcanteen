<?php
require_once "config.php";
session_start();
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
            $fname = $_POST['food_name'];
            $fid = $_POST['food_id'];
            $fprice = $_POST['food_price'];
            $qty = $_POST['qty'];
            $cname = $_POST['customer_name'];
            $cnumber = $_POST['customer_number'];
            $cemail = $_POST['customer_email'];
            $caddress = $_POST['customer_address'];
            $total = $_POST['qty']*$_POST['food_price'];
            $sql = "INSERT INTO `foodorder` (`order_no`, `food_name`, `food_id`, `price`, `quantity`, `total`, `datetime`, `status`, `customer_name`, `customer_number`, `customer_email`, `customer_address`) VALUES (NULL, '$fname', '$fid', '$fprice', '$qty', '$total', current_timestamp(), 'Ordered', '$cname', '$cnumber', '$cemail', '$caddress');";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                echo '<script> alert("Ordered Sucessfully"); </script>';
            }
            else{
                echo '<script> alert("Failed to order"); </script>';
            }
            echo "<script>setTimeout(\"location.href = './index.php';\",0);</script>";
        }
    }
?>