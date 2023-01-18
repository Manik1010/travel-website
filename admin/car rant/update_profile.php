<?php

include '../include/config.php';
session_start();

$user_id = $_SESSION['user_id'];
$sql = "SELECT *
       FROM user_form
       WHERE id = '$user_id'";


$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);


$name 			 = $_POST['name'];
$email 		 = $_POST['email'];
$fathername           = $_POST['fathername'];
$mothername           = $_POST['mothername'];
$dob                  = $_POST['dob'];
$number               = $_POST['number'];
$currentaddress       = $_POST['currentaddress'];

$updateSql = "UPDATE user_form SET 
			name              = '$name', 
			email             = '$email',
			fatherName        = '$fathername',
			motherName        = '$mothername',
			dob               = '$dob',
			number            = '$number',
			currentAddress    = '$currentaddress'
			
   
            
			";	



if ( !empty( $_FILES['profileimage']['name'] )) {
	$rand = rand(11111, 89999999999);
	
	$profileimage =  'uploads/'. $rand .$_FILES['profileimage']['name'];


    $upload =   'uploads/'. $rand . $_FILES['profileimage']['name'];
	move_uploaded_file($_FILES['profileimage']['tmp_name'], $upload);
    
	$updateSql .= ", profileImage = '$profileimage' ";

	if (!empty($data['profileImage']) && file_exists( $data['profileImage'] )) {
		unlink( $data['profileImage']);
	}
}

	


$updateSql .= " WHERE id = $user_id";


		
mysqli_query($conn, $updateSql);

header('Location: profile.php');