
<?php 

if(isset($_GET['id'])) {

    $id = $_GET['id'];

  	include '../../include/config.php';

	$sql = "SELECT * FROM commitee_request WHERE id = '$id' ";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);

	$c_name = $data['c_name'];
	// echo $c_name;
	$createrid = $data['createrid'];
	// echo $createrid;
	$creatername = $data['creatername'];
	// echo $creatername;
	$fromevent = $data['fromevent'];
	$fromeventtitle = $data['fromeventtitle'];

	// die();
	
	$sql = "INSERT INTO committee (id, name, creater, creater_name, event, title) VALUES (NULL,'$c_name','$createrid','$creatername','$fromevent','$fromeventtitle')";	
	$result = mysqli_query($conn, $sql);

    $sql2 = "DELETE FROM commitee_request WHERE id = '$id' ";
	
	$result = mysqli_query($conn, $sql2);
	header('Location: approval.php');

}
?>
