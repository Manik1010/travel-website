<?php

include('../include/all_header.php'); 

include '../../Register users/include/config.php';

$sql = "Select * From hotels";
$result = mysqli_query($conn, $sql);

?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
  <!-- <h1>Allha</h1> -->
  <div class="col-md-12">
          <h2 style="text-align: center;">All Hotels are here for Supper admin...</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Hotel ID</th>
                <th>Hotel Name</th>
                <th>Hotel District</th>
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
                <td><?php echo $row['h_id']?></td>
                <td><?php echo $row['h_name']?></td>
                <td><?php echo $row['dist_name']?></td>
                <td><?php echo $row['h_loaction']?></td>
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
include('../include/footer.php'); 
?>