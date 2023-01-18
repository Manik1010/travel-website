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
                    <a href="<?php echo $url;?>article/Categories/addcategories.php?id=<?php echo $id;?>" class="nav-link px-3">
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
      <div class="container-fluid mt-2 pt-5 ">
           <div class="row justify-content-center ">
            <div class="col-md-8 col-md-offset-2 bg-light">
                <div class="panel panel-default">
                    <div class="panel-heading">Generate Resume</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="generate-resume-data.php">
                            <h3>Alumni Personal Details </h3>
                            <div class="form-group">
                                <label class="col-md-10 control-label">Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Address</label>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Phone</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" class="form-control" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Email</label>
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" required="">
                                </div>
                            </div>

                            <h3>Experience Section</h3>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Add Number Of Experience:
                                </label>
                                <div class="col-md-12">
                                    <select name="experienceNo" class="form-control" id="experienceNo" required="">
                                        <option value="">Select Value</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div><br>

                            <div id="experienceSection"></div>
                            
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Generate</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div> 
      
        
        
        
        
      </div>
    </main>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
  
    <script src="./js/script.js"></script>
     <script>
    // I am adding experience section form fields to html. This is based on template I provided. If your resume template is different then edit accordingly.
    $("#experienceNo").on("change", function() {
        var numInputs = $(this).val();
        $("#experienceSection").html('');
        for (var i = 0; i < numInputs; i++) {
            var j = i + 1;
            $("#experienceSection").append('<div class="form-group"><label for="companyname' + i +
                '" class="col-md-10 control-label">Alumni Name ' + j +
                '</label><div class="col-md-12"><input id="companyname' + i +
                '" type="text" class="form-control" name="companyname[]" required></div></div><div class="form-group"><label for="location' +
                i + '" class="col-md-10 control-label">Location ' + j +
                '</label><div class="col-md-12"><input id="location' + i +
                '" type="text" class="form-control" name="location[]" required></div></div><div class="form-group"><label for="timeperiod' +
                i + '" class="col-md-10 control-label">Time Period ' + j +
                '</label><div class="col-md-12"><input id="timeperiod' + i +
                '" placeholder="2012-2017" type="text" class="form-control" name="timeperiod[]" required></div></div><div class="form-group"><label for="position' +
                i + '" class="col-md-10 control-label">Position ' + j +
                '</label><div class="col-md-12"><input id="position' + i +
                '" type="text" class="form-control" placeholder="Junior Software Developer" name="position[]" required></div></div><div class="form-group"><label for="experience' +
                i + '" class="col-md-10 control-label">Job Description ' + j +
                '</label><div class="col-md-12"><textarea id="experience' + i +
                '" class="form-control" name="experience[]" placeholder="Worked and Developed..." required></textarea></div></div><hr>'
                );
        }
    });
    </script>

    <script>
    // After generate button is pressed redirect to resume page as resume will be downloaded by then.
    $('form').on('submit', function() {
        setTimeout(function() {
            window.location = 'resume.php';
        }, 1000);
    });
    </script>
  </body>
 
</html>
