<?php 

 $id = $_GET['id'];

 include '../include/config.php';
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

	$upload = '../uploads/new-places-img/' . $rand . $_FILES['image']['name'];

	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
    $updatesql .= ",image = '$image'";
	if(!empty($data['image'])){
		unlink('../' . $data['image']);
	}
}

$updatesql .= "where id = $id";
mysqli_query($conn, $updatesql);

header('Location: index.php');

?>