<?php
if(isset($_GET['id'])) {

	$id = $_GET['id'];
    
	include('../include/connect.php');
	$con = connectDB();
	$sql = "DELETE FROM job_post WHERE id_jobpost = '$id' ";
	
	$result = mysqli_query($con, $sql);

	header('Location: index.php');

}