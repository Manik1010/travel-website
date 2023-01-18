<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}

$sql = "SELECT * FROM hotel_request";
$result = mysqli_query($conn, $sql);
// die();
$sql = "SELECT * FROM hotels";
$result1 = mysqli_query($conn, $sql);
include'../include/all_header.php';

?>

<br><br>
<a  href="../index.php"> <span><i class="bi bi-arrow-left btn btn-outline-success" style="margin-left: 5%;">Back</i></span></a>
<br><br>

<h2 style="text-align: center;" >Approval Supper Admin For Hotels...</h2>
<br><br>
<table class="table table-bordered  w-55"style="background-color: white; margin-left: 18%; " >
				<thead>
					<th> Hotel_ID </th>
					<th> Hotel_Name</th>
					<th> Distict_Name</th>
					<th> Location</th>
					<th> Action</th>
				</thead>
				<?php
                while($row = mysqli_fetch_assoc($result)){
                //Here start while loop
              
              	?>
				<tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['h_name']?></td>		
					<td><?php echo $row['dist_name']?></td>
					<td><?php echo $row['h_loaction']?></td>		
					<td> 
						<a href="approval_hotel.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-info"> Approval </a>&nbsp;&nbsp;
						<a href="delete_hotel.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> Delete </a>
					</td>
				</tr>
				<?php
                // Here End while loop
              }
              ?>			

			</table>	
			<h2 style="text-align: center;">Already Approved</h2>
			<table class="table table-bordered  w-55"style="background-color: white; margin-left: 18%; " >
				<thead>
					<th> Hotel_ID </th>
					<th> Hotel_Name</th>
					<th> Distict_Name</th>
					<th> Location</th>
					<th> Action</th>
				</thead>
				<?php
                while($row1 = mysqli_fetch_assoc($result1)){
                //Here start while loop
              
              	?>
				<tr>
					<td><?php echo $row1['h_id']?></td>
					<td><?php echo $row1['h_name']?></td>		
					<td><?php echo $row1['dist_name']?></td>
					<td><?php echo $row1['h_loaction']?></td>		
					<td> 
						<a href="delete_hotel.php?id=<?= $row1['h_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> Delete </a>
					</td>
				</tr>
				<?php
                // Here End while loop
              }
              ?>			

			</table>	
<?php 
include'../include/footer.php';
 ?>

