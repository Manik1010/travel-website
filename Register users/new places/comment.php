<?php 
include '../include/config.php';
$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];
$comment = $_POST['comment'];

$commentsql = "INSERT INTO new_place_comments(user_id,post_id,comment,createdOn)values('$user_id','$post_id','$comment', NOW())";
if(mysqli_query($conn,$commentsql)){
	echo 1;
}else{
	echo 0;
}
