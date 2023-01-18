<?php 
  include('../../include/config.php');
  $rand = rand(11111, 89999999999);
  session_start();
  $id= $_SESSION['user_id'];
  //  echo $id;
  //  die();

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

  
  $sql = "INSERT INTO resume( user_id,image,first_name, last_name, address, profession, Email, Phone_number, Skillset_Name, Hobby, About_me, SchoORCollORversity, Degree_Name, Degree_From, Degree_To, GradeORScoreORCGPA, Experience_Title, Description)
   VALUES ('$id','$image','$first_name','$last_name','$address','$profession','$email','$phone','$skill1',' $hobby1','$about_me','$institute1','$degree1',' $from1','$to1','$grade1','$extitle1','$exdescription1')";
  $result = mysqli_query($conn,$sql);
  if($result){
    move_uploaded_file($_FILES['profile_image']['tmp_name'], $upload);
  } 
  echo "successfull";
  header('Location:view resume.php');
?>