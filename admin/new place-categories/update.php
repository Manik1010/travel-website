<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];
$category_name = $_POST['district_name'];
$desc          = mysqli_real_escape_string($conn, $_POST['description']);

 $sql = "update new_place_categories SET 
         name = '$category_name', description='$desc'
         WHERE id = '$id'";
 mysqli_query($conn, $sql);
 header('location:index.php');



include'../include/footer.php';
 ?>