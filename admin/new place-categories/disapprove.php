<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];

 $sql = "update new_place_category_requests SET
          status = 'reject' 
          where id = '$id'";
 mysqli_query($conn, $sql);

 
 header('location:all-requests.php');



 ?>