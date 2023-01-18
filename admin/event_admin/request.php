<?php 

include('../include/all_header.php'); 
 

include '../../Register users/include/config.php';

$sql = "Select * From eventrequest";
$result = mysqli_query($conn, $sql);

?> 

<!-- <!DOCTYPE html>
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
<body> -->
	<!-- <h1>Allha</h1> -->
  <main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
	<div class="col-md-12">
          <h2>Here are wating for all Approval Event...</h2>
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
                  <a href="approval.php?e_id=<?php echo $row['event_id'];?>" class="btn btn-sm btn-info"> Approve </a>&nbsp;&nbsp;
                  <a href="dis_approval.php? e_id=<?php echo $row['event_id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> Disapprove </a>                     
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