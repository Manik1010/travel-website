<title>Packages</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "SELECT *
        FROM packages";
$result = mysqli_query($conn,$sql);
include'../include/all_header.php';
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
         
           <a href="create.php" class="btn btn-outline-success" style="float:right">add package</a>
           <h2>All Packages</h2>
           <table class="table table-striped table-bordered"> 
         		<thead>
         			<tr>
         				<th>Title</th>
         			    <th>Tour Type</th>
         			    <th>Max Group Size</th>
         			    <th>Duration</th>
         			    <th>Action</th>
         			</tr>
         			
         		</thead>
         		<tbody>
         		    <?php while($row=mysqli_fetch_assoc($result)){ ?>
         			 <tr>
         				 <td><?php echo $row['title']; ?></td>
         				 <td><?php echo $row['tour_type']; ?></td>
         				 <td><?php echo $row['max_size']; ?></td>
         				 <td><?php echo $row['duration']; ?></td>
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