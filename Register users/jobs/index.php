<?php
$page = "jobs";
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
$sql2 = "SELECT *
    FROM job_post
    ORDER BY id_jobpost DESC
     ";

$result2 = mysqli_query($conn, $sql2);
include'../include/register_header.php';
?>
 <link rel="stylesheet" href="../Dashboard/css/dataTables.bootstrap5.min.css" />
<section style="margin-top: -4%;"> 
	<div class="p-5 bg-primary text-white rounded text-center">
	  <h1 class=" ">Search Job</h1>
	  <p>find your dream job</p>
	</div>
	<div class="p-3 table-responsive" style="font-size: 16px">
  <table
                    
                    class="table table-striped  data-table"
                    style="width: 100%"
                  >
                    <thead>
                    <tbody>
                     <?php while($row=mysqli_fetch_assoc($result2)){ ?>
                      <tr>
                        <?php                     
                        //Check if user has applied to job or not. If applied dont show apply link.
                        $sql1 = "SELECT * FROM apply_job_post
                                 WHERE id_user='$user_id' AND id_jobpost='$row[id_jobpost]'";
                                $result1 = $conn->query($sql1);
                        ?>
                        <td><h5><b><?php echo $row['jobtitle'];?></b></h5>
                            <p><b>Qualification:</b> <?php echo $row['qualification'];?> </p>
                            <p><b>Experience:</b> <?php echo $row['experience'];?> years</p>
                            <p><b>Salary:</b> <?php echo $row['minimumsalary'];?> - <?php echo $row['maximumsalary'];?> </p>
                            <a href="view.php?jobid=<?php echo $row['id_jobpost'];?>" class="btn btn-outline-primary"> more details</a> 
                            <?php
                        // If User already applied to job post then don't show apply link.
                        if($result1->num_rows > 0) { 
                          ?>
                           <strong style="color:green;">Already Applied</strong>
                          <?php
                        } else {
                        ?>
                        <a href="apply-job.php?jobid=<?php echo $row['id_jobpost'];?>" class="btn btn-outline-success"> apply</a> 
                        <?php } ?>

                        </td>
                        
                        
                        
                        
                      </tr>
                     <?php }  ?>

                    </tbody>
                    </tfoot>
                  </table>
                </div>
</section>
	

</body>
 <script src="../dashboard/js/jquery-3.5.1.js"></script>
 <script src="../dashboard/js/jquery.dataTables.min.js"></script>
 <script src="../dashboard/js/dataTables.bootstrap5.min.js"></script>
 <script src="../dashboard/js/script.js"></script>
</html>