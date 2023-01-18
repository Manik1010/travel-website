<title>Edit district-informations</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$id = $_GET['id'];
$sql = "select * from restaurent_categories
        where id= '$id'";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_assoc($result);
include'../include/all_header.php';?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-4  pt-2">
           <a href="index.php" class="btn btn-outline-dark" >Back</a>
          <h2 class="mt-2">Edit District info</h2>
           <form action="update.php?id=<?php echo $id;?>" method="POST" >
           	    <div class="mb-3">
				  <label for="district_name" class="form-label">District Name</label>
				  <input type="text" class="form-control" name="district_name" value="<?php echo $data['name'];?>"> 
				</div>
				
				 <button type="submit" class="btn btn-outline-primary">Submit</button>
           </form>
            
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
