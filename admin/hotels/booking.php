<?php 
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$sql = "SELECT * FROM booking_info";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// die();
$sql = "SELECT * FROM pemant";
$result1 = mysqli_query($conn, $sql);
  
?>
<div class="col-md-12">
          <h2 style="text-align: center;">Bookings are here...</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
              	<th>Booking ID</th>
                <th>Bookers Name</th>
                <th>Booking Hotel</th>
                <th>Room Type</th>
                <th>No of Rooms</th>
                <th>Contact Number</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               <?php
                while($row = mysqli_fetch_assoc($result)){
                //Here start while loop
              
              ?>

              <tr>
              	<td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['h_name']?></td>
                <td><?php echo $row['r_type']?></td>
                <td><?php echo $row['r_type']?></td>
                <td><?php echo $row['phone']?></td>
                <td>
                  <a class="btn btn-danger" onclick="return confirm('Are You Sure!!!')" href="delete_booking.php?id=<?php echo $row['id'];?>">Delete</a>            
                </td> 
              </tr>
              <?php 
                // Here End while loop
              }
              ?>
            </tbody>
          </table>
    </div>
<div class="col-md-12">
          <h2 style="text-align: center;">Payment are here...</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
              	<th>ID</th>
                <th>Hotel Name</th>
                <th>Booker Id</th>
                <th>Booker Name</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               <?php
                while($row1 = mysqli_fetch_assoc($result1)){
                //Here start while loop
              
              ?>

              <tr>
              	<td><?php echo $row1['id']?></td>
                <td><?php echo $row1['h_name']?></td>
                <td><?php echo $row1['u_id']?></td>
                <td><?php echo $row1['name']?></td>
                <td><?php echo $row1['tk']?></td>
                <td>
                  <a class="btn btn-info" href="view_hotel.php?h_id=<?php echo $row['h_id'];?>">View</a>
                  <a class="btn btn-danger" onclick="return confirm('Are You Sure!!!')" href="delete_hotel.php?h_id=<?php echo $row['h_id'];?>">Delete</a>            
                </td> 
              </tr>
              <?php 
                // Here End while loop
              }
              ?>
            </tbody>
          </table>
    </div>


<?php
include('include/footer.php');
?>