<title> all requests</title>
<?php 
 $page = "newPlace";
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];

$sql = "select * from new_place_category_requests
        where user_id = '$user_id'
        order by id desc";
$result = mysqli_query($conn,$sql);

include '../include/all_header.php';
?>
<h2>All New place requests</h2>
<table class="table table-striped table-bordered"> 
         		<thead>
         			
         			<th>District name</th>
         			<th>Description</th>
         			<th>Status</th>
         			<th>Action</th>
         		</thead>
         		<tbody>
         			<?php while($row=mysqli_fetch_assoc($result)){
         				if($row['view']==0){?>         			
         			<tr>
         				<td><?php echo $row['category_name']; ?></td>
	         			<td><?php echo $row['description']; ?></td>
	         			<td ><p class="p-2 <?php if($row['status']=='success'){?>btn-success<?php } ?><?php if($row['status']=='pending'){?>btn-info<?php } ?> <?php if($row['status']=='reject'){?>btn-danger<?php } ?>" style = "border-radius: 25px;text-align: center;"><?php echo $row['status'];  ?></p></td>
	         		    <?php if($row['status']=='pending') { ?>
	         			<td width="100">
                            <a href="cancel-request.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger w-100" onclick="return confirm('Are you sure?')">cancle</a>
	         			</td>
                        <?php }else{?>
                            <td>
                                 <a href="remove-request.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger w-100" onclick="return confirm('Are you sure?')">remove</a>
                            </td>
                           
                        <?php } ?>
                             
         			</tr>
         			<?php } } ?>
         		</tbody>
    </table>

<?php
include '../include/footer.php';
 ?>