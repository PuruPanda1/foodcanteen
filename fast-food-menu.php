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
    <!-- food search section starts here-->
    <section class="food-search text-center">
        <div class="container">
            <form action="">
                <input type="search" name="search" placeholder="Search for Food...">
                <input type="submit" name="submit" value="search" class="btn btn-primary">
            </form>
        </div>

    </section>
    <!-- food search section ends here-->

    <!-- food menu section starts here-->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Fast Food Menu</h2>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sw.jpg" alt="Grilled Sandwich" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Veg. Grilled Sandwich</h4>
                    <p class="food-prize">Rs. 50</p>
                    <p class="food-detail">Bread stuffed with veggies,mayo,sauce</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/burger.jpg" alt="Aaloo Tikki Burger" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Aaloo Tikki Burger</h4>
                    <p class="food-prize">Rs. 100</p>
                    <p class="food-detail">Burger bun stuffed with aloo tikki</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/maggie.jpg" alt="maggie" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Cheese maggie</h4>
                    <p class="food-prize">Rs. 40</p>
                    <p class="food-detail">Instant maggie with some vegetables</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/vp.jpg" alt="Vadapav" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Vadapav</h4>
                    <p class="food-prize">Rs. 15</p>
                    <p class="food-detail">Bun having aloovada</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/ff.jpg" alt="French Fries" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>French Fries</h4>
                    <p class="food-prize">Rs. 70</p>
                    <p class="food-detail">Made with potato</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/dabeli.jpg" alt="Dabeli" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Dabeli</h4>
                    <p class="food-prize">Rs. 15</p>
                    <p class="food-detail">Bun stuffed with potato dabeli masala</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>


    </section>
    <!-- food menu section ends here-->

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