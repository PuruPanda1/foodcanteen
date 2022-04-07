<?php
require_once "config.php";

$sql = "SELECT * FROM `foodorder`;";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo '
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
';
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
            <select name='orderstatus' id='orderstatus' style='padding: 2px; border-radius: 5px'>
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
echo "</table>";
?>
