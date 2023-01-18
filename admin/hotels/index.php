<?php  
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php'; 
$sql_app = mysqli_query($conn, "select COUNT(h_id) as total FROM hotels; ");
$app = mysqli_fetch_assoc($sql_app);

$sql_adm = mysqli_query($conn, "select COUNT(user_type) as total FROM user_form where user_type = 'hotel manager'; ");
$adm = mysqli_fetch_assoc($sql_adm);

$sql = mysqli_query($conn, "select COUNT(id) as total FROM booking_info; ");
$mag = mysqli_fetch_assoc($sql);

$sql = "SELECT * FROM booking_info";
$result = mysqli_query($conn, $sql);
// die();

 $sql2 = "SELECT COUNT(hotels.h_id) as num, hotels.dist_name as district
           FROM hotels join hotel_categories
           on hotels.dist_name = hotel_categories.dist_name
           GROUP by hotels.dist_name";
 $result2 = mysqli_query($conn, $sql2);

 while ($data2 = mysqli_fetch_assoc($result2)) {
   
    $district_name[] = $data2['district'];
    $num_of_hotels[] = $data2['num'];
       
 }     
// echo json_encode($district_name); 
// echo json_encode($num_of_hotels);
//  // echo $district_name;
//  die();    

$pieSql = "SELECT dist,COUNT(dist) FROM booking_info GROUP by dist";

$pieResult = mysqli_query($conn,$pieSql);
 while ($pieData = mysqli_fetch_assoc($pieResult)) {
    
    $dist_name[] = $pieData['dist'];
    $num_posts[] = $pieData['COUNT(dist)'];

 } 

?>
   
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <!-- <h4 class="mb-2">Total Managers:</h4> -->
                                <p class="mb-2">Total Managers</p>
                                <p class="mb-0"><?php echo $adm['total'];?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Hotels</h4>
                                <h6 class="mb-0"><?php echo $app['total'];?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Booking</h4>
                                <h6 class="mb-0"><?php echo $mag['total'];?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start --> 
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4" style="height: 100px;">
                                <h6 class="mb-0" style="height: 100px;">District Hotels</h6>
                                <a href="">Show All</a>
                            </div>
                            <!-- <canvas id="worldwide-sales"></canvas> -->
                            <canvas id="bar_chart"></canvas>
                        </div>
                    </div>
                     <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Districtwise Hotels Booking</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="pie_chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Booking Details</h6>
                        <a href="booking.php">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Chack in</th>
                                    <th scope="col">Chack out</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Room</th>
                                    <!-- <th scope="col">Status</th> -->
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($row = mysqli_fetch_assoc($result)){
                                //Here start while loop
                              ?>

                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?php
                                     $date=date_create($row['date1']);
                                     echo date_format($date,"D d M Y ");
                                    ?></td>
                                    <td><?php
                                     $date1=date_create($row['date2']); 
                                     echo date_format($date1,"D d M Y ");
                                    ?></td>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['r_type']?></td>
                                    <!-- <td><?php echo $row['r_type']?></td>
                                    <td><?php echo $row['phone']?></td> -->
                                    <td><a class="btn btn-sm btn-primary" href="booking.php">Detail</a></td>
                                </tr>
                                 <?php 
                                    // Here End while loop
                                  }
                                  ?>
                                <tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
<script>
xValues = <?php  echo json_encode($district_name); ?>;

var barColors = ["red", "green","blue","orange","brown","gray","pink","#b91d47","#00aba9","#2b5797","#e8c3b9","#1e7145"];

new Chart("bar_chart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data:<?php  echo json_encode($num_of_hotels); ?>,
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>
<!-- <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url : "load-city.php",
      type : "POST",
      dataType : "JSON",
      success : function(data){
        $.each(data, function(key, value){
          $("#city-box").append("<option value='" + value.city + "'>" + value.city + "</option>");
        });
      }
    });

    // Load Table Data
    $("#city-box").change(function(){
      var city = $(this).val();

      if(city == ""){
        $("#table-data").html("");
      }else{
        $.ajax({
          url : "load-table.php",
          type : "POST",
          data : { city : city },
          success : function(data){
            $("#table-data").html(data);
          }
        });
      }
    })
  });
</script> -->
<script>
 xValues = <?php  echo json_encode($dist_name); ?>;

var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("pie_chart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: <?php  echo json_encode($num_posts); ?>,
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>
   
<?php
include('include/footer.php');
?>