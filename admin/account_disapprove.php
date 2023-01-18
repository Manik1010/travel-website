<?php 
include 'include/config.php';


$id = $_GET['id'];


$sql2 = "DELETE FROM user_form WHERE id = $id";
mysqli_query($conn, $sql2);


header('Location: all_approvals.php');




 ?>