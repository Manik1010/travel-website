<title>complain-place</title>
<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];
$sql = "select title 
        from new_places";
$result = mysqli_query($conn,$sql);


include '../include/all_header.php';
?>
<div class="container-fluid  bg-light">
      	   <a href="all-complains.php" class="btn btn-outline-dark">Back</a>
           <h2>Complain</h2>
	       <p>Type new place title</p>  
	       <form action="store-complain.php" method="post">
	       	   <div>
                <label for="title">New place Title</label>
                <select name="title" class="form-control">
                  <option> Select title </option>
                  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                      <option value="<?= $row['title'] ?>"> <?= $row['title'] ?> </option>
                   <?php } ?>
                 </select>
               </div>
	           <div class="form-group">
	                  <label for="message">Message</label>
	                  <textarea class="form-control" name="message" rows="5"></textarea>
	           </div><br>

	           <button type="submit"  class="btn btn-outline-danger mb-5">Submit</button>
	       </form>
           
               	
</div>

<?php
include '../include/footer.php';

 ?>
