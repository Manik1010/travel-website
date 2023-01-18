<?php
 include '../../include/config.php';
 session_start();
 $user_id = $_SESSION['user_id'];

 $rand = rand(111, 89999);

 $image ='uploads/package-payment-sc-img/' . $rand .$_FILES['image']['name'];

 $upload = '../../../admin/uploads/package-payment-sc-img/' . $rand . $_FILES['image']['name'];

 
 $book_id = $_GET['book_id'];
 $package_id = $_POST['package_id'];
 
 $bikash_number = $_POST['number'];
 $transaction_id = $_POST['transaction_id'];

 $sql = "INSERT INTO package_payment_details(user_id,book_id,package_id,bikash_number,transaction_id,screenshot,status) VALUES ('$user_id','$book_id','$package_id','$bikash_number','$transaction_id','$image','pending')";
 if(mysqli_query($conn, $sql)){
 	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
 }

 header('Location: index.php');