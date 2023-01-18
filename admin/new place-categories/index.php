<title>All districts</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "select * from new_place_categories";
$result = mysqli_query($conn,$sql);

include'../include/all_header.php';

?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
         <div class="row">
         	<div class="col-md-6"> <h2>All District(categories)</h2></div>
         	<div class="col-md-6"><a href="create.php" class="btn btn-outline-success" style="float:right">add district</a></div>
         </div>
         	<table class="table table-striped table-bordered"> 
         		<thead>
         			<th>Category_id</th>
         			<th>Name</th>
         			<th>Description</th>
         			<th>Action</th>
         		</thead>
         		<tbody>
         			<?php while($row=mysqli_fetch_assoc($result)){
         				?>
         			
         			<tr>
         				<td><?php echo $row['id']; ?></td>
	         			<td><?php echo $row['name']; ?></td>
	         			<td><?php echo substr($row['description'],0,150); ?>...</td>
	         			<td width="180"><a href="view.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-success">view</a>
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
