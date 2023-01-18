<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

 $userSql = "SELECT * FROM user_form where user_type != 'admin' ";
 $userResult = mysqli_query($conn, $userSql);
 $no_of_users = mysqli_num_rows($userResult);
 
 $packageSql = "SELECT * FROM package_payment_details
             WHERE status = 'pending' ";
 $packageResult = mysqli_query($conn, $packageSql);
 $no_of_packages = mysqli_num_rows($packageResult);

 $requestSql = "SELECT * FROM new_place_category_requests
                 WHERE status = 'pending' ";
 $requestResult = mysqli_query($conn, $requestSql);
 $no_of_requests = mysqli_num_rows($requestResult);
 

 $approvalSql = "SELECT * FROM user_form
                 WHERE status = 0 ";
 $approvalResult = mysqli_query($conn, $approvalSql);
 $no_of_approvals = mysqli_num_rows($approvalResult);

//bar chart
$barSql = "SELECT user_form.name, COUNT(new_places.id) as num FROM user_form JOIN new_places ON user_form.id = new_places.user_id GROUP by new_places.user_id";
$barResult = mysqli_query($conn,$barSql);



 while ($barData = mysqli_fetch_assoc($barResult)) {
    
    $user_name[] = $barData['name'];
    $num_posts[] = $barData['num'];

 }

$pieSql = "SELECT SUM(shop_products.salesPrice*shop_product_order.quantity)as total FROM shop_products JOIN shop_product_order ON shop_products.id = shop_product_order.product_id JOIN shop_product_payments ON shop_product_order.id = shop_product_payments.order_id WHERE shop_product_payments.status = 'success' UNION SELECT SUM(packages.weekdays_cost * package_booking_details.num_of_guests) FROM packages JOIN package_booking_details ON packages.id = package_booking_details.package_id JOIN package_payment_details ON packages.id = package_payment_details.package_id WHERE package_payment_details.status='success' UNION SELECT SUM(tk) FROM pemant UNION SELECT SUM(tk) FROM pemant_car";
$pieResult = mysqli_query($conn,$pieSql);



 while ($pieData = mysqli_fetch_assoc($pieResult)) {
    
   
    $all_incomes[] = $pieData['total'];

 }
include 'include/header.php';
 ?>

    <main class="mt-2 pt-3">
      <div class="container-fluid mt-5 bg-light pt-5">
        <div class="row ">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Total Users</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo $no_of_users;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>dashboard/article/updatearticle.php?id=<?php echo $id;?>" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Pending booking</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo  $no_of_packages;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>packages/all_booking.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-secondary text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Requests</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo $no_of_requests;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>new place-categories/all-requests.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
           <div class="col-md-3 mb-3">
            <div class="card bg-warning text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Approvals</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php echo  $no_of_approvals;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>all_approvals.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
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
                All New place posts
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
                All income areas
              </div>
              <div class="card-body">
                <canvas id="chartjs_pie" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
        
        <!-- User List-->
        <div class="row" >
           <h1 align="center">All User List</h1>
           <div class="search">
              <input type="text" class="form-control" id="search" placeholder="search by name,email,user type" >
           </div>
           <div  id = "table-data">
                <table class="table  table-striped" style="margin-left: 1%;margin-right: 1%;">
                   <tr>
                       <th>SL no.</th>
                       <th>Name </th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>User Type</th>
                       <th>action</th>
                   </tr>
                <?php
                 $i = 1;
                 while($userData = mysqli_fetch_assoc($userResult)){
                ?>
                   <tr>
                       <td><?php echo $i++;?></td>
                       <td><?php echo $userData['name'];?></td>
                       <td><?php echo $userData['email'];?></td>
                       <td><?php echo $userData['number'];?></td>
                       <td><?php echo $userData['user_type'];?></td>
                       <td>
                          <?php 
                            
                             if($userData['b_status'] == 0){?>
                                <a href="block_user.php?id=<?php echo $userData['id'];?>" onclick="return confirm('Are you sure? Would you like to  block this user!')" class=" btn btn-sm btn-outline-danger"> Block</a>

                             <?php 
                             }
                             else{?>
                               <a href="unblock_user.php?id=<?php echo $userData['id'];?>"  class=" btn btn-sm btn-outline-success" onclick="return confirm('Are you sure? Want to unblock this user!')">Unblock</a>
                         <?php 
                             }
                          ?>
                         

                       </td>
                   </tr>
                <?php } ?>
               </table>
           </div>
          
        </div>
        <!-- end user list-->
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
   xValues = <?php  echo json_encode($user_name); ?>;

   var barColors = [ "orange","brown","pink","#b91d47","#00aba9","#2b5797","#e8c3b9","#1e7145"];

new Chart("chartjs_bar", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data:<?php  echo json_encode($num_posts); ?>,
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
var xValues = ["Shops", "Packages", "Hotels", "Cars"];

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
      data: <?php  echo json_encode($all_incomes); ?>,
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

<script type="text/javascript">
    $(document).ready(function(){
        $("#search").on("keyup",function(){
              var search_term = $(this).val();
              $.ajax({
                   url:"live-search.php",
                   type: "POST",
                   data:{ search: search_term},
                   success:function(data){
                      $("#table-data").html(data);
                   }
              });
        }); 
    });
</script>
</html>
