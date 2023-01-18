<?php 
include('include/header.php'); 
include('include/nab.php');
include '../include/config.php';


$sql = "SELECT * FROM hotel_categories";
$result = mysqli_query($conn, $sql);

?>
   	<a  class="m-2 w-25 btn btn-outline-success" href="add_categorie.php" > + Add Categories </a>
    <a class="m-2 w-25 btn btn-outline-success" href="watting_categories.php">Categories requests </a>
	<br><br>


	<table class="table table-bordered  w-90"style="background-color: white;" >
				<thead>
					<th> ID </th>
					<th> Name</th>
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