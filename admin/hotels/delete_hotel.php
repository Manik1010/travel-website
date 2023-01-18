<?php 
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$h_id= $_GET['h_id'];
// echo $h_id;
$sql = "DELETE from hotels where h_id = $h_id";
mysqli_query($conn, $sql);
header("Location:all_hotel.php");
 
?> 

<?php
include('include/footer.php');
?>