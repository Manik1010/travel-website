<?php 

include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT *
       FROM user_form
       WHERE id = '$user_id'";


$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

include'../include/register_header.php';


?>
<head>
	<title>Edit-Profile</title>
</head>
<style type="text/css">
  .profile-info input,label,button{
    font-size: 16px;
  }
</style>

 
 <a class="btn btn-success" style="margin-left:50px;margin-top: 30px;font-size: 16px;" href="index.php ?>"> Back </a><br>

<div class=" row">
     <div class="col-md-9" style="margin-top:30px;">
       <h1 style="margin-left: 54%;">Update Profile</h1>
      <hr style="width:35%;margin-left:48%;margin-right: ; height: 5px; margin-top:5px">
     </div>

     
</div>
 <section class="profile-info"style="margin-top: 30px">
     <h2 style="text-align: left;margin-bottom: 5px">Personal Information</h2>
      <hr style="width:100%; height: 5px; margin-top:5px">
          <div class="shop" >


               <form action="update.php" enctype="multipart/form-data" method="post">

                      
                     <div class="row">
                         <div class="col-md-6 form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name"  value="<?php echo $data['name']; ?>">
                        </div>

                        <div class="col-md-6 form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" name="email"  value="<?php echo $data['email']; ?>">
                        </div>
                     </div><br>
                     
                      <div class="row">
                          <div class="col-md-6 form-group">
                              <label for="fathername">Father's Name</label>
                              <input type="text" class="form-control" name="fathername"  value="<?php echo $data['fatherName']; ?>">
                          </div>

                          <div class="col-md-6 form-group">
                              <label for="mothername">Mother's Name</label>
                              <input type="text" class="form-control" name="mothername"  value="<?php echo $data['motherName']; ?>">
                          </div>
                      </div><br>
                      
                      <div class="row">
                          <div class="col-md-6 form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" name="dob"  value="<?php echo $data['dob']; ?>">
                          </div>

                           <div class="col-md-6 form-group">
                                <label for="number">Contact number</label>
                                <input type="text" class="form-control" name="number"  value="<?php echo $data['number']; ?>">
                           </div>
                      </div><br>
                      
                     
                      
                     
                      
                      
                      
                      <div class="row">
                          <div class="col-md-6 form-group">
                                <label for="currentaddress">Current Address</label>
                                <input type="text" class="form-control" name="currentaddress"  value="<?php echo $data['currentAddress']; ?>">
                          </div>

                           <div class="col-md-6 form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" class="form-control" name="profileimage"  >
                                <img src="<?php echo $data['profileImage']; ?>" width="100">
                           </div>
                      </div><br>
                      <div class="row">
                           <div class="col-md-4">
                             
                           </div>
                           <div class="col-md-4">
                               <button type="submit" class="btn btn-outline-primary" style="width:100%;font-size: 16px;">Update</button><br>
                           </div>
                           <div class="col-md-4">
                             
                           </div>
                      </div>
                     
              </form><br>

        </section> 
             



