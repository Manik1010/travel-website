<?php
include '../include/config.php';
$cart_id = $_POST['cart_id'];
$sql = "DELETE FROM shop_cart WHERE id ='$cart_id' ";
if(mysqli_query($conn,$sql)){
	echo 1;
}
else {
	echo "Failed cart item delete operation";
}