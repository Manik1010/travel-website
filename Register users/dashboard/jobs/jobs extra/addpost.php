<?php


$id = $_GET['id'];
include('../../admin/include/connect.php');
$con = connectDB();

$jobtitle = $_POST['jobtitle'];
$description = $_POST['description'];
$minimumsalary = $_POST['minimumsalary'];
$maximumsalary = $_POST['maximumsalary'];
$experience = $_POST['experience'];
$qualification = $_POST['qualification'];


//if user Actually clicked Add Post Button
if(isset($_POST)) {



	$sql ="INSERT INTO job_post(id_user, jobtitle, description, minimumsalary, maximumsalary, experience, qualification) VALUES ($id,$jobtitle, $description, $minimumsalary, $maximumsalary, $experience, $qualification)";

	mysqli_query($con, $sql);

    header('Location: index.php?id='.$id);

}