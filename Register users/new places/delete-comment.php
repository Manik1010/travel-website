<?php 
 include '../include/config.php';
 $comment_id = $_POST['id'];
 
 $sql = "DELETE from new_place_comments
         where id='$comment_id'";
if(mysqli_query($conn,$sql)){
  	echo 1;
  }else{
  	echo 0;
  }
?>