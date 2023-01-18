<?php include'../include/all_header.php'; 
         $conn = mysqli_connect('localhost', 'root','','travel website');
         $allTesSql = "SELECT * FROM testimonials";
         $allTesResult = mysqli_query($conn, $allTesSql);
?>
<div class="row" style="margin-top: 150px; margin-left: 280px;">
    <div class="col-md-12">
        <table class="table table-bordered">
            <!-- table heading -->
            <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
  
            <!-- loop through an array of testimonials -->
            <?php while($row = mysqli_fetch_assoc($allTesResult)){
// echo $row['id'];
// die();
            	?>
            <tr >
                <td > <?php echo $row['id'];?> </td>
                <td>
                    <img src="./<?php echo $row['picture'];?>" style="width: 150px;" />
                </td>
                <td > <?php echo $row['name'];?> </td>
                <td > <?php echo $row['designation'];?> </td>
                <td > <?php echo $row['comment'];?> </td>
                <td>
                    
                    <!-- form to delete testimonial -->
                    <form action="delete_store.php?id=<?php echo $row['id'];?> " method="post">
                        <!-- <input type="hidden"  required /> -->
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>