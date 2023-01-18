<?php 
 include '../../include/config.php';
session_start();
$title   = $_POST['title'];
$msg     = mysqli_real_escape_string($conn, $_POST['message']);
$user_id = $_SESSION['user_id'];
$sql2    = "select * from new_places where title='$title'";
$result  = mysqli_query($conn,$sql2);
$data    = mysqli_fetch_assoc($result);
$id =  $data['id'];
$sql = "INSERT INTO new_place_complains(new_place_id,user_id,title,message,status)VALUES('$id','$user_id','$title','$msg','pending')";
 mysqli_query($conn, $sql);
 header('location:all-complains.php');



 ?>