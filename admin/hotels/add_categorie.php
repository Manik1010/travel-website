<?php 
include('include/header.php'); 
include('include/nab.php');
?>
<br><br>
<a  href="categorie.php"> <span><i class="bi bi-arrow-left btn btn-outline-success" style="margin-left: 5%;">Back</i></span></a>
<br>
<h2 style="margin-left: 40%;"> Add new categories </h2>
<br><br><br><br>
<form method="POST" action="store_categories.php" style="margin-left: 20%;">
	<div class="form-group">
		<label for="brand" style="font-style: italic;">Category Name</label><br><br>
		<input style="background-color: white;" type="text" class="form-control" id="brand" placeholder="Distict Name" name="name">
	</div><br><br>

	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<br><br><br><br><br><br>

<?php
include('include/footer.php');
?>