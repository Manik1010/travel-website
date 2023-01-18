<?php
 include '../../include/config.php';
 session_start();
 $user_id = $_SESSION['user_id'];
 $quantity = $_POST['quantity'];
 $product_id = $_POST['product_id'];

 $rand = rand(111, 89999);

 $image ='uploads/shop-product-payment-sc-img/' . $rand .$_FILES['image']['name'];

 $upload = '../../../admin/shop manager/uploads/shop-product-payment-sc-img/' . $rand . $_FILES['image']['name'];

 
 $order_id = $_GET['order_id'];
 $address  = $_POST['address'];
 
 $bikash_number = $_POST['bikash_number'];
 $transaction_id = $_POST['transaction_id'];

 $sql = "INSERT INTO shop_product_payments(order_id, address, bikash_number, transaction_id,date, screenshot, status) VALUES ('$order_id','$address','$bikash_number','$transaction_id',NOW(),'$image','pending')";
 if(mysqli_query($conn, $sql)){
 	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
 }
 
 $updateSql = "UPDATE shop_products SET stock = stock - $quantity
               WHERE id = $product_id";
 mysqli_query($conn, $updateSql);
 header('Location: all_orders.php');