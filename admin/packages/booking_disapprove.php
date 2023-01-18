<?php 
include '../include/config.php';
session_start();

$id = $_GET['id'];
$sql = "SELECT screenshot
        from package_payment_details
        where id = '$id' ";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
if(!empty($data['screenshot'])){
		unlink('../' . $data['screenshot']);
}

$sql2 = "UPDATE package_payment_details 
        SET   status ='rejected'
        WHERE id = '$id'";
mysqli_query($conn, $sql2);


header('Location: all_booking.php');




 ?>