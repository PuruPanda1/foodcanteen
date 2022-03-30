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
                </ul>
            </div>

            <div class="clearfix">

            </div>
        </div>
        

    </section>
    <!-- navbar section ends here-->

    <!-- food search section starts here-->
    <section class="food-search text-center">
        <div class="container">
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food...">
                <input type="submit" name="submit" value="search" class="btn btn-primary">
            </form>
        </div>

    </section>
    <!-- food search section ends here-->

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

            <div class="clearfix"></div>
        </div>
        <p class="text-center">
            <a href="categories.php">See All Foods</a>
        </p>
    </section>
    <!-- categories section ends here-->

    <!-- food menu section starts here-->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/puff.jpg" alt="Puff" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Puff</h4>
                    <p class="food-prize">Rs. 15</p>
                    <p class="food-detail">Made with stuffing and dough</p>
                    
                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Dahi_Vada.jpg" alt="Dahi Vada" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Dahi Vad</h4>
                    <p class="food-prize">Rs. 30</p>
                    <p class="food-detail">Made with vada and curd</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/dahi-puri.jpg" alt="Dahi-Puri" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Dahi-Puri</h4>
                    <p class="food-prize">Rs. 20</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Hakka-Noodles.jpg" alt="Hakka-Noodles" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Hakka-Noodles</h4>
                    <p class="food-prize">Rs. 80</p>
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
                    <img src="images/Masala_Chai.jpg" alt="Masala_Chai" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Masala Chai</h4>
                    <p class="food-prize">Rs. 30</p>
                    <p class="food-detail">Made with...</p>
                    
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/chocolate_shake.jpg" alt="chocolate_shake" class="img-responsive img-curve"></a>
                </div>
                <div class="food-menu-desc">
                    <h4>Chocolate Shake</h4>
                    <p class="food-prize">Rs. 50</p>
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