<title>New places</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}

// $sql = "SELECT new_place_categories.name as name, new_places.*
//         FROM new_places JOIN new_place_categories
//         ON new_places.category_id=new_place_categories.id";
$sql = "Select * From event ";        
$result = mysqli_query($conn,$sql);
include'../include/all_header.php';
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
         
           <!-- <a href="#" class="btn btn-outline-success" style="float:right">add place</a> -->
           <h2>All Event are here...</h2>
           <table class="table table-striped table-bordered"> 
            <thead>
              <th>Event_Id</th>
              <th>District name</th>
              <th>Date</th>
              <th>image</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php while($row=mysqli_fetch_assoc($result)){
                ?>
              
              <tr>
                <td><?php echo $row['event_id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                
                <td><?php echo $row['date'];  ?></td>
                <td><img src="../<?php echo $row['img'];?>" width="200"></td>
                <td width="250"><a href="view.php?id=<?php echo $row['event_id']; ?>"class=" btn btn-sm btn-outline-success">view</a>
                <a href="edit.php?id=<?php echo $row['event_id']; ?>"class=" btn btn-sm btn-outline-info">edit</a>
                <a href="delete.php?id=<?php echo $row['event_id']; ?>"class=" btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">delete</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
