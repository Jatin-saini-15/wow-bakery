<?php

$Name = $_POST['Name'];
$Number = $_POST['Number'];
$FoodName = $_POST['FoodName'];
$AddStuff = $_POST['AddStuff'];
$Quantity = $_POST['Quantity'];
$FullAddress = $_POST['FullAddress'];
$YourMessage = $_POST['YourMessage'];

//Database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "order";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
    die("Error : ".mysqli_connect_error());
}

$sql = "INSERT INTO `orders`(`Name`, `Number`, `FoodName`, `AddStuff`, `Quantity`, `FullAddress`, `YourMessage`) VALUES ('$Name','$Number','$FoodName','$AddStuff','$Quantity','$FullAddress','$YourMessage')";
if(mysqli_query($con,$sql)){
    echo "Order Received...";
}
else{
    echo "Something went wrong";
}
mysqli_close($con);
?>
