<title>shop all Carts</title>
<?php
$page = "shop";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT shop_products.* , shop_cart.id as sid
        FROM shop_products join shop_cart
        on shop_products.id = shop_cart.product_id
        where shop_cart.user_id = '$user_id'";
$result = mysqli_query($conn,$sql);

$total_items = mysqli_num_rows($result);
include'../include/register_header.php';
?>
<style type="text/css">
	.row{
		border: 1px solid black;
		margin-top:10px;
    margin-left: 10%;
    margin-right: 10%;
		padding: 10px;

	}
	span{
		font-size: 14px;
		font-weight: bold;
	}
  span input{
    width: 50px;
    border:1px solid black;
    padding: 5px;
  }
	#title{
		margin-top: 20px;
		font-size: 24px;
		font-weight: bold;
	}
	#title a{
		text-decoration: none;
		color:black;
	}

  #title a:hover{
    text-decoration: underline;
    color: blue;
  }
	#action{
		margin-left: 2%;
		margin-bottom: 10px;
	}
	#action button{
		font-size: 16px;
	}
  #action a{
    font-size: 16px;
  }
  #total_items_body{
    margin-left: 10%;
  }

</style>
<section>
	<h1 class="heading-title">All cart items</h1><hr>
  <h2 id="total_items_body">Total <?php echo $total_items;?> items</h2>
	<div class="userCarts">
	    
	</div>
 
</section>
<script>
  $(document).ready(function(){
      var user_id = <?php echo $user_id;?>;
  	  function loadCarts(){
             
             $.ajax({
               url:'load_carts.php',
               type: "POST",
               data: {
                       user_id: user_id  
                    },
               success:function(data){
                $(".userCarts").html(data);

               }
           });
          }
         loadCarts();
     var total_items = <?php echo $total_items?>;

  	 $(document).on("click","#remove",function(){
          var cart_id = $(this).data("rid");
          var element = $(this).parent().parent();
          
          
          $.ajax({
               url:'remove_cart.php',
               type: "POST",
               data: {
                       cart_id: cart_id  
                    },
               success:function(data){
                if(data==1){
                  total_items--;
                  $("#total_items_body").text("Total "+ total_items + " items");
                	$(element).parent().fadeOut("slow");
                }

               }
           });
     });
     $(document).on("click","#buy",function(){
           var product_id  = $(this).data("pid");
           var quantity = $("#quantity"+product_id).val();
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
            
            

     });

  });
</script>