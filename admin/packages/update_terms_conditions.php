<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];
$payment_method = $_POST['payment_method'];
$payment_rules  = $_POST['payment_rules'];

 $sql = "UPDATE package_terms_conditions
         SET payment_method='$payment_method' ,terms_conditions='$payment_rules'
         WHERE id = '$id'";
 mysqli_query($conn, $sql);
 header('location:all_terms_conditions.php');



include'../include/footer.php';
 ?>