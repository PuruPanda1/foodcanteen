<?php
require_once ("config.php");
function showUserData()
{
    global $conn;
    $sql = "SELECT * FROM `users`;";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    while($num > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $userid = $row['userid'];
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        $datetime = $row['datetime'];

        echo "
            <tr>
            <td>$userid</td>
            <td>$username</td>
            <td>$email</td>
            <td>$password</td>
            <td>$datetime</td>
            </tr>
            ";
        $num--;
    }
}
function showFoodDetails()
{
    global $conn;
    $sql = "SELECT * FROM `items`;";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    while($num > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $foodId = $row['sl'];
        $name = $row['name'];
        $price = $row['price'];
        $image = $row['image'];
        echo "
            <tr>
            <td>$foodId</td>
            <td>$name</td>
            <td>$price</td>
            <td>$image</td>
            </tr>
            ";
        $num--;
    }

}

function showOrders()
{
    global $conn;
    $sql = "SELECT * FROM `foodorder`;";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    while($num > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $timestamp = $row['datetime'];
        $order_no = $row['order_no'];
        $food_name = $row['food_name'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $total = $row['total'];
        $customer_name = $row['customer_name'];
        $customer_email = $row['customer_email'];
        $customer_number = $row['customer_number'];
        $status = $row['status'];
        if($status=="Ordered")
        {
            $option1 = "onProgress";
            $option2 = "Delivered";
        }
        else if($status == "onProgress")
        {
            $option1 = "Ordered";
            $option2 = "Delivered";
        }
        else{
            $option1 = "onProgress";
            $option2 = "Ordered";
        }
        echo "
            <tr>
            <td>$timestamp</td>
            <td>$order_no</td>
            <td>$food_name</td>
            <td>$price</td>
            <td>$quantity</td>
            <td>$total</td>
            <td>$customer_name</td>
            <td>$customer_email</td>
            <td>$customer_number</td>
            <td>
                <form action='details.php' method='POST'>
                <input type='hidden' name='id' value='$order_no'>
                <select name='orderstatus' id='orderstatus'>
                <option>$status</option>
                <option>$option1</option>
                <option>$option2</option>
                </select>
                <button type='submit'>update</button>
                </form>
            </td>
            </tr>
            ";
        $num--;
    }
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $newStatus = $_POST['orderstatus'];
    $sql = 'UPDATE `foodorder` SET `status` ="' . $newStatus . '" WHERE `foodorder`.`order_no` = '.$_POST["id"].';';
    $result = mysqli_query($conn,$sql);
    echo "<script>alert('Updated Sucessfully');</script>";
    echo "<script>setTimeout(\"location.href = './admin.php';\",0);</script>";
}
?>