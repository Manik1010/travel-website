<?php 
 include ("../includes/connection.php");
 $product_id = $_POST['pid'];

 $sql = "SELECT * from shop_products where id = '$product_id'";
 $result = mysqli_query($conn,$sql);
 $data = mysqli_fetch_assoc($result);
 $status = $data['status'];
 if($status == '1'){
 	 $status = '0';
 }else{
 	 $status = '1';
 }

 $update = "UPDATE shop_products set status = '$status' where id = $product_id";
 $result1 = mysqli_query($conn,$update);
 if($result1){
 	echo $status;
 }