<title>New places</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "SELECT *
        FROM tour_guide";
$result = mysqli_query($conn,$sql);
include'../include/all_header.php';
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
         
           <a href="create.php" class="btn btn-outline-success" style="float:right">add place</a>
           <h2>All new places</h2>
           <table class="table table-striped table-bordered"> 
         		<thead>
         			<th>Title</th>
         			<th>Date</th>
					<th>Description</th>
         			<th>image</th>
         			<th>Action</th>
         		</thead>
         		<tbody>
         			<?php while($row=mysqli_fetch_assoc($result)){
         				?>
         			
         			<tr>
         				<td><?php echo $row['title']; ?></td>
	         			
	         			<td><?php echo $row['date'];  ?></td>
						<td><?php echo $row['description'];?></td>
	         			<td><img src="../<?php echo $row['image'];?>" width="200"></td>
	         			<td width="180">
                            <a href="edit.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-info">edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">delete</a>
	         			</td>
         			</tr>
         			<?php } ?>
         		</tbody>
         	</table>
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
