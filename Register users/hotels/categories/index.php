<?php
$categories_id= $_GET['categories_id']; 
include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php'); 
}



$sql = "SELECT * FROM hotel_categories where categories_id = '$categories_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$d_name = $data['dist_name'];
// echo $d_name;

// $sql1 = "SELECT * FROM hotels where dist_name = '$d_name' ";
$sql1 = "SELECT * FROM hotels
          LEFT JOIN
          stars ON stars.id = hotels.h_id where dist_name = '$d_name'
          ORDER BY stars DESC ";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql1);
// $data1 = mysqli_fetch_assoc($result1);
// $d_name = $data1['h_loaction'];
// echo $d_name;

include'../../include/register_header2.php';

?>
 <link rel="stylesheet" href="../../Dashboard/css/dataTables.bootstrap5.min.css" />
 <style>


.sidenav {
  
  width: 160px;
  position: absolute;
  z-index: 1;

  background-color: #111;
  overflow-x: hidden;
  margin-top: 3%;
  padding: 5px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
  border: 1px solid white;
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color: green;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


</style>
<section style="margin-left: 10%;margin-right: 10%;"> 
    <div class="p-5 bg-success text-white rounded text-center">
    <h1 class=" "><?php echo $d_name; ?> Hotels</h1>

  </div>
  <div class="sidenav">
     <h3 style="color:white;text-align: center;">Select District</h3> 
      <a href="../index.php">All district</a>
      <?php
        //while($data1 = mysqli_fetch_assoc($result1)){  
      ?>  
      <a href="index.php?categories_id=<?php echo $categories_id?>"><?php echo $d_name; ?></a>
      <?php
        //}
      ?>
  </div>
  <div class="main">  
  
    <div class="mt-2 table-responsive table-striped " style="font-size: 16px">
                  <table
                    
                    class="table table-striped table-bordered data-table"
                    style="width: 100%; "
                  >
                    <thead>
                      <tr>
                        <th>All hotels</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                     while($data2 = mysqli_fetch_assoc($result2))
                     { ?>
                         <tr style="border:1px solid black;">
                        
                        <td >
                            <div class="row">
                               <div class="col-md-4">
                                    <img src="../../../admin/<?php echo $data2['image']; ?>" alt="" width="250" >
                               </div>
                               <div class="col-md-5">
                                    <h2 class="pt-3"><b><?php echo $data2['h_name']?></b></h2> 
                                    <img src="../../../images/location.png" width="20">&nbsp;&nbsp;<strong><?php echo $data2['h_loaction']?></strong>
                                    <p><img src="../../../images2/time.png" width="20">&nbsp;&nbsp;<strong>Available</strong></p>
                                    <p style="width:200px;background-color:skyblue;padding:5px;border-radius:20px;font-size:12px;"><img src="../../../images/room.png" width="20">&nbsp;&nbsp;&nbsp;DOUBLE BED ( 4 PERSON SHARING)</p>
                                    
                               </div>
                               
                               <div class="col-md-1" style="border-left: 1px solid black;height: 170px;">

                               </div>
                               <div class="col-md-2 mt-5">
                                 <a href="../rating.php?h_id=<?php echo $data2['h_id'];?>">Review Score</a>
                                 <p><bold><?php echo $data2['stars'];
                                  ?> </bold></p>
                                 <a href="hotel.php?h_id=<?php echo $data2['h_id'];?>" class="btn btn-outline-primary w-100 " style="font-size:16px;"> more details</a> 
                        
                      
                         
                                 
                               </div>
                            </div>
               
                        </td>
                      </tr>
                    <?php
                         }
                     ?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Latest Jobs</th>
                        

                      </tr>
                    </tfoot>
                  </table>
                </div>
                </div>
</section>
    

</body>
 <script src="../dashboard/js/jquery-3.5.1.js"></script>
 <script src="../dashboard/js/jquery.dataTables.min.js"></script>
 <script src="../dashboard/js/dataTables.bootstrap5.min.js"></script>
 <script src="../dashboard/js/script.js"></script>
</html>