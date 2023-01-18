<?php 
include '../include/config.php';
$payment_method = $_POST['payment_method'];
$payment_rules  = $_POST['payment_rules'];


$sql = "INSERT INTO package_terms_conditions( payment_method, terms_conditions) VALUES ('$payment_method','$payment_rules')";

mysqli_query($conn,$sql);
header('Location:all_terms_conditions.php');