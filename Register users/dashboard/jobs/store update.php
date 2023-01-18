<?php 
  include('../../include/config.php');
  $rand = rand(11111, 89999999999);
  session_start();
  $id= $_SESSION['user_id'];
  $R_id = $_GET['id'];

  $sql = "SELECT * FROM resume WHERE  ID = $R_id";
  $result = mysqli_query($conn,$sql);
  $data   = mysqli_fetch_assoc($result);
$image ='uploads/' . $rand .$_FILES['profile_image']['name'];

$upload = 'uploads/' . $rand . $_FILES['profile_image']['name'];


  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address  = $_POST['address'];
  $profession = $_POST['profession'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $skill1 = $_POST['skill1'];
  $hobby1 = $_POST['hobby1'];
  $about_me = $_POST['about_me'];
  $institute1 = $_POST['institute1'];
  $degree1    = $_POST['degree1'];
  $from1      = $_POST['from1'];
  $to1        = $_POST['to1'];
  $grade1     = $_POST['grade1'];
  $extitle1   = $_POST['title1'];
  $exdescription1  = $_POST['description1'];

//   echo $first_name;
if (!empty($_FILES['profile_image']['name']))
{
	$rand = rand(11111, 89999999999);
	$image ='uploads/'. $rand .$_FILES['profile_image']['name'];

 	$upload = 'uploads/' . $rand . $_FILES['profile_image']['name'];

	move_uploaded_file($_FILES['profile_image']['tmp_name'], $upload);
    
    $updatesql .= ",profile_image = '$image'";
	if(!empty($data['profile_image'])){
		unlink('../' . $data['image']);
	}
}

  $updatesql = "UPDATE resume  SET  user_id='$id',first_name='$first_name', last_name='$last_name', address=' $address', profession='$profession', Email='$email', Phone_number=' $phone', Skillset_Name=' $skill1', Hobby='$hobby1', About_me='$about_me', SchoORCollORversity='$institute1', Degree_Name=' $degree1', Degree_From=' $from1', Degree_To='$to1', GradeORScoreORCGPA='$grade1', Experience_Title='$extitle1', Description='$exdescription1'";
  $updatesql .= "where ID = $R_id ";
  mysqli_query($conn, $updatesql);
  header('Location: view resume.php');