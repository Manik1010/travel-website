<?php

include('../include/all_header.php'); 

include '../../Register users/include/config.php';

$sql = "Select * From user_form where user_type = 'event manager'";
$result = mysqli_query($conn, $sql);

?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
	<!-- <h1>Allha</h1> -->
	<div class="col-md-12">
          <h2>All Admin User Here...</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
              	<th>ID</th>
                <th>Name</th>
                <th>User Type</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Deat of Birth</th>
                <th>Current Address</th>
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
                <td><?php echo $row['user_type']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['sex']?></td>
                <td><?php echo $row['dob']?></td>
                <td><?php echo $row['currentAddress']?></td>
              
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