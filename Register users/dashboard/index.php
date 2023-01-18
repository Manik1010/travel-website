<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT *
       FROM user_form
       WHERE id = '$user_id'";


$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$packageSql = "SELECT * FROM package_booking_details WHERE user_id = '$user_id' ";
$packageResult = mysqli_query($conn,$packageSql);
$packageBookings= mysqli_num_rows($packageResult);

$productSql = "SELECT * FROM shop_product_order WHERE user_id = '$user_id' ";
$productResult = mysqli_query($conn,$productSql);
$productOrders = mysqli_num_rows($productResult);

$mypostSql = "SELECT * FROM new_places WHERE user_id = '$user_id' ";
$mypostResult = mysqli_query($conn,$mypostSql);
$myPosts = mysqli_num_rows($mypostResult);

$myrequestSql = "SELECT * FROM new_place_category_requests WHERE user_id = '$user_id' ";
$myrequestResult = mysqli_query($conn,$myrequestSql);
$myRequests = mysqli_num_rows($myrequestResult);

//bar chart
$barSql = "SELECT MONTH(date) as m,COUNT(id) as num FROM package_booking_details GROUP by m";
$barResult = mysqli_query($conn,$barSql);

$barData = mysqli_fetch_assoc($barResult);

 while ($barData = mysqli_fetch_assoc($barResult)) {
    
    $month_name[] = date("F", mktime(0, 0, 0, $barData['m'], 10));
    $package_bookings[] = $barData['num'];


 }

$pieSql = "SELECT new_place_categories.name as dis ,COUNT(new_places.id) as num FROM new_place_categories JOIN new_places ON new_place_categories.id = new_places.category_id WHERE new_places.user_id = '$user_id' GROUP BY new_places.category_id";
$pieResult = mysqli_query($conn,$pieSql);
 while ($pieData = mysqli_fetch_assoc($pieResult)) {
    
    $district_name[] = $pieData['dis'];
    $num_posts[] = $pieData['num'];


 }

$notSql = "SELECT *  FROM messages WHERE user_id = '$user_id' order by id desc ";
$notResult = mysqli_query($conn,$notSql);

$num_msg = mysqli_num_rows($notResult);
include 'include/header.php';
 ?>
<?php
  function timeDistance($oldtime,$currentTime)
  {
      $timeFirst  = strtotime($oldtime);
      $timeSecond = strtotime($currentTime);  
      $differenceInSeconds = $timeSecond - $timeFirst;
      $min = (int)($differenceInSeconds/60);
      $hour = (int)($min/60);
      $years = floor($differenceInSeconds / (365*60*60*24));
      $months = floor(($differenceInSeconds - $years * 365*60*60*24) / (30*60*60*24));
      $days = floor(($differenceInSeconds - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
      if($differenceInSeconds<=60){
          echo $differenceInSeconds.' seconds';
      }
      elseif($min<=23)
      {
          echo $min.' minutes ago';
      }
      elseif($hour<=23)
      {
          echo $hour.' hours ago';
      }

      elseif($years > 0){
          printf("%d years  ago\n", $years);
      }
      elseif($years <= 0 && $months > 0){
          printf("%d months  ago\n", $months);
      }
      else
      {
          printf("%d days  ago\n", $days);
      }

  }
?>
    <main class="mt-5 pt-3">

      <div class="container-fluid mt-3 bg-light pt-5">

        <div class="row ">
          <div class="col-md-11">
            <h4>Dashboard</h4>
          </div>
          <div class="col">
             <button id="notification" type="button" class=" position-relative" style="border:none;background-color: white;">
                <img src="../../images/bell.png" >
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?php echo $num_msg;?>
                 
                </span>
              </button>
             
          </div>
          
        </div>
         <div id="box" style="display: none;float:right;border:1px solid;width: 300px;height: 500px;">
                <div class="content">
                  <?php while($msg = mysqli_fetch_assoc($notResult)){?>

                    <li style="list-style-type: none;padding: 10px;border:1px solid;margin-top: 10px;">
                      <span ><img src="../../images/profile.png"class="rounded p-1" width="30" > <strong>Admin</strong> </span>
                      <span style="float: right;">
                        <?php 
                           $today = new DateTime('now', new DateTimezone('Asia/Dhaka'));

                          $currentDate =$today->format('Y-m-d H:i:s');
                          
                          timeDistance($msg['sendOn'],$currentDate);
                              

                        ?>                    
                      </span><br>
                      <?php echo $msg['message'];?>
                      
                    </li>
                  <?php }?>                    
                </div>
           </div>
        <div class="row mt-3">

          <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Package bookings</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo $packageBookings;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>dashboard/booking/index.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Total Product Orders</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo  $productOrders;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>dashboard/shops/all_orders.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-secondary text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">My posts</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo $myPosts;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>dashboard/new places/index.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>

           <div class="col-md-3 mb-3">
            <div class="card bg-warning text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Requests</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo  $myRequests;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>dashboard/new places/all-requests.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Every month Package booking
              </div>
              <div class="card-body" >
                <canvas id="chartjs_bar" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                All districts posts
              </div>
              <div class="card-body">
                <canvas id="chartjs_pie" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
  <script>
 xValues = <?php  echo json_encode($month_name); ?>;

var barColors = ["red", "green","blue","orange","brown","gray","pink","#b91d47","#00aba9","#2b5797","#e8c3b9","#1e7145"];

new Chart("chartjs_bar", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data:<?php  echo json_encode($package_bookings); ?>,
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

<script>
 xValues = <?php  echo json_encode($district_name); ?>;

var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("chartjs_pie", {
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
<script>
  
 $(document).ready(function(){
     var i=1;
     $("#notification").on("click",function(){
          if(i%2==1){
            $("#box").css({"display": "block","overflow":"scroll","z-index":"-1"});
          }else{
            $("#box").css({"display": "none"}); 
          }
          i++;
      });
 });
</script>

</html>
