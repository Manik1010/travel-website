<title>Edit terms & conditions</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$id = $_GET['id'];
$sql = "select * from package_terms_conditions
        where id= '$id'";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_assoc($result);
include'../include/all_header.php';?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

<main class="mt-5 pt-3">
      <div class="container-fluid mt-5 bg-light pt-2">
      	 <a href="all_terms_conditions.php" class="btn btn-outline-dark">Back</a>
          <h2>Update Terms & Condition</h2>
           <form action="update_terms_conditions.php?id=<?php echo $data['id'];?>" method="POST" >
           	    <div class="mb-3">
				  <label for="district_name" class="form-label">Payment Method Name</label>
				  <input type="text" class="form-control" name="payment_method" value="<?php echo $data['payment_method'];?>"> 
				</div>
				<div class="mb-3">
				  <label for="description" class="form-label">Terms & conditions</label>
				  <textarea class="form-control" id="editor" name="payment_rules" rows="10"><?php echo $data['terms_conditions'];?></textarea>
				</div>

				 <button type="submit" class="btn btn-outline-primary">Submit</button>
           </form>
            
      </div>
</main>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php 
include'../include/footer.php';
 ?>
