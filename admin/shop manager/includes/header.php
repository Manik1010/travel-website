<?php 
   include("connection.php");
$id = $_SESSION['user_id'];
$profilesql = "SELECT * from user_form where id = $id";
$profileresult = mysqli_query($conn,$profilesql);
$profiledata = mysqli_fetch_assoc($profileresult);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo baseUrl;?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../<?php echo $profiledata['profileImage'];?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo baseUrl;?>../<?php echo $profiledata['profileImage'];?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Shop Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo baseUrl;?>../<?php echo $profiledata['profileImage'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $profiledata['name'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo indexUrl;?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
   
          </li>

          <li class="nav-item has-treeview ">
            <a href="<?php echo indexUrl;?>" class="nav-link bg-light">
              <i class="far fa fa-home"></i>
               <p>Home</p>
            </a>
   
          </li>
          <li class="nav-item  ">
            <a href="#" class="nav-link">
              <i class="far fa fa-address-book"></i>
               <p>Account Details</p>
               <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="<?php echo profileUrl;?>" class="nav-link">
                   <i class="far fa fa-user"></i>
                   <p>Profile</p>
                 </a>
              </li>
             
              <li class="nav-item">
                 <a href="<?php echo logoutUrl;?>" class="nav-link">
                   <i class="far fa fa-sign-out-alt"></i>
                   <p>LogOut</p>
                 </a>
              </li>
            </ul>
          </li>
          <!-- end Account details-->
          <li class="nav-item  ">
            <a href="#" class="nav-link">
              <i class="far fa fa-address-book"></i>
               <p>Category</p>
               <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="<?php echo addcategory;?>" class="nav-link">
                   <i class="far fa fa-user"></i>
                   <p>add category</p>
                 </a>
              </li>
              <li class="nav-item">
                 <a href="<?php echo viewcategory;?>" class="nav-link">
                   <i class="far fa fa-key"></i>
                   <p>all category</p>
                 </a>
              </li>
              
            </ul>
          </li>
          <!-- end Category-->
          <li class="nav-item  ">
            <a href="#" class="nav-link">
              <i class="far fa fa-address-book"></i>
               <p>Sub-Category</p>
               <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="<?php echo addsubcategory;?>" class="nav-link">
                   <i class="far fa fa-plus"></i>
                   <p>add sub-category</p>
                 </a>
              </li>
              <li class="nav-item">
                 <a href="<?php echo viewsubcategory;?>" class="nav-link">
                   <i class="far fa fa-eye"></i>
                   <p>all sub-category</p>
                 </a>
              </li>
              
            </ul>
          </li>
           <!--end Sub category-->
          <li class="nav-item  ">
            <a href="#" class="nav-link">
              <i class="far fa fa-address-book"></i>
               <p>Products</p>
               <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="<?php echo addproduct;?>" class="nav-link">
                   <i class="far fa fa-plus"></i>
                   <p> add product</p>
                 </a>
              </li>
              <li class="nav-item">
                 <a href="<?php echo viewproduct;?>" class="nav-link">
                   <i class="far fa fa-eye"></i>
                   <p> all products</p>
                 </a>
              </li>
              <li class="nav-item">
                 <a href="<?php echo addTermandCondition;?>" class="nav-link">
                   <i class="far fa fa-eye"></i>
                   <p> add term & conditions</p>
                 </a>
              </li>

              <li class="nav-item">
                 <a href="<?php echo viewTermCondition;?>" class="nav-link">
                   <i class="far fa fa-eye"></i>
                   <p> View term & conditions</p>
                 </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  ">
            <a href="#" class="nav-link">
              <i class="far fa fa-address-book"></i>
               <p>Orders</p>
               <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="<?php echo allOrders;?>" class="nav-link">
                   <i class="far fa fa-user"></i>
                   <p>all orders</p>
                 </a>
              </li>
              <li class="nav-item">
                 <a href="<?php echo changeUrl;?>" class="nav-link">
                   <i class="far fa fa-key"></i>
                   <p>all sub-category</p>
                 </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 