<?php 
 $id = $_GET['id'];
 include '../includes/connection.php';

$sql = "DELETE FROM shop_subcategories WHERE id = '$id' ";
$res = mysqli_query($conn, $sql);

header('Location: viewsubcategory.php');