<title>Packages</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "SELECT * FROM hotel_categories_request";
$result = mysqli_query($conn,$sql);

include'../include/all_header.php';
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">

<br><br>
<a  href="../index.php"> <span><i class="bi bi-arrow-left btn btn-outline-success" style="margin-left: 5%;">Back</i></span></a> 
<br><br>

<h2 style="margin-left: 25%;">Categories Approval Supper Admin...</h2>
<br><br>
<table class="table table-bordered  w-55"style="background-color: white;  " >
				<thead>
					<th> Categories_ID </th>
					<th> Distict_Name</th>
					<th> Action</th>
				</thead>
				<?php
                while($row = mysqli_fetch_assoc($result)){
                //Here start while loop
              
              	?>
				<tr>
					<td><?php echo $row['categories_id']?></td>
					<td><?php echo $row['dist_name']?></td>		
					<td> 
						<a href="approval.php?id=<?= $row['categories_id'] ?>" class="btn btn-sm btn-info"> Approval </a>&nbsp;&nbsp;
						<a href="delete_categories.php?id=<?= $row['categories_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> Delete </a>
					</td>
				</tr>
				<?php
                // Here End while loop
              }
              ?>			

			</table>	

<!-- Mandatory-->
 </div>
</main>
<?php 
include'../include/footer.php';
 ?>

