<?php
    require_once "components/navbar.php";
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

    <!-- categories section starts here-->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="snacks-menu.php">
            <div class="box-3 float-container">
                <img src="images/snacks.jpg" alt="Snacks" class="img-responsive img-curve">
                <h3 class="float-text text-white">Snacks</h3>
            </div>
            </a>

            <a href="fast-food-menu.php">
            <div class="box-3 float-container">
                <img src="images/ff1.jpg" alt="Fast Food" class="img-responsive img-curve">
                <h3 class="float-text text-white">Fast Food</h3>
            </div>
            </a>

            <a href="street-food-menu.php">
            <div class="box-3 float-container">
                <img src="images/sf.jpg" alt="Street Food" class="img-responsive img-curve">
                <h3 class="float-text text-white">Street Food</h3>
            </div>
            </a>

            <div style="clear:both"></div>
    
            <a href="chinese-menu.php">
            <div class="box-3 float-container">
                <img src="images/chinese.jpg" alt="Chinese" class="img-responsive img-curve">
                <h3 class="float-text text-white">Chinese</h3>
            </div>
            </a>

            <a href="italian-menu.php">
                <div class="box-3 float-container">
                    <img src="images/it.jpeg" alt="Italian" class="img-responsive img-curve">
                    <h3 class="float-text text-white">Italian</h3>
                </div>
                </a>
    
            <a href="s-indian-menu.php">
            <div class="box-3 float-container">
                <img src="images/si.jpg" alt="South Indian" class="img-responsive img-curve">
                <h3 class="float-text text-white">South Indian</h3>
            </div>
            </a>

            <div style="clear:both"></div>

            <a href="main-dish-menu.php">
            <div class="box-3 float-container">
                <img src="images/thali.jpg" alt="Main Dishes" class="img-responsive img-curve">
                <h3 class="float-text text-white">Main Dishes</h3>
            </div>
            </a>

            <a href="drinks-menu.php">
            <div class="box-3 float-container">
                <img src="images/d.jpg" alt="Drinks" class="img-responsive img-curve">
                <h3 class="float-text text-white">Drinks</h3>
            </div>
            </a>

            <a href="dessert-menu.php">
                <div class="box-3 float-container">
                    <img src="images/dessert.jpg" alt="Dessert" class="img-responsive img-curve">
                    <h3 class="float-text text-white">Dessert</h3>
                </div>
                </a>


            <div class="clearfix"></div>
        </div>

    </section>
    <!-- categories section ends here-->

    <!-- social section starts here-->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/></a>
                </li>
            </ul>
        </div>


    </section>
    <!-- social section ends here-->

    <!-- footer section starts here-->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved, designed by <a href="#">Dhrumi Prajapati</a></p>
        </div>


    </section>
    <!-- footer section ends here-->
</body>
</html>