<?php
	include '../include/config.php';
	$sql = "SELECT * FROM brand ";
	$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IMAGE</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- 	<div class="banner-card" >
		<img src="car.jpeg">
		<div class="banner-text">
			<h1>Manik Molla</h1>
			<p>This is Manik hear. ............. </p>
		</div>
	</div>
 --><?php while ($row = mysqli_fetch_assoc($result)){ if($row['id'] % 2 == 0){ ?>
	<div>
		
		<div>
			<h1>BL Manik M <?php echo $row['id'] ?></h1>
			<p>This is Manik hear. ............. </p>
		</div>
		
	</div>
	<?php } else { ?>
	<div>
		<div>
			<h1>Manik M</h1>
			<p>This is Manik hear Odd. ............. </p>
		</div>
	</div>
	<?php } } ?>

</body>
</html>