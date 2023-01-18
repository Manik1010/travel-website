<?php 

include '../include/config.php';
$user_id    = $_POST['user_id'];
$product_id = $_POST['product_id'];
$quantity   = $_POST['quantity'];

$sql = "INSERT INTO shop_product_order( user_id, product_id, quantity)    VALUES ('$user_id','$product_id','$quantity')";

mysqli_query($conn,$sql);
