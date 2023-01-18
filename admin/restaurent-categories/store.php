<?php 
include '../include/config.php';
session_start();
$category_name = $_POST['district_name'];


 $sql = "INSERT INTO restaurent_categories(name)VALUES('$category_name')";
 mysqli_query($conn, $sql);
 header('location:index.php');



include'../include/footer.php';
 ?>