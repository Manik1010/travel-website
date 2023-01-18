<?php $url='http://localhost/travel%20website/admin/';?>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <title>dashboard</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-success bg-success  fixed-top" >
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto p-0 m-0 "
          href="#"
          ><b style="color: white">Admin Panel </b></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
         
          <ul class="navbar-nav ms-auto my-3">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2 "
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill bg-warning"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo $url;?>user_page.php">Home</a></li>
                <li><a class="dropdown-item" href="<?php echo $url;?>profile/index.php">Profile</a></li>
                <li>
                  <a class="dropdown-item" href="<?php echo $url;?>logout.php">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-success mt-2"
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
                <span style="color: white;">&nbsp;<b>New Travel Places</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>new places/index.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All Places</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>new places/create.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add travel place</span>
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo $url;?>new place-categories/index.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span> 
                      <span style="color: white;">All districts</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>new place-categories/all-requests.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All requests</span>
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo $url;?>new places/all-complains.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All Complains</span>
                    </a>
                  </li>
                 
                 

                </ul>
              </div>
            </li>
            <li>
            <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts22"
              > 
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Hotels</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts22">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>supper_admin/hotelManager.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Manager</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>supper_admin/all_hotel.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All Hotels</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>supper_admin/request.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Approve Categorie</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>supper_admin/hotel_request.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Approve Hotel</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>supper_admin/hotel_request.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Approve Hotels</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>


            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts2"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Events</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts2">
                <ul class="navbar-nav ps-3"> 
                  <li>
                    <a href="<?php echo $url;?>event_admin/allevent.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All Events</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>event_admin/add.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add event</span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="<?php echo $url;?>dashboard/article/addcategories.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">A committee</span>
                    </a>
                  </li> -->
                  <li>
                    <a href="<?php echo $url;?>event_admin/request.php" class="nav-link px-3">
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
                href="#layouts6"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Packages</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts6">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>packages/index.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All Packages</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>packages/create.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">add package</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>packages/terms_conditions.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add Terms & Condition</span>
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo $url;?>packages/all_booking.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">All booking</span>
                    </a>
                  </li>
                  
                 

                </ul>
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layoutsApproval"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Account Approvals</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layoutsApproval">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>all_approvals.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">all approvals</span>
                    </a>
                  </li>
                 

                </ul>
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts5"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Shops</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts5">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>/dashboard/article/updatearticle.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">all orders</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/article/post.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add product</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/article/addcategories.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add categories</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/article/complain.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">add sub-categories</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/article/complain.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">user requests</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>


            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts55"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>FAQ</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts55">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>FAQ/add.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add FAQ</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layoutsQ"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Quiz Game</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layoutsQ">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>Quiz/index.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add Quiz</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts505"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Testmonial</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts505">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>testmonial/add.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add Testmonial</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>testmonial/delete.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Update Testmonial</span>
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
             
           
            
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- end offcanvas -->