<title>All requests</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "select user_form.name as name, new_place_category_requests.*
         from new_place_category_requests join user_form
         on new_place_category_requests.user_id=user_form.id";
$result = mysqli_query($conn,$sql);

$sql2 = "select count(id) as num
         from new_place_category_requests
         where status='pending'";
$result2 = mysqli_query($conn,$sql2);
$rowcount=mysqli_fetch_assoc($result2);
$sql3 = "select user_form.name as name, new_place_category_requests.*
         from new_place_category_requests join user_form
         on new_place_category_requests.user_id=user_form.id";
$result3 = mysqli_query($conn,$sql3);
include'../include/all_header.php';

?>
<main class="mt-5 pt-3">
	 <div class="container-fluid mt-5  pt-2">
	 	<h2>New Requests</h2>
		<table class="table table-striped table-bordered"> 
		         	  <?php if($rowcount['num']=='0'){?>
		         		  <tr><th>No New request given</th></tr>
		              <?php }else{?>
                             
                             <thead>
		         			<th>User Name</th>
		         			<th>District name</th>
		         			<th>Description</th>
		         			<th>Action</th>
		         		</thead>
		         		<tbody>
		         			<?php while($row=mysqli_fetch_assoc($result)){
		         				if($row['status']=='pending'){ ?>
		         			
		         			<tr>
		         				<td><?php echo $row['name']; ?></td>
		         				<td><?php echo $row['category_name']; ?></td>
		         				<td><?php echo $row['description']; ?></td>
			         			
			         		
			         			<td width="190">
		                            <a href="approve.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-success">Approve</a>	
		                           	<a href="disapprove.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Disapprove</a>
			         			</td>
		         			</tr>
		         			<?php } } ?>
		         		</tbody>
		         	  <?php } ?> 
		 </table>
		 <h2 style="text-align: center;">old requests</h2>
		 <table class="table table-striped table-bordered" >
		 	  <thead>
		         			<th>User Name</th>
		         			<th>District name</th>
		         			<th>Description</th>
		         			<th>Status</th>
		         			<th>Action</th>
		         		</thead>
		         		<tbody>
		         			<?php while($row=mysqli_fetch_assoc($result3)){
		         				if($row['status']!='pending'){ ?>
		         			
		         			<tr>
		         				<td><?php echo $row['name']; ?></td>
		         				<td><?php echo $row['category_name']; ?></td>
		         				<td><?php echo $row['description']; ?></td>
			         			<td ><p class="p-2 <?php if($row['status']=='success'){?>btn-success<?php } ?><?php if($row['status']=='pending'){?>btn-info<?php } ?> <?php if($row['status']=='reject'){?>btn-danger<?php } ?>" style = "border-radius: 25px;text-align: center;"><?php echo $row['status'];  ?></p></td>
			         		
			         			<td width="90">
		                            	
		                           	<a href="delete-request.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger w-100" onclick="return confirm('Are you sure?')">Delete</a>
			         			</td>
		         			</tr>
		         			<?php } } ?>
		         		</tbody>
		 </table>
	 </div>
</main>
<?php 
include'../include/footer.php';
 ?>
