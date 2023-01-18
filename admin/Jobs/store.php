<?php 
include('../include/config.php');


$jobtitle = mysqli_real_escape_string($conn,$_POST['jobtitle']);
$qualification = $_POST['qualification'];
$minimumsalary = $_POST['minimumsalary'];
$maximumsalary = $_POST['maximumsalary'];
$experience    = $_POST['experience'];
$desc = mysqli_real_escape_string($conn, $_POST['description']);

$sql = "INSERT INTO job_post(jobtitle,experience,minimumsalary,maximumsalary,qualification,description)VALUES('$jobtitle','$experience','$minimumsalary','$maximumsalary','$qualification','$desc');";
	
$result = mysqli_query($conn, $sql);
if($result){
    header('Location: index.php');
}
else{
    echo "Some Error";
}

?>
