<?php 
include '../../Register users/include/config.php';

$sql = "Select * From vehicles";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// $name = $row['brand_name'];
// echo $name;
// die();
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal |Admin Manage Brands   </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
	.succWrap{
	    padding: 10px;
	    margin: 0 0 20px 0;
	    background: #fff;
	    border-left: 4px solid #5cb85c;
	    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
  </style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Brands</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Listed  Brands</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
											<th>Vehicle Title</th>
											<th>Brand </th>
											<th>Status </th>
											<th>Price Per day</th>
											<th>Fuel Type</th>
											<th>Model Year</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>

										<tr>
										<th>#</th>
											<th>Vehicle Title</th>
											<th>Brand </th>
											<th>Status </th>
											<th>Price Per day</th>
											<th>Fuel Type</th>
											<th>Model Year</th>
											<th>Action</th>
				
										</tr>
										</tr>
									</tfoot>
									<tbody>
										  <?php
							                while($row = mysqli_fetch_assoc($result)){ 
							              ?>
										<tr>
											<!-- <td></td> -->
											<td><?php echo $row['id'];?></td>
											<td><?php echo $row['title'];?></td>
											<td><?php echo $row['brand'];?></td>
											<td><?php echo $row['status'];?></td>
											<td><?php echo $row['price'];?></td>
											<td><?php echo $row['fuel_type'];?></td>
											<td><?php echo $row['model_year'];?></td>
											<td><a href="edit_vehicle.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
											<a href="delete_vehicle.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>	
										<?php } ?>							
									</tbody>
								</table>
							</div>
						</div>		

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
