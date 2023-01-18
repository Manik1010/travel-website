<?php 

if(isset($_GET['e_id'])) {

    $e_id = $_GET['e_id'];

  	include '../../include/config.php';
  	// die();
 

  	$sql2 = "DELETE FROM eventrequest WHERE event_id = '$e_id' ";
	
	$result = mysqli_query($conn, $sql2);
	header('Location: approval.php');

}
?>
