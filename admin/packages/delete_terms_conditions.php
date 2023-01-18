<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];

 $sql = "delete from package_terms_conditions
         where id = '$id'";
 mysqli_query($conn, $sql);
 header('location:all_terms_conditions.php');



 ?>