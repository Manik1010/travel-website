<?php 
include '../includes/connection.php';
session_start();
$id = $_GET['order_id'];

$sql2 = "UPDATE shop_product_payments 
         SET   view = 1
         WHERE order_id = '$id'";
mysqli_query($conn, $sql2);


header('Location: success_orderlist.php');



include'../include/footer.php';
 ?>