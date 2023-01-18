<?php 
  include('../../include/config.php');
  $rand = rand(11111, 89999999999);
  $u_id = $_GET['u_id'];
   // echo $u_id;
   // die();


         // $conn = mysqli_connect('localhost', 'root','','travel website');
         $allTesSql = "SELECT * FROM resume where user_id = '$u_id'";
         $allTesResult = mysqli_query($conn, $allTesSql);
         $row = mysqli_fetch_assoc($allTesResult)
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-light">
      <a class="btn btn-dark mt-3" href="../index.php"> back</a>
    <h1 class="text-center my-5 fw-bold">Update Resume Form</h1>
    <div class="form-container">
        <form action="store update.php?id=<?php echo $row['ID']; ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="border border-dark p-3 mb-3">    
                <h2>Profile Image</h2>
                <div class="mb-3" >
                    <label class="form-label">Select a square image 1:1 (Recommended)</label>
                    <input class="form-control" name="profile_image" type="file"  >
                    <span  class="d-none d-lg-block "> <img  class="img-fluid img-profile  mx-auto mb-2   " src="./<?php echo $row['image'];?>"width="150" hight=150 alt="..." /></span>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Contact</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control"  value="<?php echo $row['first_name'];?>" >
                    </div>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control"  value="<?php echo $row['last_name'];?>" >
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address"  value="<?php echo $row['address'];?>" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession</label>
                    <input type="text" class="form-control" name="profession" value="<?php echo $row['profession'];?>" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email"  value="<?php echo $row['Email'];?>" >
                    <div class="form-text text-light">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="number" class="form-control" id="phone" name="phone"  value="<?php echo $row['Phone_number'];?>">
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Skills </h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skillset Name</label>
                    <input type="text" class="form-control" name="skill1"  value="<?php echo $row['Skillset_Name'];?>" >
                   
                </div>
                <div id="addSkill"></div>
                
            <div class="border border-dark p-3 mb-3">    
                <h2>Hobbies </h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobby</label>
                    <input type="text" name="hobby1" class="form-control"  value="<?php echo $row['Hobby'];?>" >
                </div>
                <div id="addHobby"></div>
                
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>About Me</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" ><?php echo $row['About_me'];?></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Education </h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">School/College/University</label>
                    <input type="text" name="institute1" class="form-control"  value="<?php echo $row['SchoORCollORversity'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Degree Name</label>
                    <input type="text" name="degree1" class="form-control"  value="<?php echo $row['Degree_Name'];?>">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">From</label>
                        <input type="text" name="from1" class="form-control"  value="<?php echo $row['Degree_From'];?>">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">To</label>
                        <input type="text" name="to1" class="form-control"  value="<?php echo $row['Degree_To'];?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
                    <input type="text" name="grade1" class="form-control"  value="<?php echo $row['GradeORScoreORCGPA'];?>">
                </div>
                <div id="addEducation"></div>
               
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Experience </h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title1" class="form-control"  value="<?php echo $row['Experience_Title'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control" value="<?php echo $row['Description'];?>">
                </div>
                <div id="addExperience"></div>
               
            </div>
            <button  class="btn btn-primary">Update Resume</button>
        </form>
    </div>
    </div>
   
</body>
</html>