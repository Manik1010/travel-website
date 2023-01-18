<?php 
include '../includes/connection.php';
session_start();

$id = $_GET['id'];
$sql = "SELECT shop_product_order.product_id, shop_product_order.quantity,shop_product_payments.screenshot FROM shop_product_order JOIN shop_product_payments ON shop_product_order.id = shop_product_payments.order_id WHERE shop_product_payments.order_id = $id ";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
if(!empty($data['screenshot'])){
		unlink('../' . $data['screenshot']);
}

$sql2 = "UPDATE shop_product_payments
        SET   status ='rejected'
        WHERE order_id = '$id'";
mysqli_query($conn, $sql2);

$quantity = $data['quantity'];
$product_id = $data['product_id'];
$updateSql = "UPDATE shop_products SET stock = stock + $quantity
               WHERE id = $product_id";
 mysqli_query($conn, $updateSql);

header('Location: all_orders.php');




 ?>