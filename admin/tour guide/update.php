<?php 

 $id = $_GET['id'];

 include '../include/config.php';
 $sql = "SELECT *
         FROM tour_guide
         WHERE id = $id ";
 $result = mysqli_query($conn,$sql);
 $data   = mysqli_fetch_assoc($result);

$title   = $_POST['title'];
$decs = $_POST['description'];
$date    = $_POST['date'];




$updatesql = "UPDATE tour_guide  SET title = '$title', description = '$decs', date ='$date' ";

if (!empty($_FILES['image']['name']))
{
	$rand = rand(11111, 89999999999);


	$image ='uploads/tour-guide-img/' . $rand .$_FILES['image']['name'];

	$upload = '../uploads/tour-guide-img/' . $rand . $_FILES['image']['name'];

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