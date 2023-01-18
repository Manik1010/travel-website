<title>View-details</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$id = $_GET['id'];
$sql = "SELECT *
        FROM packages
        where id = '$id'";
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
                    <th width="150">Duration:</th>
                    <td><?php echo $data['duration'];?></td>
                </tr>
                <tr>
                    <th width="150">Tour Type:</th>
                    <td><?php echo $data['tour_type'];?></td>
                </tr>
                <tr>
                    <th width="150">Max Group Size:</th>
                    <td><?php echo $data['max_size'];?></td>
                </tr>
                <tr>
                    <th width="150">Images:</th>
                    <td><img style="margin:2%;height:180px;width: 28%;" src="../<?php echo $data['image1']; ?>">
                        <img style="margin:2%;height:180px;width: 28%;" src="../<?php echo $data['image2']; ?>" >
                        <img style="margin:2%;height:180px;width: 28%;"src="../<?php echo $data['image3']; ?>" >
                    </td>
                </tr>
                <tr>
                    <th width="180">General Information:</th>
                    <td><?php echo $data['general_info'];?></td>
                </tr>
                <tr>
                    <th width="150">Breakfast:</th>
                    <td><?php echo $data['breakfast'];?></td>
                </tr>
                <tr>
                    <th width="150">lunch:</th>
                    <td><?php echo $data['lunch'];?></td>
                </tr>
                <tr>
                    <th width="150">Snacks:</th>
                    <td><?php echo $data['snacks'];?></td>
                </tr>
                <tr>
                    <th width="150">Dinner:</th>
                    <td><?php echo $data['dinner'];?></td>
                </tr>
                <tr>
                    <th width="150">Included:</th>
                    <td><?php echo $data['included'];?></td>
                </tr>
                <tr>
                    <th width="150">Exclude:</th>
                    <td><?php echo $data['exclude'];?></td>
                </tr>
                <tr>
                    <th width="150">Title2:</th>
                    <td><?php echo $data['title2'];?></td>
                </tr>
                <tr>
                    <th width="150">Persons:</th>
                    <td><?php echo $data['persons'];?> persons</td>
                </tr>
                <tr>
                    <th width="150">Weekend Cost:</th>
                    <td><?php echo $data['weekend_cost'];?> tk</td>
                </tr>
                <tr>
                    <th width="150">Weekdays Cost:</th>
                    <td><?php echo $data['weekdays_cost'];?> tk</td>
                </tr>
                <tr>
                    <th width="150">Itinerary:</th>
                    <td><?php echo $data['itinerary'];?></td>
                </tr>

           
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
