<?php
session_start();
$page = "events"; 
include '../include/config.php';
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

// $sql2 = "SELECT *  FROM event
//          WHERE viewpermission = '$usertype' or viewpermission = 'all' ORDER BY event_id DESC";
$sql2 = "SELECT *  FROM event ORDER BY event_id DESC";

$result2 = mysqli_query($conn, $sql2);


include'../include/register_header.php';
?>

  <div class="container">

  <div class="row">
    <!-- <h1>Manik</h1> -->
    <?php while ($row = mysqli_fetch_assoc($result2)){ ?>
        <div class="col-md-9 mt-4 content">

           <h3 style=" font-size: 20px; text-align:left;"><b><?php echo $row['title'];?></b></h3>
            <h6 style=" font-size: 18px; text-align:left;"><i><?php echo $row['date'];?></i></h6>
           
           <p style="text-align:justify; font-size: 16px;"><?php 
           echo substr($row['event'],0,821);?>...<a href="show.php?event_id=<?php echo $row['event_id']; ?>">Read more</a></p>
         </div>
         <div class="col-md-3 mt-4">
              <img src="../../admin/<?php echo $row['img']; ?>"  style="margin-top:50px;margin-bottom: 50px;" height="120" width="245">
         </div>
        <?php }?> 
   </div>
</div>

</script>
    <script src="https://use.fontawesome.com/021eb02a1a.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </body>
</html>

