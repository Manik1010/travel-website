<?php 
 $id = $_GET['b_id'];
 // echo $id;
 $name = $_POST['brand'];
 // echo $name;
 // die();

 include '../../Register users/include/config.php';

 $sql = "SELECT * FROM brand WHERE id = $id";
 $result = mysqli_query($conn,$sql);


 $updatesql = "UPDATE brand  SET id = '$id',brand_name = '$name' ";
 $updatesql .= "where id = $id ";
 mysqli_query($conn, $updatesql);

 header('Location: all_brand.php');

?>