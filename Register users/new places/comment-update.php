<?php
include '../include/config.php'; 
$id    = $_POST['id'];
$editComment = $_POST['comment'];
 $sql = "UPDATE  new_place_comments set
         comment = '$editComment'
         where id='$id'";
if(mysqli_query($conn,$sql)){
  	echo 1;
  }else{
  	echo 0;
  }
?>