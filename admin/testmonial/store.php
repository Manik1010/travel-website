<?php
  
// connect with database

$conn = mysqli_connect('localhost','root','','travel website');
$name = $_POST['name'];
$designation = $_POST['designation'];
$comment = $_POST['comment'];


$image =  'image/'.$_FILES["picture"]["name"];

 
// insert in testimonials table
$sql = "INSERT INTO testimonials(picture, name, designation, comment) VALUES ('$image','$name','$designation','$comment')";

if(mysqli_query($conn,$sql)){
    move_uploaded_file($_FILES["picture"]["tmp_name"],$image);
}

header('Location:delete.php');