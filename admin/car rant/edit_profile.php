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

?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal |Admin Manage testimonials   </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
	.Personal-info .wrapper{
      height: 200px;
      width: 200px;
      position: relative;
      border: 5px solid #fff;
      border-radius: 50%;
      background-color: lightgray;
      background-size: 100% 100%;
      margin: 20px auto;
      overflow: hidden;
      margin-left: 35%;
    }
     .Personal-info .wrapper img{
      height: 200px;
      width: 100%;
      position: relative;
      border-radius: 50%;
      overflow: hidden;
    }
   
    .Personal-info .wrapper h5{
      position: absolute;
      bottom: 0;
      outline: none;
      margin-left: 14%;
      padding-bottom: 0;
      color: transparent;
      width: 100%;
      box-sizing: border-box;
      padding: 5px 40px;
      cursor: pointer;
      color: #fff;
      transition: 0.5s;
      background: rgba(0, 0, 0,0.5);

    }
	</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>

 <section class="profile-info"style="margin-top: 30px; margin-top: 5%;margin-left: 290px">
     <h2 style="text-align: left;margin-bottom: 5px">Personal Information</h2>
      <hr style="width:90%; height: 5px; margin-top:5px">
          <div class="shop" >
             <form action="update_profile.php" enctype="multipart/form-data" method="post">

                      
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

	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

