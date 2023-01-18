<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];

 $sql = "delete from restaurent_categories
         where id = '$id'";
 mysqli_query($conn, $sql);
 header('location:index.php');



include'../include/footer.php';
 ?>