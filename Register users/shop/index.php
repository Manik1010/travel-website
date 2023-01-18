<title>shop</title>
<?php
$page = "shop";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT *  FROM shop_products where status=1";
$result = mysqli_query($conn,$sql);

$sql2 = "SELECT * FROM shop_cart 
         where user_id = '$user_id'";
$result2 = mysqli_query($conn,$sql2);
$total_cart_item = mysqli_num_rows($result2);

include'../include/register_header.php';
?>
<style type="text/css">
  .row .card .image img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
}
#items{
  font-size: 12px;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<section class="packages">
    <a href="all_carts.php"style="float: right;" type="button" class=" position-relative">
    <img src="../../images/cart.png">
    <span id ="items"class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" >
      <?php echo $total_cart_item;?>
      <span class="visually-hidden">unread messages</span>
    </span>
  </a>
   <h1 class="heading-title">All Travelling Products</h1>
   <div class="row" style="margin-left: 6%;margin-right: 5%;">
      <div class="col-md-4" style="border:1px solid;border-radius:20px;padding-left: 10px; padding-right: 10px;font-size: 16px;">
        
        <select name="categories" id="catid" style="padding: 10px;background-color: white;">
          <option>select category</option>
          <?php
                 $categorySql = "SELECT * from shop_categories";
                 $categoryResult = mysqli_query($conn,$categorySql);
                 while($row = mysqli_fetch_assoc($categoryResult)){?>
                  <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
          <?php } ?>
         
        </select>
      </div>
      <div class="col-md-4" id="subcatdiv" style=" margin-left:2%;border:1px solid;border-radius:20px;padding-left: 10px; padding-right: 10px;font-size: 16px;">
       
        <input type="text" name="subcategory_id"  disabled placeholder="please select category">
      </div>
      <div class="col-md-3">
         <button class="btn btn-success p-3" id="find"  style=" width:25rem;margin-left:2%;border:1px solid;border-radius:20px;padding-left: 10px; padding-right: 10px;font-size: 16px;">find</button>
      </div>
   </div>
   <div class="row" id="products" style="margin-left: 5%;margin-right: 5%;">
      <?php while($row = mysqli_fetch_assoc($result)){?>
        <div class="card" style="width: 30rem;border-radius: 25px; margin-left: 2%;margin-top: 2%;padding: 0">
          <img src="../../admin/shop manager/<?php echo $row['image'];?>" class="card-img-top" alt="..." style="border-radius: 25px 25px 0px 0px;height: 280px;padding: 0;width:295px; object-fit: cover;transition: .2s linear;">
          <div class="card-body">
          <h3><?php echo $row['productTitle'];?></h3>
            
           <p style="margin-top:2%;"> <img src="../../images2/cost.png " width="30px" height="30px">
            <b style="font-size: 14px;">Cost:  <?php echo $row['salesPrice'];?> Tk</b>
            <span style="margin-left:2%;font-size: 14px;font-weight: bold;color:red"><del style=" text-decoration: line-through;"><?php echo $row['actualPrice'];?> Tk</del> </span> <span style="float: right;font-size: 14px;font-weight: bold;background-color: green;color:white;padding: 10px;border-radius: 25px;"><?php echo $row['discount'];?>%  OFF</span>
            <p>
            
            <a href="single.php?id=<?php echo $row['id'];?>" class="btn btn-outline-dark p-3" style="display: block;margin-top: 15px;font-size:18px">More Details</a>
          </div>
        </div>
     <?php } ?> 
   </div>
  
 
   

</section>



<?php include'../include/footer.php';?>

<script>
  $(document).ready(function(){
    $("#catid").change(function(){
       var catid = $(this).val();
       
       $.ajax({
          url:'sub-categories-show-ajax.php',
          type: 'POST',
          data:{
            catid: catid
          },
          success: function(data){
             $("#subcatdiv").replaceWith(data);
          },
       });
    });

     $("#find").on("click",function(){
       var catid = $("#catid").val();
       var subcatid = $("#subcatid").val();
       if(catid=== 'select category'){
         alert("please select category");
       }
      
       else{
         $.ajax({
            url:'find-ajax.php',
            type: 'POST',
            data:{
              catid: catid,
              subcatid: subcatid
            },
            success: function(data){
               $("#products").replaceWith(data);
            },
         });
       }
      
     });
});
</script>