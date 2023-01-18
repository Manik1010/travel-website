<?php 
include 'include/config.php';


$id = $_GET['id'];


$sql2 = "UPDATE user_form SET status = 1
         WHERE id = '$id'";
mysqli_query($conn, $sql2);


header('Location: all_approvals.php');




 ?>