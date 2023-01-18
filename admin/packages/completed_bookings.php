<title>all Packages completed booking</title>
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

$sql2 = "SELECT package_booking_details.*, package_payment_details.screenshot
        FROM package_booking_details JOIN package_payment_details
        ON package_booking_details.id = package_payment_details.book_id
       
";
$result2 = mysqli_query($conn,$sql2);


include'../include/all_header.php';
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
         
           <a href="all_booking.php" class="btn btn-outline-info" style="float:right">new bookings</a>
           <h2>All package bookings</h2>
          
           <table class="table table-striped table-bordered"> 
         		<thead>
         			<tr>
         				<th>Customer Name</th>
         			    <th>Package Name</th>
         			    <th>Booking Date</th>
         			    <th>Tour guide</th>
         			    <th>Adults</th>
         			    <th>Action</th>
         			</tr>
         			
         		</thead>
         		<tbody>
         		   <?php while($row=mysqli_fetch_assoc($result) and $row2=mysqli_fetch_assoc($result2)){
		         				if($row['status']=='success' and $row['view']==0){ ?>
         			 <tr>
         				 <td><?php 
         				      $name = $row['user_id'];
                              $namesql = "SELECT name FROM user_form where id = $name";

                              $nameresult = mysqli_query($conn,$namesql);
                              $namerow = mysqli_fetch_assoc($nameresult);
         				      echo $namerow['name']; ?>
         				   
         				 </td>
         				 <td><?php echo $row['title']; ?></td>
         				 <td>
                      <?php $date=date_create($row2['date']); 
                         echo date_format($date,"D d M Y ");
                        ?>
                 </td>
         				 <td>
                      <?php if($row2['tour_guide']==200){
                                 echo "Yes";
                          }else{
                                 echo "No";
                          } 
                        ?>
                 </td>
         				 <td>
         				 	    <?php echo $row2['num_of_guests'];?> persons
         				 </td>
         				 <td width="210">
                     <a href="view.php?id=<?php echo $row['package_id']; ?>"class=" btn btn-sm btn-outline-dark">view package</a>
                     <a href="remove_booking.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">remove</a>
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