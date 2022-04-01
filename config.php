<?php
// mysql Connection work
$server = "localhost";
$username = "root";
$password = "";
// creating a connection
$conn = mysqli_connect($server,$username,$password,"login");
if(!$conn)
{
    die("Error! Cannot connect to database".mysqli_connect_error());
}
?>