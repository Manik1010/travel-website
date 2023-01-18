<title>all Packages booking</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "SELECT package_payment_details.*, packages.title
        FROM package_payment_details JOIN packages 
        ON package_payment_details.package_id = packages.id";
$result = mysqli_query($conn,$sql);
include'../include/all_header.php';
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
         
           <a href="completed_bookings.php" class="btn btn-outline-success" style="float:right">Completed bookings</a>
           <h2>All package bookings</h2>
          
           <table class="table table-striped table-bordered"> 
         		<thead>
         			<tr>
         				<th>Customer Name</th>
         			    <th>Package Name</th>
         			    <th>Bikash No.</th>
         			    <th>Transaction Id</th>
         			    <th>booking Status</th>
         			    <th>Action</th>
         			</tr>
         			
         		</thead>
         		<tbody>
         		   <?php while($row=mysqli_fetch_assoc($result)){
		         				if($row['status']=='pending'){ ?>
         			 <tr>
         				 <td><?php 
         				      $name = $row['user_id'];
                              $namesql = "SELECT name FROM user_form where id = $name";

                              $nameresult = mysqli_query($conn,$namesql);
                              $namerow = mysqli_fetch_assoc($nameresult);
         				      echo $namerow['name']; ?>
         				   
         				 </td>
         				 <td><?php echo $row['title']; ?></td>
         				 <td><?php echo $row['bikash_number']; ?></td>
         				 <td><?php echo $row['transaction_id']; ?></td>
         				 <td>
         				 	<p class="p-2 <?php if($row['status']=='success'){?>btn-success<?php } ?><?php if($row['status']=='pending'){?>btn-info<?php } ?> <?php if($row['status']=='reject'){?>btn-danger<?php } ?>" style = "border-radius: 25px;text-align: center;"><?php echo $row['status'];  ?></p>
         				 </td>
         				 <td width="310">
         				 	
         				 	<a href="view_booking_details.php?id=<?php echo $row['id'];?>&title=<?php echo $row['title']; ?>"class=" btn btn-sm btn-outline-dark">booking details</a>
                            <a href="booking_approve.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-info" onclick="return confirm('Are you sure? Would you like to confirm the customer package booking?!')">approve</a>

                            <a href="booking_disapprove.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure? Want to cancel the customer package booking!')">disapprove</a>
	         			 </td>
         			 </tr>
         		    <?php } }?>
         		</tbody>
           </table>
      </div>
</main>

<?php 
include'../include/footer.php';
 ?>