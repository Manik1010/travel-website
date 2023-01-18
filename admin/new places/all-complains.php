<title>New places</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "SELECT *
        FROM new_place_complains
        order by id desc
        ";
$result = mysqli_query($conn,$sql);

include'../include/all_header.php';
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
         
          
           <h2>All new place Complain</h2>
           <table class="table table-striped table-bordered"> 
         		<thead>
         			<th>Title</th>
         			<th>Complain message</th>
              <th>Status</th>
         			<th>Action</th>
         		</thead>
         		<tbody>
         			<?php while($row=mysqli_fetch_assoc($result)){
         				?>
         			
         			<tr>
         				<td><?php echo $row['title']; ?></td>
	         			<td><?php echo $row['message']; ?></td>
	         			<td ><p class="p-2 <?php if($row['status']=='success'){?>btn-success<?php } ?><?php if($row['status']=='pending'){?>btn-secondary<?php } ?> <?php if($row['status']=='reject'){?>btn-danger<?php } ?> <?php if($row['status']=='updated'){?>btn-info<?php } ?>" style = "border-radius: 25px;text-align: center;"><?php echo $row['status'];  ?></p></td>
	         			
	         			<td width="220">
                            <?php if($row['action']=='0'){?>
                              <a href="block-place.php?id=<?php echo $row['id']; ?>&place_id=<?php echo $row['new_place_id']; ?>"class=" btn btn-sm btn-outline-primary "  onclick="return confirm('Are you sure?')" >Block</a>
                            <?php  }else{  ?>
                               <a href="unblock-place.php?id=<?php echo $row['id']; ?>&place_id=<?php echo $row['new_place_id']; ?>"class=" btn btn-sm btn-outline-dark " onclick="return confirm('Are you sure?')">Unblock</a>
                            <?php } ?>
                            <?php if($row['status']!='reject'){ ?>
                              <a href="cancel-complain.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger " onclick="return confirm('Are you sure?')">cancel</a>
                            <?php }?>
                            
                            <a href="delete-complain.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger <?php if($row['status']=='reject'){?>w-50<?php } ?> " onclick="return confirm('Are you sure?')">delete</a>
                         
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
