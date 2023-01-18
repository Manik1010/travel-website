<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];

 $sql = "delete from new_place_category_requests
         where id = '$id'";
 mysqli_query($conn, $sql);
 header('location:all-requests.php');



include'../include/footer.php';
 ?>