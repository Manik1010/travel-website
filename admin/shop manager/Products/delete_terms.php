<?php 
 $id = $_GET['id'];
 include '../includes/connection.php';
 $sql = "DELETE FROM terms_conditions WHERE id =  '$id' ";
 $res = mysqli_query($conn, $sql);

header('Location: view_term_condition.php');