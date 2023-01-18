<?php 
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$r_id= $_GET['r_id'];

$sql = "SELECT * FROM rooms WHERE r_id = '$r_id' ";
$result = mysqli_query($conn, $sql);
$value = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM multiple_images";
$res = mysqli_query($conn, $sql2);
$data = mysqli_fetch_assoc($res);

?> 
<section>
	<div class="row">
		<div class="col-md-8">
			<img src="upload/<?php echo $d['image_name']; ?>" width="940" height="400">
		</div>
		<div class="col-md-4">
			<br><br>
			<h3 style="font-size: 22px;">Hotel : <?php echo $value['h_name'];?> </h3>
			<h4>Room Types: <?php echo $value['type'];?></h4>
			<h4>Location: <?php echo $value['location'];?></h4>
			<p>Discription: <?php echo $value['discreption'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<h4 style="text-align: center;">Room facilities:</h4>
			<div class="row">
				<div class="col-md-6">
					<br><br>
				   	<p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r1']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r2']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r3']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r4']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r5']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r6']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r7']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r8']; ?></p>

		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r9']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r10']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r11']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r12']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r13']; ?></p>
				</div>
				<div class="col-md-6">
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r14']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r15']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r16']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r17']; ?></p><p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r1']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r18']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r19']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r20']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r21']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r22']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r23']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r24']; ?></p>
		              <p><img src="../../Register users/hotels/categories/logo/right1.jpeg" width="30" height="30"> <?php echo $value['r25']; ?></p>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<br><br>
			<h4 style="text-align: center;">In your private bathroom:</h4>
			<div>
				<p><img src="../../Register users/hotels/categories/logo/right.jpg" width="50" height="50"> <?php echo $value['b1']; ?></p>
                <p><img src="../../Register users/hotels/categories/logo/right.jpg" width="50" height="50"> <?php echo $value['b2']; ?></p>
                 <p><img src="../../Register users/hotels/categories/logo/right.jpg" width="50" height="50"> <?php echo $value['b3']; ?></p>
                <p><img src="../../Register users/hotels/categories/logo/right.jpg" width="50" height="50"> <?php echo $value['b4']; ?></p>
                <p><img src="../../Register users/hotels/categories/logo/right.jpg" width="50" height="50"> <?php echo $value['b5']; ?></p>
                <p><img src="../../Register users/hotels/categories/logo/right.jpg" width="50" height="50"> <?php echo $value['b6']; ?></p>
                <p><img src="../../Register users/hotels/categories/logo/right.jpg" width="50" height="50"> <?php echo $value['b7']; ?></p>
			</div>

		</div>
	</div>

</section>

<?php
include('include/footer.php'); 
?>