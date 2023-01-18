<?php 
$page = "jobs";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

$job_id = $_GET['jobid'];
$sql2 = "SELECT *
    FROM job_post
    WHERE id_jobpost = '$job_id'
     ";

$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result2);
include'../include/register_header.php';


?>

                
        
<section>
<a class="btn btn-success" style="margin-top: 30px;" href="index.php"> Back </a>
<h4 class="text-center mt-5"> Post Name: <?php echo $row['jobtitle'];?></h4>
<div class="row mt-5">
    <h5>Description:</h5>
    <p><?php echo $row['description'];?></p>
    <h5>Qualification:</h5>
    <p><?php echo $row['qualification'];?></p>
    <h5>Experience:</h5>
    <p><?php echo $row['experience'];?></p>
    <h5>Salary:</h5>
    <p><?php echo $row['minimumsalary'];?> - <?php echo $row['maximumsalary'];?> </p>
</div>
<div class="row mb-5">
    <div class="col-md-4"></div>
    <div class="col-md-4"> <a href="apply.php?jobid=<?php echo $row['id_jobpost'];?>" class="btn btn-outline-success" style="display: block;"> Apply</a></div>
    <div class="col-md-4"></div>
</div>
</section>
