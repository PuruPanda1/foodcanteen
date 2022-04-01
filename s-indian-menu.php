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
            <h2 class="text-center">South-Indian Food Menu</h2>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/idli.jpg" alt="idli" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Idli</h4>
                    <p class="food-prize">Rs. 60</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Masala-Dosa.jpg" alt="Dosa" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Dosa</h4>
                    <p class="food-prize">Rs. 70</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/medu-vada-1.jpg" alt="Mendu-Vada" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Mendu-Vada</h4>
                    <p class="food-prize">Rs. 85</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/appam.png" alt="Appam" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Appam</h4>
                    <p class="food-prize">Rs. 55</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/coconut-rice.jpg" alt="coconut-rice" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Coconut-Rice</h4>
                    <p class="food-prize">Rs. 95</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/vegetable_uttapam_.jpg" alt="Uttapam" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Uttapam</h4>
                    <p class="food-prize">Rs. 85</p>
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