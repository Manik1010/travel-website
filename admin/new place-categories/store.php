<?php 
include '../include/config.php';
session_start();
$category_name = $_POST['district_name'];
$desc          = mysqli_real_escape_string($conn, $_POST['description']);

 $sql = "INSERT INTO new_place_categories(name,description)VALUES('$category_name','$desc')";
 mysqli_query($conn, $sql);
 header('location:index.php');



include'../include/footer.php';
 ?>