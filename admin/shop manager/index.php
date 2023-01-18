<?php

include("includes/header.php");

if(!isset($_SESSION['manager_name'])){
   header('location:Adminpages/loginadmin.php');
}

 $newOrderSql = "SELECT * FROM shop_product_payments WHERE status = 'pending'";
 $newOrderResult = mysqli_query($conn,$newOrderSql);
 $no_newOrder = mysqli_num_rows($newOrderResult);

 $SuccessOrderSql = "SELECT * FROM shop_product_payments WHERE status = 'success'";
 $SuccessOrderResult = mysqli_query($conn,$SuccessOrderSql);
 $no_SuccessOrder = mysqli_num_rows($SuccessOrderResult);

 
 $totalProductSql = "SELECT * FROM shop_products";
 $totalProductResult = mysqli_query($conn,$totalProductSql);
 $no_totalProduct = mysqli_num_rows($totalProductResult);

 $totalSaleSql = "SELECT SUM(shop_products.salesPrice*shop_product_order.quantity)as total FROM shop_products JOIN shop_product_order ON shop_products.id = shop_product_order.product_id JOIN shop_product_payments ON shop_product_order.id = shop_product_payments.order_id WHERE shop_product_payments.status = 'success' ";
 $totalSaleResult = mysqli_query($conn,$totalSaleSql);
 $totalSale = mysqli_fetch_assoc($totalSaleResult);

 //bar chart
$barSql = "SELECT MONTH(date) as m, SUM(shop_product_order.quantity * shop_products.salesPrice) as num FROM shop_product_order JOIN shop_products ON shop_product_order.product_id = shop_products.id JOIN shop_product_payments ON shop_product_order.id = shop_product_payments.order_id 
  WHERE shop_product_payments.status = 'success'
  GROUP by m";
$barResult = mysqli_query($conn,$barSql);

$barData = mysqli_fetch_assoc($barResult);

 while ($barData = mysqli_fetch_assoc($barResult)) {
    
    $month_name[] = date("F", mktime(0, 0, 0, $barData['m'], 10));
    $package_bookings[] = $barData['num'];


 }

 

 //pie chart
$pieSql = "SELECT shop_categories.title as cat, COUNT(shop_product_payments.id) as num  FROM shop_categories JOIN shop_products ON shop_categories.id = shop_products.category_id JOIN shop_product_order ON shop_products.id = shop_product_order.product_id JOIN shop_product_payments ON shop_product_order.id = shop_product_payments.order_id WHERE shop_product_payments.status = 'success' GROUP by cat";
$pieResult = mysqli_query($conn,$pieSql);
 while ($pieData = mysqli_fetch_assoc($pieResult)) {
    
    $district_name[] = $pieData['cat'];
    $num_posts[] = $pieData['num'];
 }

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>View all Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/Add Category</b>
              <a href="<?php echo logoutUrl;?>" class="btn btn-danger" style="margin-left: 10px;">LogOut</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $no_newOrder;?></h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $no_SuccessOrder;?></h3>

                <p>Success Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $no_totalProduct;?></h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $totalSale['total'];?></h3>

                <p>Total Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Every month Sales
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
                All categories sales
              </div>
              <div class="card-body">
                <canvas id="chartjs_pie" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
    </section>
   </div>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

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
      text: "sales of 2022"
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
  type: "doughnut",
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
<?php
  include("includes/footer.php");
?>