<?php
  $conn = mysqli_connect('localhost','root','','travel website');
  if(!$conn){
  	echo "failed";
  }
  else{
  	session_start();
  }
  define('indexUrl', "http://localhost/travel website/admin/shop manager/index.php");
  define('profileUrl', "http://localhost/travel website/admin/shop manager/profile.php");
  define('changeUrl', "http://localhost/travel website/admin/shop manager/changepassword.php");
  define('logoutUrl', "http://localhost/travel%20website/Register%20users/logout.php");
  define('baseUrl', "http://localhost/travel website/admin/shop manager/assets/");
  define('addcategory',"http://localhost/travel website/admin/shop manager/Products/addcategory.php");
  define('viewcategory',"http://localhost/travel website/admin/shop manager/Products/viewcategory.php");
  define('addsubcategory', "http://localhost/travel website/admin/shop manager/Products/addsubcategory.php");
  define('viewsubcategory', "http://localhost/travel website/admin/shop manager/Products/viewsubcategory.php");
  define('addproduct', "http://localhost/travel website/admin/shop manager/Products/addproduct.php");
  define('viewproduct', "http://localhost/travel website/admin/shop manager/Products/viewproduct.php");
  define('addTermandCondition', "http://localhost/travel website/admin/shop manager/Products/add_term_and_condition.php");
  define('viewTermCondition',"http://localhost/travel website/admin/shop manager/Products/view_term_condition.php" );
  define('allOrders', "http://localhost/travel website/admin/shop manager/orders/all_orders.php");