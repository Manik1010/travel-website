<?php 
 include '../../include/config.php';
session_start();
$category_name = $_POST['district_name'];
$desc          = mysqli_real_escape_string($conn, $_POST['description']);
$user_id       = $_SESSION['user_id'];
 $sql = "INSERT INTO new_place_category_requests(user_id,category_name,description,status)VALUES('$user_id','$category_name','$desc','pending')";
 mysqli_query($conn, $sql);
 header('location:all-requests.php');



 ?>