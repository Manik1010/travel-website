<?php 
$id = $_GET['id'];

include('../include/config.php');

 
include'../include/all_header.php';

$sql = "SELECT *
		FROM job_post
		
		WHERE id_jobpost = '$id' ";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

include('../include/all_header.php'); 
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">

 <!-- Main Content--->
    	<a href="index.php"><span><i class="bi bi-arrow-left btn btn-outline-success">back</i></span></a>
		  <br><br>

	
			<h1>  Job details </h1>

			
			<table class="table ">
				<tr>
					
					<th >Title: </th>
					<td> <?php echo $data['jobtitle'] ?> </td>
					
				</tr>
				<tr>
					<th> description: </th>
					<td> <?php echo $data['description'] ?> </td>
				</tr>
				<tr>
					<th> Qualification: </th>
					<td> <?php echo $data['qualification'] ?> </td>
				</tr>
				
				<tr>
					<th> Experience: </th>
					<td style="text-align:justify;"> <?php echo $data['experience'] ?> years</td>
				</tr>
				<tr>
					<th> Salary: </th>
					<td> <?php echo $data['minimumsalary'] ?>-<?php echo $data['maximumsalary'];?>Tk </td>
				</tr>
				
				
				
				
				
			</table>

<?php include '../include/footer.php'; ?>