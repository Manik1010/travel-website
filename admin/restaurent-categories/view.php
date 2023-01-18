<title>View district-deatails</title>
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
include'../include/all_header.php';

?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        <a href="index.php" class="btn btn-outline-dark" >Back</a>
         	<table class="table table-striped table-bordered mt-2"> 
         		<tr>
         			<th width="150">Category_id:</th>
         			<td><?php echo $data['id'];?></td>
         		</tr>
         		<tr>
         			<th width="150">District Name:</th>
         			<td><?php echo $data['name'];?></td>
         		</tr>
         		
         	</table>
      
          
           
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
