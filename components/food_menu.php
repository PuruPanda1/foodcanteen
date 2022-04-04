<?php
            require_once "config.php";
            function show($start, $end)
            {   
                global $conn;
                for($i=$start;$i<=$end;$i++)
                {
                    
                    $sql = "SELECT * from `items` WHERE sl = '$i';";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                    $stmt = "./order.php?food_id=" . $row['sl'];
                    echo "<div class='food-menu-box'>
                    <div class='food-menu-img'>
                        <img src='". $row['image'] . "' alt='" . $row['name'] ."' class='img-responsive img-curve'></a>
                    </div>
                    <div class='food-menu-desc'>
                        <h4>" . $row['name'] . "</h4>
                        <p class='food-prize'> Rs." . $row['price'] . "</p>
                        <p class='food-detail'>Made with...</p>
                        <a href='". $stmt . "' class='btn btn-primary'>Order Now</a>
                    </div>
                </div>";
                }
            }
            ?>
