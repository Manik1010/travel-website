<?php 
 $url = 'http://localhost/Project%20Work2/NEUB%20Alumni/RegisteredUser/';
 $id = $_GET['id'];
 include('../../admin/include/connect.php');
 $con = connectDB();
 
$sql = "SELECT job_post.*
FROM job_post JOIN apply_job_post
ON job_post.id_jobpost = apply_job_post.id_jobpost
WHERE apply_job_post.id_user = '$id' ";
$result = mysqli_query($con,$sql);

 ?>
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
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: black;">
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
          class="navbar-brand me-auto p-0 m-0"
          href="#"
          ><img src="../../images/logo2.PNG" height="90"> </a
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
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
         
          <ul class="navbar-nav ms-auto my-3">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill bg-success"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo $url;?>index.php?id=<?php echo $id;?>">Home</a></li>
                <li><a class="dropdown-item" href="<?php echo $url;?>profileview.php?id=<?php echo $id;?>">Profile</a></li>
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
      class="offcanvas offcanvas-start sidebar-nav  mt-5"
      tabindex="-1"
      id="sidebar" style="background-color: black;"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
            <li>
              <a href="<?php echo $url;?>Dashboard/index.php?id=<?php echo $id;?>" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span ><b>Dashboard</b></span>
              </a>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Articles</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>article/updatearticle.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">My article</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/post.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add article</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/Categories/addcategories.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add categories</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/Complain/index.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Complain</span>
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
                    <a href="<?php echo $url;?>article/updatearticle.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">My events</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/post.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add event</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/Categories/addcategories.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add committee</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/Complain/index.php?id=<?php echo $id;?>" class="nav-link px-3">
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
                    <a href="<?php echo $url;?>Dashboard/applied-job.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Applied Job</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/post.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">post job</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>Dashboard/create-resume.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add resume</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/Complain/index.php?id=<?php echo $id;?>" class="nav-link px-3">
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
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid mt-2 pt-5">
           <div class="row justify-content-center ">
          <div class="col-md-6 col-md-offset-4 well  bg-light">
          <h2 class="text-center">Create Job Post</h2>
            <form method="post" action="addpost.php?id=<?php echo $id;?>">
              <div class="form-group">
                <label for="jobtitle">Job Title</label>
                <input type="text" class="form-control" id="jobtitle" name="jobtitle" placeholder="Job Title" required="">
              </div>
              <div class="form-group">
                <label for="description">Job Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Job Description" required=""></textarea>
              </div>
              <div class="form-group">
                <label for="minimumsalary">Minimum Salary</label>
                <input type="number" class="form-control" id="minimumsalary" min="1000" autocomplete="off" name="minimumsalary" placeholder="Minimum Salary" required="">
              </div>
              <div class="form-group">
                <label for="maximumsalary">Maximum Salary</label>
                <input type="number" class="form-control" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required="">
              </div>
              <div class="form-group">
                <label for="experience">Experience (in Years)</label>
                <input type="number" class="form-control" id="experience" autocomplete="off" name="experience" placeholder="Experience Required" required="">
              </div>
              <div class="form-group">
                <label for="qualification">Qualification Required</label>
                <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification Required" required="">
              </div><br>
              <div class="text-center">
                <button type="submit" class="btn btn-outline-success">Submit</button>
              </div>    
            </form>
          </div>
        </div>
        
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
  
    <script src="./js/script.js"></script>
  </body>
 
</html>
