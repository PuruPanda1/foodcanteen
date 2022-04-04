<?php
require_once ("config.php");
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

<body style="background-color: #DDE7F2;">
    <h1 style="width: 80%;
    margin: auto;
      margin-top: auto;
      text-align: center;
      font-family: 'Roboto', sans-serif;
        color: red;
margin-top: 40px;">ADMIN PANEL</h1>
    <section class="adminheadsection">
        <h1>Dashboard</h1>
        <div>
            <ul class="progress">
                <li>
                    <div class="statuselement st2">
                        <h4>Active</h4>
                        <p><?php 
                            $num1 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `foodorder` WHERE status='ordered';"));
                            echo $num1;
                            ?></p>
                        </div>
                    </li>
                    <li>
                        <div class="statuselement st3">
                            <h4>Progress</h4>
                            <p><?php 
                                $num2 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `foodorder` WHERE status='onProgress';"));
                                echo $num2;
                                ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="statuselement st4">
                                <h4>Delivered</h4>
                                <p><?php 
                                    $num3 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `foodorder` WHERE status='delivered';"));
                                    echo $num3;
                                    ?></p>
                                </div>
                            </li>
                        <li>
                            <div class="statuselement st1">
                                <h4>Total</h4>
                                <p><?php 
                                    echo $num1 + $num2 + $num3;
                                    ?></p>
                            </div>
                        </li>
            </ul>
        </div>
        <div>
            <ul class="p2">
                <li>
                    <div class="options" onclick="showUsers()">
                        <h4>Users</h4>
                    </div>
                </li>
                <li>
                    <div class="options" onclick="showFoodItems()">
                        <h4>Food-items</h4>
                    </div>
                </li>
                <li>
                    <div class="options" onclick="showOrders()">
                        <h4>Orders</h4>
                    </div>
                </li>
            </ul>
        </div>
        <script>
            function showUsers() {
              document.getElementById("users").style.display="block";
              document.getElementById("fooditems").style.display="none";
              document.getElementById("orders").style.display="none";
            }
            function showFoodItems() {
              document.getElementById("fooditems").style.display="block";
              document.getElementById("users").style.display="none";
              document.getElementById("orders").style.display="none";
            }
            function showOrders() {
              document.getElementById("orders").style.display="block";
              document.getElementById("users").style.display="none";
              document.getElementById("fooditems").style.display="none";
            }
        </script>
        </section>
        <!-- show users details to admin section -->
        <section class="ordersection" style="display: none;" id="users">
            <h2>Users</h2>
            <table border=0 class="order_table">
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Account Creation</th>
                </tr>
        <?php
            require_once ("details.php");
            showUserData();
        ?>
            </table>
        </section>
        <!-- food items section -->
        <section class="ordersection" style="display: none;" id="fooditems">
            <h2>Food Items</h2>
            <table border=0 class="order_table">
                <tr>
                    <th>Food Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image Location</th>
                </tr>
        <?php
            require_once ("details.php");
            showFoodDetails();
        ?>
        </table>
        </section>
        <!-- orders section -->
        <section class="ordersection" style="display: none;" id="orders">
            <h2>Orders</h2>
            <table border=0 class="order_table">
                <tr>
                    <th>TimeStamp</th>
                    <th>Order No.</th>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer No.</th>
                    <th>Status</th>
                </tr>
            <?php
                require_once ("details.php");
                showOrders();
            ?>
            </table>
        </section>
</body>

</html>