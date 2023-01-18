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
<style type="text/css">
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
	<div class="w-75 mt-5" style="margin-left: 20%; margin-right: 20%">
     <h2 style="text-align: left;margin-bottom: 5px">Personal Information</h2>
      <hr style="width:80%; height: 5px; margin-top:5px"><br>
          <div class="Personal-info justify-content-center" style="margin-left: 0%; margin-right: 20%;font-size: 16px;">
               <table class="table w-100 border-success table-bordered fw-bold table-responsive-xl mb-5" width="900">
                      <div class="row ">
                          <div class="col-md-10 wrapper"> 
                            <?php  if(!empty($data['profileImage'])) { ?> 
                             <img src="<?php echo $data['profileImage'];?>" >
                             <?php } 
                              else{ ?>
                                   <h5> No image </h5>
                             <?php  } ?>
</div>
	                       <div class="col-md-2" style="float:right;">
                                <a href="edit.php" class="btn btn-outline-info" style="font-size: 16px; display: block;">Edit</a>
                           </div>
                              
                       </div> 

                      
                      <tr>
                        <th class="table-dark"> Name  </th>
                        <td > <?php echo $data['name'] ?> </td>
                      </tr>

                      
                      
                      <tr>
                        <th class="table-dark"> Email </th>
                        <td> <?php echo $data['email'] ?> </td>
                      </tr>
                      <tr>
                        <th class="table-dark"> Date of Birth </th>
                        <td> <?php echo $data['dob'] ?> </td>
                      </tr>
                      <tr>
                        <th class="table-dark"> Contact Number </th>
                        <td> <?php echo $data['number'] ?> </td>
                      </tr>
                      <tr>
                        <th class="table-dark"> Father's Name </th>
                        <td> <?php echo $data['fatherName'] ?> </td>
                      </tr>
                      <tr>
                        <th class="table-dark"> Mother's Name </th>
                        <td> <?php echo $data['motherName'] ?> </td>
                      </tr>
                      <tr>
                        <th class="table-dark"> Address </th>
                        <td> <?php echo $data['currentAddress'] ?> </td>
                      </tr>
                      
                      
              </table>

          </div>
    </div>
<?php include'../../include/footer.php';?>
