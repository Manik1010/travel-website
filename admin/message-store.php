<?php 
include 'include/config.php';

$message    = mysqli_real_escape_string($conn, $_POST['message']);
$user_id    = $_POST['user_id'];
$book_id = $_POST['book_id'];
$type  = $_POST['type'];

$sql = "INSERT INTO messages(user_id,order_or_book_id, type, message,sendOn) VALUES ('$user_id','$book_id','$type','$message',NOW())";
if(mysqli_query($conn,$sql)){
  	echo 1;
  }else{
  	echo 0;
  }




 ?>