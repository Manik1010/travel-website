<?php 
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$h_id= $_GET['h_id'];

$sql = "SELECT * FROM hotels WHERE h_id = '$h_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
 
?> 
<section>
	<br>
	<div class="row">
		<br>
		<div class="category" style=" text-align: center;">
	          <h3 style="font-size: 22px;">Hotel : <?php echo $data['h_name'];?> </h3>
	    </div>
		<div class="col-md-8">
			<img src="../<?php echo $data['image']; ?>" width="940" height="400">
		</div>
		<div class="col-md-4">
			<br><br>
			<h4>Distict: <?php echo $data['dist_name'];?></h4>
			<h4>Location: <?php echo $data['h_loaction'];?></h4>
			<p>Discription: <?php echo $data['discreption'];?></p>
		</div>
	</div>
	<br><br><br>
	<div class="row">
		
		<div class="category" style=" text-align: center;">
	         <h3 style="font-size: 22px;">Most popular facilities:</h3>
	    </div>
		<div class="col-md-6">
			<p><?php echo $data['facilitie1'];?></p>
			<p><?php echo $data['facilitie2'];?></p>
			<p><?php echo $data['facilitie3'];?></p>
			<p><?php echo $data['facilitie4'];?></p>
		</div>
		<div class="col-md-6" >
			<br><br>
			<p><?php echo $data['facilitie5'];?></p>
			<p><?php echo $data['facilitie6'];?></p>
			<p><?php echo $data['facilitie7'];?></p>
		</div>
	</div>
</section>

<?php
include('include/footer.php');
?>