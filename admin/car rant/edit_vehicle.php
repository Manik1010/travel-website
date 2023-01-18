<?php
$id = $_GET['id'];
// echo $id;

include '../../Register users/include/config.php'; 
$sql = "SELECT * FROM vehicles WHERE id ='$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// echo $row['air_conditioner']; 
// die();

// if(isset($row['air_conditioner'])){
// 	echo "Manik";
// }else{
// 	echo "Molla";
// }
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
	
	<title>Car Rental Portal | Admin Edit Vehicle</title>

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
					
						<h2 class="page-title">Add Edit Vehicle</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Information</div>

									<div class="panel-body">


											<form action="update_vechical.php?v_id=<?php echo $id;?>" method="post" class="form-horizontal" enctype="multipart/form-data">
												<div class="form-group">
													<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="vehicletitle" value="<?php echo $row['title']; ?>" class="form-control" >
													</div>

													<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select class="selectpicker" name="brandname" >
														<!-- <option value=""> Select </option> -->
															<?php //while ($row1 = mysqli_fetch_assoc($result)) { ?>
									                            <option value="<?= $row['brand'] ?>"> <?= $row['brand'] ?> </option>
									                          <?php //} ?>
														</select>
													</div>
												</div>
																							
												<div class="hr-dashed"></div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
														<div class="col-sm-10">
															<textarea class="form-control" name="overview"  rows="3" ><?php echo $row['overview']; ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-2 control-label">Price Per Day<span style="color:red">*</span></label>
														<div class="col-sm-4">
															<input type="text" name="priceperday" value="<?php echo $row['price']; ?>" class="form-control" >
														</div>
													<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select class="selectpicker" name="fueltype" >
															<!-- <option value=""> Select </option> -->

															<option value="<?= $row['fuel_type'] ?>"><?= $row['fuel_type'] ?></option>

														</select>
													</div>
												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="modelyear" value="<?php echo $row['model_year'];?>" class="form-control" >
													</div>

													<label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="set" value="<?php echo $row['set_capacity']; ?>" class="form-control" >
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<h4><b>Upload Images</b></h4>
													</div>
												</div>


												<div class="form-group">
													<div class="col-sm-4">
														<!-- <div class="col-sm-8"> 
															<input type="file" name="img1" required>
														</div> -->
														Image 1 <img src="<?php echo $row['image1'];?>" width="300" height="200" style="border:solid 1px #000">
													   <!-- Image 1 <span style="color:red">*</span><input type="file" name="img1" value="<?php echo $row['image1']; ?>"> -->
													   <div class="col-sm-8">
															<input type="file" name="img1" >
														</div>
													</div>
													<div class="col-sm-4">
														Image 2 <img src="<?php echo $row['image2'];?>" width="300" height="200" style="border:solid 1px #000">
													    <div class="col-sm-8">
															<input type="file" name="img2">
														</div>
													</div>
													<div class="col-sm-4">
													    Image 3 <img src="<?php echo $row['image3'];?>" width="300" height="200" style="border:solid 1px #000">
													    <div class="col-sm-8">
															<input type="file" name="img3">
														</div>
													</div>
												 </div>


												<div class="form-group">
													<div class="col-sm-4">
														
													    Image 4 <img src="<?php echo $row['image4'];?>" width="300" height="200" style="border:solid 1px #000">
													    <div class="col-sm-8">
															<input type="file" name="img4">
														</div>
													</div>
													<div class="col-sm-4">
													   Image 5 <img src="<?php echo $row['image5'];?>" width="300" height="200" style="border:solid 1px #000">
													    <div class="col-sm-8">
															<input type="file" name="img5">
														</div>													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
																			

								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">Accessories</div>
												<div class="panel-body">
													<div class="form-group">
														<div class="col-sm-3">
															<?php if(isset($row['air_conditioner'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="airconditioner" name="airconditioner" checked value="Air Conditioner">
																<label for="airconditioner"> Air Conditioner </label>
															</div>
														<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="airconditioner" name="airconditioner" checked value="0">
																<label for="airconditioner"> Air Conditioner </label>
															</div>
														<?php } ?>
														</div>
														<div class="col-sm-3">
															<?php if(isset($row['power_doorlocks'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" checked value="Power Door Locks">
																<label for="powerdoorlocks"> Power Door Locks </label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" checked value="0">
																<label for="powerdoorlocks"> Power Door Locks </label>
															</div>
															<?php } ?>
														</div>
														<div class="col-sm-3">
															<?php if(isset($row['antilock_system'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" checked value="antilockbrakingsys">
																<label for="antilockbrakingsys"> AntiLock Braking System </label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" checked value="0">
																<label for="antilockbrakingsys"> AntiLock Braking System </label>
															</div>
															<?php } ?>
														</div>
														<?php if(isset($row['brake_assist'])){ ?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="brakeassist" name="brakeassist" checked value="brakeassist">
															<label for="brakeassist"> Brake Assist </label>
														</div>
														<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="brakeassist" name="brakeassist" checked value="0">
																<label for="brakeassist"> Brake Assist </label>
															</div>
															<?php } ?>
													</div>



													<div class="form-group">
														<div class="col-sm-3">
															<?php if(isset($row['power_steering'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="powersteering" name="powersteering" checked value="powersteering">
																<label for="inlineCheckbox5"> Power Steering </label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="powersteering" name="powersteering" checked value="0">
																<label for="powersteering"> Power Steering </label>
															</div>
															<?php } ?>
														</div>
														<div class="col-sm-3">
															<?php if(isset($row['driver_airbag'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="driverairbag" name="driverairbag" checked value="Driver Airbag">
																<label for="driverairbag">Driver Airbag</label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="driverairbag" name="driverairbag" checked value="0">
																<label for="driverairbag"> Driver Airbag </label>
															</div>
															<?php } ?>
														</div>
														<div class="col-sm-3">
															<?php if(isset($row['passenger_airbag'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="passengerairbag" name="passengerairbag" checked value="Passenger Airbag">
																<label for="passengerairbag"> Passenger Airbag </label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="passengerairbag" name="passengerairbag" checked value="0">
																<label for="passengerairbag"> Passenger Airbag </label>
															</div>
														<?php } ?>
														</div>
														<!-- <div class="col-sm-3"> -->
														<?php if(isset($row['power_windows'])){ ?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="powerwindow" name="powerwindow" checked value="Power Windows">
															<label for="powerwindow"> Power Windows </label>
														</div>
														<?php } else{ ?>
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="powerwindow" name="powerwindow" checked value="0">
															<label for="powerwindow"> Power Windows </label>
														</div>	
														<?php } ?>
													</div>


													<div class="form-group">
														<div class="col-sm-3">
															<?php if(isset($row['cd_player'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="checked" name="cdplayer" checked value="CD Player">
																<label for="cdplayer"> CD Player </label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="cdplayer" name="cdplayer" checked value="0">
																<label for="cdplayer"> CD Player </label>
															</div>
															<?php } ?>
														</div>
														<div class="col-sm-3">
															<?php if(isset($row['central_locking'])){ ?>
															<div class="checkbox h checkbox-inline">
																<input type="checkbox" id="centrallocking" name="centrallocking" checked value="Central Locking">
																<label for="centrallocking">Central Locking</label>
															</div>
															<?php } else{ ?>
															<div class="checkbox h checkbox-inline">
																<input type="checkbox" id="centrallocking" name="Central Locking" checked value="0">
																<label for="centrallocking">Central Locking</label>
															</div>
															<?php } ?>
														</div>
														<div class="col-sm-3">
															<?php if(isset($row['crash_sensor'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="crashcensor" name="crashcensor" checked value="Crash Sensor">
																<label for="crashcensor"> Crash Sensor </label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="crashcensor" name="crashcensor" checked value="0">
																<label for="crashcensor"> Crash Sensor </label>
															</div>
															<?php } ?>
														</div>
														<div class="col-sm-3">
															<?php if(isset($row['leather_seats'])){ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="leatherseats" name="leatherseats" checked value="Leather Seats">
																<label for="leatherseats"> Leather Seats </label>
															</div>
															<?php } else{ ?>
															<div class="checkbox checkbox-inline">
																<input type="checkbox" id="leatherseats" name="leatherseats" checked value="0">
																<label for="leatherseats"> Leather Seats </label>
															</div>
															<?php } ?>
														</div>
												    </div>

											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Restart</button>
													<button class="btn btn-primary" name="submit" type="submit">Save</button>
												</div>
											</div>

										</form>


									</div>
								</div>
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