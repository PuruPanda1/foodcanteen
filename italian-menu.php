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
            <h2 class="text-center">Italian Food Menu</h2>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Cheese-Ravioli.jpg" alt="Cheese-Ravioli" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Cheese-Ravioli</h4>
                    <p class="food-prize">Rs. 70</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Italian-Spaghetti.png" alt="Spaghetti" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Spaghetti</h4>
                    <p class="food-prize">Rs. 75</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Pizza</h4>
                    <p class="food-prize">Rs. 100</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/redsauce_pasta.jpg" alt="Red_sauce_pasta" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Red-sauce Pasta</h4>
                    <p class="food-prize">Rs. 75</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Pasta-in-White-Sauce.jpg" alt="White_sauce_pasta" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>White-sauce Pasta</h4>
                    <p class="food-prize">Rs. 70</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/panzanella.jpg" alt="panzanella" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Panzanella</h4>
                    <p class="food-prize">Rs. 65</p>
                    <p class="food-detail">Made with...</p>
                    
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