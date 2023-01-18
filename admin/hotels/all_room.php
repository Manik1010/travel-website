<?php 
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn, $sql);
 
?> 
<div class="col-md-12">
          <h2 style="text-align: center;">All Rooms are here...</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
              	<th>Room ID</th>
                <th>Hotel Name</th>
                <th>Room Type</th>
                <th>Location</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               <?php
                while($row = mysqli_fetch_assoc($result)){
                //Here start while loop
              
              ?>

              <tr>
              	<td><?php echo $row['r_id']?></td>
                <td><?php echo $row['h_name']?></td>
                <td><?php echo $row['type']?></td>
                <td><?php echo $row['location']?></td>
                <td>
                  <a class="btn btn-info" href="view_room.php?r_id=<?php echo $row['r_id'];?>">View</a>
                  <a class="btn btn-danger" onclick="return confirm('Are You Sure!!!')" href="delete_hotel.php?r_id=<?php echo $row['r_id'];?>">Delete</a>            
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