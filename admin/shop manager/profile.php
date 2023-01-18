 <?php

include("includes/header.php");

$id = $_SESSION['user_id'];
if(isset($_POST['submitBtn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $education = $_POST['education'];
  $skills    = $_POST['skills'];
  

 

  $updateSql = "UPDATE user_form set 
                name ='$name',
                email = '$email',
                currentAddress = '$address',
                education = '$education',
                skills = '$skills'                
               ";
  if (!empty($_FILES['image']['name']))
{
  $rand = rand(11111, 89999999999);


  $image ='uploads/profile-img/' . $rand .$_FILES['image']['name'];

  $upload = 'uploads/profile-img/' . $rand . $_FILES['image']['name'];

  move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
    $updateSql .= ",profileImage = '$image'";
  if(!empty($data['image'])){
    unlink($data['image']);
  }
}

  $updateSql .= "where id = $id";

  $updateResult = mysqli_query($conn,$updateSql);
  if($updateResult){
     echo("<script>location.href = 'profile.php';</script>");
  }else{
    echo "error";
  }
}
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>Add Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/Add Category</b>
              <a href="<?php echo logoutUrl;?>" class="btn btn-danger" style="margin-left: 10px;">LogOut</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $profiledata['profileImage'];?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $profiledata['name'];?></h3>

                <p class="text-muted text-center"><?php echo $profiledata['email'];?></p>

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  <?php echo $profiledata['education'];?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted"><?php echo $profiledata['currentAddress'];?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger"><?php echo $profiledata['skills'];?></span>
                  
                </p>

                <hr>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item"><a class="nav-link" href="#settings" data-bs-toggle="tab">Shop Manager Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                
                 
                

                 
                    <form class="form-horizontal" action="" method="post" id="form" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text"  value="<?php echo $profiledata['name'];?>"class="form-control" id="inputName" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" value="<?php echo $profiledata['email'];?>" class="form-control" id="inputEmail" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="address" value="<?php echo $profiledata['currentAddress'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" name="education"><?php echo $profiledata['education'];?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" name="skills" value="<?php echo $profiledata['skills'];?>">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="inputSkills" name="image" >
                          <img src="<?php echo $profiledata['profileImage'];?>" width="100">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="submitBtn" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </form>
                  
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <?php 
    include('includes/footer.php');
    ?>