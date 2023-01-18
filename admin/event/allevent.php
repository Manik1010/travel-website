<?php 
include '../../Register users/include/config.php';

$sql = "Select * From event ORDER BY event_id DESC";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// echo $row['event_id'];
// die();
include('includes/header.php');  
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
  <style>
    h1{
      text-align: center;
    }

  </style>
</head>
<body>

	<div class="col-md-12">
          <h2>All Event are here...</h2>
          <br>
          <table class="table">
            <thead>
              <tr>
                <th>Event_ID</th>
                <th>User_ID</th>
                <th>Title</th>
                <th>ViewPermission</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               <?php
                while($row = mysqli_fetch_assoc($result)){
                //Here start while loop
              
              ?>

              <tr>
                <td><?php echo $row['event_id']?></td>
                <td><?php echo $row['user_id']?></td>
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['viewpermission']?></td>
                <!-- <td><?php echo $row['ParticepetOption']?></td> -->

                <td>
                  <a class="btn btn-info" href="view.php?event_id=<?php echo $row['event_id'];?>">View</a>
                  <a class="btn btn-warning" href="edit.php?event_id=<?php echo $row['event_id'];?>">Edit</a>
                  <a class="btn btn-danger" onclick="return confirm('Are You Sure!!!')" href="delete.php?event_id=<?php echo $row['event_id'];?>">Delete</a>
                  
                </td> 
              </tr>
              <?php
                // Here End while loop
              }
              ?>
            </tbody>
          </table>
        </div>
</body>
<?php
include('includes/scripts.php');
?>
</html>