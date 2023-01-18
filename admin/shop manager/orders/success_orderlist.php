<?php
include('../includes/header.php');
if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$sql = "SELECT shop_product_payments.*, shop_product_order.*,shop_products.image, shop_products.productTitle,shop_products.salesPrice,user_form.name,user_form.email FROM shop_product_payments JOIN shop_product_order ON shop_product_order.id = shop_product_payments.order_id JOIN shop_products ON shop_product_order.product_id=shop_products.id join user_form ON shop_product_order.user_id = user_form.id
    where shop_product_payments.status='success' and shop_product_payments.view = '0'
";
$result = mysqli_query($conn,$sql);

?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>View all orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/All orders</b>
              <a href="<?php echo logoutUrl;?>" class="btn btn-danger" style="margin-left: 10px;">LogOut</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <div class="card card-primary m-2">
              
              <!-- /.card-header -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">all orders</h3>
                <a href="success_orderlist.php" class="btn btn-success" style="float:right;" >success orderlist</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th >Order No.</th>
                      <th>Product title</th>
                      <th>product img</th>
                      
                      <th>quantity</th>
                      <th>Customer Name</th>
                      <th>Customer Email</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $i = 1;

                     while($row = mysqli_fetch_assoc($result)){
                         $total_pay =  $row['salesPrice']*$row['quantity'] ;
                      ?>
                    <tr>
                      <td><?php echo $row['order_id'];?></td>
                      <td><?php echo $row['productTitle'];?></td>
                      <td><img src="../<?php echo $row['image'];?>" width="60"></td>
                      <td><?php echo $row['quantity'];?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <td width="150px">
                         <button type="button" id="message-modal" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#msgModal" data-id='<?php echo $row["user_id"];?>' data-oid='<?php echo $row["order_id"];?>'>
                          Message
                        </button>
                        <a href="remove_order.php?order_id=<?php echo $row['order_id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure? Want to remove the customer product order!')"  ><i class="far fa fa-trash"></i></a>
                        
                       
                      </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
       <!-- Modal for message-->
      <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class= 'mb-3'>
                      <textarea id="message" class='form-control' rows='10'style='font-size: 16px;'></textarea>
                          
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id='msg-submit' data-dismiss="modal">Send</button>
              </div>
            </div>
          </div>
      </div>

     <!--end modal-->

 <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script type="text/javascript">
   $(document).ready(function(){
      var user_id = 0;
      var order_id = 0;
      $("#message-modal").on("click",function(){
          user_id = $(this).data("id");
          order_id = $(this).data("oid");
      });
      $("#msg-submit").on("click",function(){
          var message = $("#message").val();
         
           $.ajax({
               url:'../../message-store.php',
               type: "POST",
               data: {
                       user_id: user_id,
                       book_id: order_id,
                       message: message,
                       type: 'shop'
                    },
               success:function(data){
                if(data==0){
                  alert('message not send');
                }
                else{
                  alert("message send successfully");
                  $('#message').val('');
                }
                
               }
           });

      });
   });
</script>
<?php 
 include('../includes/footer.php');
?>