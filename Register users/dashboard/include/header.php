<?php $url = 'http://localhost/travel%20website/Register%20users/'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>dashboard</title>
  <style type="text/css">
  .navbar-nav{
    font-size: 16px;
  }
  .navbar-nav a{
           color: black;
           margin-left: 10px;
  }
  .dropdown-menu a{
    color: black;
    margin:0;
    font-size: 16px;
  }
  .navbar-dark .navbar-nav .nav-link{
    color:white;
  }
  
</style>
<body>
   
<!-- header section starts  -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
        <div class="container-fluid p-3 bg-dark">
            <a href="#" class="navbar-brand " style="margin:0;padding: 0"><img src="<?php echo $url;?>../images/logo2.jfif" width="150" height="60"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " style="margin-right: 3%" id="navbarCollapse">
                <div class="navbar-nav  ms-auto " >
                    <a href="<?php echo $url;?>user_page.php" class="nav-item btn-outline-success nav-link  "><b>Home</b></a>
                    <a href="<?php echo $url;?>packages/index.php" class="nav-item btn-outline-success nav-link">Packages</a>
                    <a href="<?php echo $url;?>events/index.php" class="nav-item btn-outline-success nav-link">Events</a>
                    <a href="<?php echo $url;?>hotels/index.php" class="nav-item btn-outline-success nav-link">Hotels</a>
                    <a href="<?php echo $url;?>shop/index.php" class="nav-item btn-outline-success nav-link">Shop</a>
                    <a href="<?php echo $url;?>jobs/index.php" class="nav-item btn-outline-success nav-link">Jobs</a>
                    <a href="<?php echo $url;?>new places/index.php" class="nav-item btn-outline-success nav-link">New places</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
                        <div class="dropdown-menu">
                             <a href="<?php echo $url;?>tour guide/index.php" class="btn-dark dropdown-item">Tour guide</a>
                            <a href="<?php echo $url;?>car rental/index.php" class="btn-dark dropdown-item">Car Rental</a>
                            <a href="<?php echo $url;?>fqa/index.php" class="btn-dark dropdown-item">FAQ</a>
                            <a href="<?php echo $url;?>gallery/index.php" class=" btn-outline-success dropdown-item">Gallary</a> 
                            <a href="#" class=" btn-outline-success dropdown-item">Restaurents</a>
                             <a href="<?php echo $url;?>weather/index.php" class="btn-dark dropdown-item">Weather</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown" >
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="<?php echo $url;?>../images/profile.png" width="30"></a>
                        <div class="dropdown-menu">
                            <a href="<?php echo $url;?>profile/index.php" class="btn-dark dropdown-item">profile</a>
                            <a href="<?php echo $url;?>dashboard/index.php" class=" btn-outline-success dropdown-item">dashboard</a>
                            <a href="<?php echo $url;?>logout.php" class=" btn-outline-success dropdown-item">logout</a>
                        </div>
                    </div>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark mt-5"
      tabindex="-1"
      id="sidebar"     >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark ">
          <ul class="navbar-nav">
            <li>
             
            </li>
            <li>
              <a href="<?php echo $url;?>dashboard/index.php" class="nav-link px-3 active mt-3">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span ><b>Dashboard</b></span>
              </a>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link "
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>New Places</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>dashboard/new places/index.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">My Travel Places</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/new places/create.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add travel place</span>
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo $url;?>dashboard/new places/all-requests.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All Requests</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/new places/add-category.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Request district</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/new places/all-complains.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All Complains</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/new places/add-complain.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Request Complain</span>
                    </a>
                  </li>
                 

                </ul>
              </div>
            </li>

          
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts3"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Jobs</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts3">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/applied-job.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Applied Job</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/create-post.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">post job</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/create resume.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Create Resume</span>
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo $url;?>dashboard/jobs/view resume.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">View Resume</span>
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo $url;?>dashboard/jobs/update resume.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Update Resume</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Request</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>

            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts8"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Booking</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts8">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>dashboard/booking/index.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All booking</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/create-post.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">post job</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/create-resume.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add resume</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Request</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>
             <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts10"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Shops</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts10">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>dashboard/shops/all_orders.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All orders</span>
                    </a>
                  </li>
                  

                </ul>
              </div>
            </li>
           
             
           
            
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- end offcanvas -->
    