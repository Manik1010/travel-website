<?php 
include('include/header.php'); 
include('include/nab.php');
include '../include/config.php';

$sql = " SELECT * FROM hotel_categories_request";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

?>
<br><br>
<a  href="categorie.php"> <span><i class="bi bi-arrow-left btn btn-outline-success" style="margin-left: 5%;">Back</i></span></a>
<br><br>

<h2 style="margin-left: 5%;">Watting for Approval Supper Admin...</h2>
<br><br>
	<table class="table table-bordered  w-90"style="background-color: white;" >
				<thead>
					<th> Categories_ID </th>
					<th> Distict_Name</th>
					<th> Action</th>
				</thead>
				<?php  while ($row = mysqli_fetch_assoc($result)){ ?>  
				<tr>
					<td> <?php echo  $row['categories_id']; ?> </td>
					<td> <?php echo  $row['dist_name']; ?></td>		
					<td style="width:150px"> 
						<a href="delete_categories.php?id=<?= $row['categories_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> Delete </a> 
					</td>
				</tr>	
				<?php 
				}
				?>			

			</table>		
<?php
include('include/footer.php');
?>