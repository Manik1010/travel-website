<?php 

 $id = $_GET['id'];
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
 session_start();
 $sql = "SELECT *
         FROM new_places
         WHERE id = $id ";
 $result = mysqli_query($conn,$sql);
 $data   = mysqli_fetch_assoc($result);
 
$title   = $_POST['title'];
$decs = $_POST['description'];
$date    = $_POST['date'];
$category_id = $_POST['category_id'];



$updatesql = "UPDATE new_places  SET title = '$title',category_id = '$category_id', description = '$decs', date ='$date' ";

if (!empty($_FILES['image']['name']))
{
	$rand = rand(11111, 89999999999);


	$image ='uploads/new-places-img/' . $rand .$_FILES['image']['name'];

	$upload = '../../../admin/uploads/new-places-img/' . $rand . $_FILES['image']['name'];

	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
    $updatesql .= ",image = '$image'";
	if(!empty($data['image'])){
		unlink('../../../admin/' . $data['image']);
	}
}

$updatesql .= "where id = $id";
mysqli_query($conn, $updatesql);

header('Location: index.php');

?>