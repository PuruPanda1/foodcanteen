<?php
require_once "components/navbar.php";
require_once "config.php";
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
</head>
<body>
    <section class="ordersection">
        <h2>My Orders</h2>
        <table border=0 class="order_table">
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Order No</th>
                <th>Food Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
            <?php 
                $email = $_SESSION['email'];
                $sql = 'SELECT * FROM `foodorder` WHERE customer_email="'.$email.'";';
                $result = mysqli_query($conn,$sql);
                $num = mysqli_num_rows($result);
                while($num > 0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $datetime = explode(" ", $row['datetime']);
                    $date = $datetime[0];
                    $time = $datetime[1];
                    $orderno = $row['order_no'];
                    $foodname = $row['food_name'];
                    $price = $row['price'];
                    $qty = $row['quantity'];
                    $total = $row['total'];
                    $status = $row['status'];

                    echo "
                        <tr>
                        <td>$date</td>
                        <td>$time</td>
                        <td>#$orderno</td>
                        <td>$foodname</td>
                        <td>Rs. $price/-</td>
                        <td>$qty pcs.</td>
                        <td>Rs. $total</td>
                        <td>$status</td>
                        </tr>
                    ";
                    $num--;
                }
            ?>
        </table>

    </section>
</body>
</html>
