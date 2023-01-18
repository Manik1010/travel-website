<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];
$category_name = $_POST['district_name'];


 $sql = "update restaurent_categories SET 
         name = '$category_name'
         WHERE id = '$id'";
 mysqli_query($conn, $sql);
 header('location:index.php');



include'../include/footer.php';
 ?>