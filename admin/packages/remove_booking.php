<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];

$sql2 = "UPDATE package_payment_details 
         SET   view = 1
         WHERE id = '$id'";
mysqli_query($conn, $sql2);


header('Location: completed_bookings.php');



include'../include/footer.php';
 ?>