<?php
$page = "shop";
include '../include/config.php';
$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];

$check = "SELECT * FROM shop_cart
          WHERE product_id='$product_id' and user_id='$user_id'";
$checkResult =mysqli_query($conn,$check);
$row = mysqli_num_rows($checkResult);
if($row<1){
	$sql = "INSERT INTO shop_cart(user_id, product_id) VALUES ('$user_id','$product_id')";
	if(mysqli_query($conn,$sql)){
		echo 1;
	}

}
else{
	echo 0;
}