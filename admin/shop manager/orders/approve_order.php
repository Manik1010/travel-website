<?php 
include('../includes/connection.php');

$order_id = $_GET['id'];
$sql = "SELECT screenshot
        from shop_product_payments
        where order_id = '$order_id' ";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
if(!empty($data['screenshot'])){
		unlink('../' . $data['screenshot']);
}

$sql2 = "UPDATE shop_product_payments 
        SET   status ='success'
        WHERE order_id = '$order_id'";
mysqli_query($conn, $sql2);


header('Location: all_orders.php');




 ?>