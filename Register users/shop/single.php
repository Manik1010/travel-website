<title>product details</title>
<?php
$page = "shop";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$b_status = $_SESSION['b_status'];
$id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$sql = "SELECT *  FROM shop_products where id = $id";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);


$stock_product =  $data['stock'];


$sql2 = "SELECT *
        FROM shop_cart where user_id=$user_id";
$result2 = mysqli_query($conn,$sql2);
$total_cart_item = mysqli_num_rows($result2);

include'../include/register_header.php';
?>
<style type="text/css">
  .carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 5rem;
    height: 5rem;
    background-color: black;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%;
}
* {box-sizing: border-box;}

.img-magnifier-container {
  position:relative;
}
.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 150px;
  height: 150px;
}
table{
  
}
th{
  border: 1px solid white;
  font-size: 14px;
  padding: 10px;
  text-align: center;
  background-color: black;
  color:white;

}
td{
  border: 1px solid black;
  padding: 10px;
  width: 70%;
}
p{
  font-size: 14px;
  text-align: justify;
}
#items{
  font-size: 12px;
}
.quantity{
  font-size: 16px;
  margin-top: 10px;

}
.quantity input{
  border: 1px solid black;
  width: 70px;
  padding: 10px;
}
#buy{
  margin-top: 3%;
}
#myimage, #myimage2,#myimage3{
  margin-left: 8%;
}
</style>
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
<section >
  <a href="all_carts.php"style="float: right;" type="button" class=" position-relative">
    <img src="../../images/cart.png">
    <span id ="items"class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" >
      <?php echo $total_cart_item;?>
      <span class="visually-hidden">unread messages</span>
    </span>
  </a>
  <h1 class="heading-title">All Travelling Products</h1>
  <h2 align="center">Product Details</h2><hr>
  <div class="row">
    <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active  img-magnifier-container">
                <img id="myimage" src="../../admin/shop manager/<?php echo $data['image'];?>" height="600" class="d-block " alt="...">
              </div>
              <?php if($data['image2']!=''){?>
              <div class="carousel-item  img-magnifier-container">
                <img id="myimage2" src="../../admin/shop manager/<?php echo $data['image2'];?>" height="600" class="d-block" alt="...">
              </div>
              <?php } ?>
              <?php if($data['image3']!=''){?>
              <div class="carousel-item  img-magnifier-container">
                <img id="myimage3" src="../../admin/shop manager/<?php echo $data['image3'];?>" height="600" class="d-block " alt="...">
              </div>
              <?php } ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
    </div>
    <div class="col-md-6 p-3">
      <div class="details" style="margin-left: 15%;">
        <h2><?php echo $data['productTitle'];?></h2><br>
          <h3 style="color: green;font-weight: bold;">Price:   <?php echo $data['salesPrice'];?> Tk</h3>
          
          <p >
             <?php echo $data['productDescription'];?>
          </p>
          
          <?php if ($data['stock'] == 0){?>
               <strong class="text-danger " style="font-size: 20px;">This product out of Stock</strong><br><br>
          <?php } else{?>
                 <strong class="quantity">Quantity: <input type="number" id='quantity' min='1' max="<?php echo $stock_product;?>" value="1"></strong>
                <?php if($b_status == 0){?>
                 <button id="buy" class="btn btn-primary p-3" style="width: 100%;font-size: 18px;"> Order now</button>
                <?php }else{
                  echo ' <br><br><span class="bg-danger p-4 fw-bold text-center" style="display:block;font-size:12px;" ">Your account has been blocked! please request to admin for unblock</span>';
                }?>
          <?php } ?>
          <button id="cart" class="btn btn-success mt-2 p-3" style="width: 100%;font-size: 18px;"> add to cart</button>
      </div>
      
    </div>
  </div>
</section>
<script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
magnify("myimage2",3);
magnify("myimage3",3);
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).ready(function(){
     var user_id = <?php echo $user_id;?>;
     var product_id = <?php echo $id;?>;
     $("#cart").on("click",function(){
          
          var cart_item = <?php echo $total_cart_item;?>;
          $.ajax({
               url:'add_cart.php',
               type: "POST",
               data: {
                       user_id: user_id,
                       product_id: product_id
                    },
               success:function(data){
                  
                  
                  if(data==1)
                  {
                    swal("successful!","add to cart successfully","success");
                    cart_item++;
                    $("#items").text(cart_item);
                  }else{
                    swal("unsuccessful!","already added ","error");
                  }

               }
           });
     });

     $("#buy").on("click",function(){

         var quantity = $("#quantity").val();
         var stock_product = <?php echo $stock_product;?>;
         if(quantity>stock_product){
           alert("We have "+quantity+" products out of stock")
         }else{
            $.ajax({
               url:'order_store.php',
               type: "POST",
               data: {
                       user_id: user_id,
                       product_id: product_id,
                       quantity : quantity
                    },
               success:function(data){
                 
                  location.href = '../dashboard/shops/all_orders.php';
               }
            });
            
            
         }
         
     });
  });
</script>