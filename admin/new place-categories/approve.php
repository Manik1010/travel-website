<?php 
include '../include/config.php';
session_start();
$id = $_GET['id'];
$sql3 = "select  *
         from new_place_category_requests
         where id = '$id'";
$result = mysqli_query($conn,$sql3);
$data = mysqli_fetch_assoc($result);
$category_name = $data['category_name'];
$desc   = $data['description'];

 $sql = "INSERT INTO new_place_categories(name,description)VALUES('$category_name','$desc')";
 mysqli_query($conn, $sql);
 $sql2 = "update new_place_category_requests SET
          status = 'success' 
          where id = '$id'";
 mysqli_query($conn, $sql2);
 
 
 header('location:all-requests.php');



 ?>