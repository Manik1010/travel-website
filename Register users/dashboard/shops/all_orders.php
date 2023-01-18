<title> all product orderlist</title>
<?php 
 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
} 

$user_id = $_SESSION['user_id'];

$block_status = $_SESSION['b_status'];

$sql = " SELECT shop_products.*,shop_product_order.quantity, shop_product_order.id as order_id
         FROM shop_products JOIN shop_product_order
         on shop_products.id = shop_product_order.product_id
         WHERE user_id = $user_id
         ORDER BY shop_product_order.id DESC
       ";
$result = mysqli_query($conn,$sql);

$no = mysqli_num_rows($result);






include '../include/all_header.php';
?>
<style type="text/css">
	
	.activated{
         background-color: green;
	}
	.tab{
		margin-left: 30%;
		margin-right: 30%;
	}
	.tab button{
		border-radius: 25px;
		font-size: 18px;
	}
  .accordion-flush .accordion-item .accordion-button {
    border-radius: 0;
    border: 1px solid;
    margin: 5px;
}
.accordion-body{
  background-color: lightgray;
  border: 1px solid black;
  margin-left: 3%;
  margin-right: 2%;
  margin-bottom: 2%;
}
</style>
<div class="row">
  <div class="col-md-10">
      <h2>Welcome To Tour koro</h2>
      <h6>You can see your product order progress </h6>
  </div>

</div>

<div class="row">

 
              <div id="London" class="tabcontent">
                <h1 class="mt-5 ">product order List</h1>
                 
                 
                  <div class="accordion accordion-flush " id="accordionFlushExample<?php echo $row['order_id'];?>" >
                    <?php while ($row = mysqli_fetch_assoc($result)){ ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $row['order_id'];?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="info">
                                  <h5 style="color: #067CD2;">Order No #<?php echo $no--;?>

                                  <?php 
                                            $order_id = $row['order_id'];
                                            $countsql = "SELECT status
                                                         FROM shop_product_payments
                                                         WHERE order_id = '$order_id'";
                                             $resultcount= mysqli_query($conn,$countsql);
                                             $data = mysqli_fetch_assoc($resultcount);
                                             if(isset($data['status'])){
                                              if($data['status']=='pending'){
                                                  echo '<span style="right: 5%;border-radius: 25px;background-color: black; padding: 10px;color: #fff;position: absolute;">pending</span>';
                                             }
                                             elseif ($data['status']=='success') {
                                                    echo '<span style="right: 5%;border-radius: 25px;background-color: green; padding: 10px;color: #fff;position: absolute;">Successfull</span>';
                                             }
                                             elseif ($data['status']=='rejected') {
                                                    echo '<span style="right: 5%;border-radius: 25px;background-color: red; padding: 10px;color: #fff;position: absolute;">Rejected</span>';
                                             }
                                             }
                                             
                                             else{
                                                  echo '<span style="right: 5%;border-radius: 25px;background-color: #FECACA; padding: 10px;color: #C53968;position: absolute;">comfirmed</span>';
                                             }
                                      ?>
                                         
                                  </h5>

                                  <h6 class="mt-3"> <?php echo $row['productTitle'];?></h6>
                                  <p><img src="../../../images/discount.png" width="20"> <?php echo $row['discount'];?>&nbsp;&nbsp;&nbsp;&nbsp; <img src="../../../images/taka.png" width="20"> <del style=" text-decoration: line-through;color: red;"><?php echo $row['actualPrice'];?> Tk</del>&nbsp;&nbsp;&nbsp;&nbsp; <img src="../../../images/taka.png" width="20"> <?php echo $row['salesPrice'];?></p>
                                  
                                    </div> 
                                 </button>
                            </h2>
                            <div id="flush-collapseOne<?php echo $row['order_id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample<?php echo $row['order_id'];?>">

                                <div class="row accordion-body">
                                   <div class="col-md-6">
                                     
                                      <h5>General Information</h5>
                                      <span><img src="../../../admin/shop manager/<?php echo $row['image'];?>" width="150"> </span> 
                                      
                                      
                                   </div>
                                   <div class="col-md-6">
                                    <h5 style="float: right;color: #067CD2;">pricing</h5><br><br>
                                    

                                    <p>Price <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row['salesPrice'];?> ৳</span></p>
                                    <p>Quantity <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row['quantity'];?></span></p>
                                    <hr>
                                    <h5>Total Amount <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row['salesPrice']*$row['quantity'];?> ৳</span></h5><br>
                                  <?php 
                                       if(isset($data['status'])){
                                         if($data['status']=='success' ){?>
                                            <h5 style="color: green">your product send within 1-3 days, if any question you can chat with us using chating system</h5>
                                   <?php }elseif ($data['status']=='pending') {
                                          echo '<h5 style="color: red">please wait 1-2 hours, if your document is correct, then your status will change</h5>';
                                   }}else{if($block_status==0){?>
                                          <a href="buy.php?order_id=<?php echo $row['order_id'];?>&quantity=<?php echo $row['quantity'];?>&product_id=<?php echo $row['id'];?>" class="btn btn-success w-100" >Buy now</a>
                                        <?php }else{
                                          echo ' <br><br><span class="bg-danger p-4 fw-bold text-center" style="display:block;font-size:12px;" ">Your account has been blocked! please request to admin for unblock</span>';
                                        }
                                   }?>
                                   </div>   
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                  
                  </div>
              
              </div>

             
<?php
include '../include/footer.php';
 ?>