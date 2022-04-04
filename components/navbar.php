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
                        <li class="profile">
                            <?php
                            session_start();
                            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                            {
                                echo '<a href="./login.php">Log In</a>';
                            }
                            else
                            {
                                    echo '<div class="dropdown">
                                    <button class="dropbtn">'. $_SESSION["username"].'</button>
                                    <div class="dropdown-content">
                                    <a href="./previousorders.php">Orders</a>
                                    <a href="./logout.php">Log Out</a>
                                    </div>
                                  </div>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </section>   