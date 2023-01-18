 <title>post-job</title>
 <?php 
  include('../include/config.php');

 
  include'../include/all_header.php';
   
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
 <div class="  bg-light">
          <h2 class="text-center">Create Job Post</h2>
            <form method="post" action="store.php">
              <div class="row">
                  <div class="col-md-6 ">
                    <label for="jobtitle">Job Title</label>
                    <input type="text" class="form-control" id="jobtitle" name="jobtitle" placeholder="Job Title" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="qualification">Qualification Required</label>
                    <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification Required" required="">
                  </div>
              
              </div>
              <div class=" ">
                <label for="description">Job Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Job Description" rows="6"required=""></textarea>
              </div>
              <div class="row">
                   <div class="col-md-6">
                      <label for="minimumsalary">Minimum Salary</label>
                      <input type="number" class="form-control" id="minimumsalary" min="1000" autocomplete="off" name="minimumsalary" placeholder="Minimum Salary" required="">
                  </div>
                  <div class="col-md-6">
                      <label for="maximumsalary">Maximum Salary</label>
                      <input type="number" class="form-control" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required="">
                  </div>
              </div>
              
              <div class="form-group">
                <label for="experience">Experience (in Years)</label>
                <input type="number" class="form-control" id="experience" autocomplete="off" name="experience" placeholder="Experience Required" required="">
              </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-outline-success">Submit</button>
              </div>    
            </form>
          </div>
<?php
include'../include/footer.php';
   
?>