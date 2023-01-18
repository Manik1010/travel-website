<title>View-details</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$id = $_GET['id'];
$sql = "SELECT new_place_categories.name as name, new_places.*
        FROM new_places JOIN new_place_categories
        ON new_places.category_id=new_place_categories.id
        where new_places.id = '$id'";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_assoc($result);

include'../include/all_header.php';

?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        <a href="index.php" class="btn btn-outline-dark" >Back</a>
         	<table class="table table-striped table-bordered mt-2"> 
         		<tr>
         			<th width="150">Title:</th>
         			<td><?php echo $data['title'];?></td>
         		</tr>
         		<tr>
         			<th width="150">District Name:</th>
         			<td><?php echo $data['name'];?></td>
         		</tr>
                <tr>
                    <th width="150">Date:</th>
                    <td><?php echo $data['date'];?></td>
                </tr>
                <tr>
                    <th width="150">Image:</th>
                    <td><img src="../<?php echo $data['image']; ?>" width="100%"></td>
                </tr>
         		<tr>
         			<th width="150">Description:</th>
         			<td style="text-align: justify;"><?php echo $data['description'];?></td>
         		</tr>
         	</table>
      
          
           
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
