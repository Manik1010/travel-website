<?php 

 $id = $_GET['u_id'];
 // echo $id;
 // die();

include '../../include/config.php';
//die();
// $sql = "SELECT * FROM pemant WHERE id=$id ";
$sql = "SELECT * FROM pemant";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PaymentPage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    <br><br><br>

    <div class="cintainer">
      <div class="row">
        <!-- Left side bar -->
        <div class="col-md-2">
          <a class="btn btn-info" href="index.php;">Back</a>
        </div>
        <!-- Right side Bar -->
        <div class="col-md-10">
          <h2>Payment info are here...</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <!-- <th>User_Id</th> -->
                <th>Booker_Name</th>
                <th>Fee</th>
                <th>Tran_Id</th>
                <th>Payment_Type</th>
                <th>Phone</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row1= mysqli_fetch_assoc($result)){
                //Here start while loop
              
              ?>

              <tr>
                <td><?php echo $row1['id']?></td>
                <!-- <td><?php echo $row1['user_id']?></td> -->
                <td><?php echo $row1['name']?></td>
                <td><?php echo $row1['tk']?></td>
                <td><?php echo $row1['tranjation_id']?></td>
                <td><?php echo $row1['payment_type']?></td>
                <td><?php echo $row1['phone']?></td>
              </tr>
              <?php
                // Here End while loop
              }
              ?>
            </tbody>
          </table>
        </div>
        
      </div>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>