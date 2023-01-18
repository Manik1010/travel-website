<?php 
include '../../Register users/include/config.php';
// $id = $_GET['id'];
session_start(); 

$user_id = $_SESSION['user_id'];
// echo $user_id;
// die();
// $mydate = "2010-05-12 13:57:01";
// $month = date("M",strtotime($mydate));
// echo $month;

// die();
$sql_adm = mysqli_query($conn, "select COUNT(user_type) as total FROM user_form where user_type = 'event manager'; ");
$adm = mysqli_fetch_assoc($sql_adm);

$sql_evn = mysqli_query($conn, "select COUNT(event_id) as total FROM event; ");
$evn = mysqli_fetch_assoc($sql_evn);

$sql_evnreq = mysqli_query($conn, "select COUNT(event_id) as total FROM eventrequest; ");
$evnreq = mysqli_fetch_assoc($sql_evnreq);

$years = "SELECT YEAR(date) as y FROM event GROUP by y";
$yResult = mysqli_query($conn,$years);

// while($yData = mysqli_fetch_assoc($yResult)){ 
//   echo $yData['y'];
// }
// die();

//bar chart 
$barSql = "SELECT MONTH(date) as m,COUNT(event_id) as num FROM event GROUP by m";
// $barSql = "SELECT YEAR(date) as y, MONTH(date) as m, COUNT(event_id) as num FROM event GROUP by m";
$barResult = mysqli_query($conn,$barSql);
// $barData = mysqli_fetch_assoc($barResult);
// var_dump($barData);
// die();

 while ($barData = mysqli_fetch_assoc($barResult)) {
    
    $month_name[] = date("F", mktime(0, 0, 0, $barData['m'], 10));
    // echo json_encode($month_name);
    $package_bookings[] = $barData['num'];
    // var_dump($barData);
    // echo $barData;
    // echo json_encode($package_bookings);
    // $y_event[] = $barData['y'];
    // echo json_encode($y_bookings);
    
 }
// die();
  // var_dump($month_name);
  // echo $arr;
 // $arrLength = count($arr);
 // echo json_encode($package_bookings);
 // echo json_encode($month_name);
 // echo 
 // $len = count($package_bookings)+(12- count($package_bookings) );
 // $len = (11- count($package_bookings) );
 // echo $len;

//  for($x = 0; $x < $len;  $x++) {
//   // echo $month_name[$x];
//   // echo "<br>";
//   $month = $month_name[$x];


//   // if ( $month_name[$x] !="January" or $month_name[$x] !="February" or $month_name[$x] !="March" or $month_name[$x] != "April" or $month_name[$x] != "May" or $month_name[$x] != "June" or $month_name[$x] !="July" or $month_name[$x] != "August" or $month_name[$x] != "September" or $month_name[$x] !="October" or $month_name[$x] !="November")
//   // {
//   //   echo "December";
//   // }
//   // if ( $month_name[$x] !="January" or $month_name[$x] !="February" or $month_name[$x] !="March" or $month_name[$x] != "Aprile" or $month_name[$x] != "May" or $month_name[$x] != "June" or $month_name[$x] !="July" or $month_name[$x] != "August" or $month_name[$x] != "September" or $month_name[$x] !="October" or $month_name[$x] !="December")
//   // {
//   //   echo "November";
//   // }
// }
 // while(2){

 //  echo "manik";
 // }

  // die();
?>
  
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard For EventMannager</h1>

  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total Admin: <?php echo $adm['total'];?></h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Events</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><h4>Total Event:<?php echo $evn['total'];?></h4></div>
            </div>
            <!-- <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div> -->
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
              <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">18</div> -->
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $evnreq['total'];?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
<!-- Begin Page Content -->
        <!-- Charts-->
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Every month Events
              <div style="margin-left: 450px;">
                Select City :<select name="cars" id="cars">
                  <?php
                    while($yData = mysqli_fetch_assoc($yResult)){  
                  ?> 
                  <option value="volvo"><?php echo $yData['y']; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="card-body">
              <canvas id="chartjs_bar" width="400" height="300"></canvas>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="card" style="margin-left: 100px;">
           <!--  <div class="card-header">
              All Categories Event
            </div> -->
            <div class="card-body">
              <canvas id="chartjs_pie" width="400" height="300" style="margin-left: 10px;"></canvas>
            </div>
          </div>
        </div>
      </div>

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
      text: "BL"
    }
  }
});
</script>
<!-- 
<script>

var xValues = ["Sylhet", "Dhaka", "Chittagong", "Barishal", "Cumilla","Khulna","Rajshahi","Mymensingh",];
var yValues = [15,7,40,8,5,10,6,9];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("chartjs1_pie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
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
 -->
</html>

<?php
include('includes/scripts.php');
include('includes/footer.php');

?>

