<title>View-details</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$id = $_GET['id'];
$title = $_GET['title'];

$sql = "SELECT package_booking_details.*, package_payment_details.screenshot
        FROM package_booking_details JOIN package_payment_details
        ON package_booking_details.id = package_payment_details.book_id
        WHERE package_payment_details.id = $id
";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_assoc($result);

include'../include/all_header.php';

?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        <a href="all_booking.php" class="btn btn-outline-dark" >Back</a>
         	<table class="table table-striped table-bordered mt-2"> 
         		<tr>
         			<th >Title:</th>
         			<td><?php echo $title;?></td>
         		</tr>
         		<tr>
         			<th >Number of guests:</th>
         			<td><?php echo $data['num_of_guests'];?></td>
         		</tr>
                <tr>
                    <th width="350">What is the need of the guide?:</th>
                    <td>
                        <?php if($data['tour_guide']==200){
                                 echo "Yes";
                          }else{
                                 echo "No";
                          } 
                        ?>
                        
                    </td>
                </tr>
                <tr>
                    <th >Booking Date:</th>
                    <td><?php $date=date_create($data['date']); 
                         echo date_format($date,"D d M Y ");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th >Payment screenshot:</th>
                    <td><img src="../<?php echo $data['screenshot']; ?>" width="100%"></td>
                </tr>
         		
         	</table>
      
          
           
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
