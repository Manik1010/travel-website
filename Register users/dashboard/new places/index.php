<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];

$sql = "SELECT new_place_categories.name as name, new_places.*
        FROM new_places JOIN new_place_categories
        ON new_places.category_id=new_place_categories.id
         WHERE new_places.user_id = '$user_id'";
$result = mysqli_query($conn,$sql);



include '../include/all_header.php';
?>
<div class="row p-3">
	<div class="col-md-8"> <h2>My new places</h2></div>
	<div class="col-md-4">
		<a href="create.php" class="btn btn-outline-success" style="float:right;width: 150px;">add place</a>
	</div>
	<table class="table table-striped table-bordered"> 
         		<thead>
         			<th>Title</th>
         			<th>District name</th>
         			<th>Date</th>
         			<th>image</th>
         			<th>Action</th>
         		</thead>
         		<tbody>
         			<?php while($row=mysqli_fetch_assoc($result)){
         				?>
         			
         			<tr>
         				<td><?php echo $row['title']; ?></td>
	         			<td><?php echo $row['name']; ?></td>
	         			<td><?php echo $row['date'];  ?></td>
	         			<td><img src="../../../admin/<?php echo $row['image'];?>" width="200"></td>
	         			<td width="180"><a href="view.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-success">view</a>
                            <a href="edit.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-info">edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">delete</a>
	         			</td>
         			</tr>
         			<?php } ?>
         		</tbody>
    </table>
          
</div>
<?php
include '../include/footer.php';
 ?>
