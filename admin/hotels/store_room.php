<?php 
include '../../Register users/include/config.php';

$extension=array('jpeg','jpg','JPG','png','gif');

     foreach ($_FILES['image']['tmp_name'] as $key => $value) {
          // echo $filename=$_FILES['image']['name'][$key];
          $filename=$_FILES['image']['name'][$key];
          $filename_tmp=$_FILES['image']['tmp_name'][$key];
          echo '<br>';

          $ext=pathinfo($filename,PATHINFO_EXTENSION);
          // echo "Allha";

          $finalimg='';
          if(in_array($ext,$extension))
          {
               // echo "Allha";
               move_uploaded_file($filename_tmp, 'upload/'.$filename);
               if(!file_exists('upload/'.$filename))
               {
               move_uploaded_file($filename_tmp, 'upload/'.$filename);
               $finalimg=$filename;
               }else
               {
                     $filename=str_replace('.','-',basename($filename,$ext));
                     $newfilename=$filename.time().".".$ext;
                     move_uploaded_file($filename_tmp, 'upload/'.$newfilename);
                     $finalimg=$newfilename;
               }
               $creattime=date('Y-m-d h:i:s');
               //insert
               $insertqry="INSERT INTO `multiple_images`( `image_name`, `image_createtime`) VALUES ('$finalimg','$creattime')";

               mysqli_query($conn,$insertqry);

               // header('Location: test.php');
          }else
          {
               //display error
          }
     }

// die();

$h_name = $_POST['h_name'];
// echo $h_name;
$room_categories = $_POST['room_categories'];
$bed = $_POST['bed'];
$prices = $_POST['prices'];
$discreption = $_POST['room'];
$location = $_POST['h_loaction'];
// echo $location;
// echo $room;
// echo $room_categories;
// echo $bed;
// echo $prices;
// die();

$toiletries = $_POST['toiletries'];
$shower = $_POST['shower'];
$toilet = $_POST['toilet'];
$towels = $_POST['towels'];
$slippers = $_POST['slippers'];
$hairdryer = $_POST['hairdryer'];
$paper = $_POST['paper'];

$dressing = $_POST['dressing'];
$wardrobe = $_POST['wardrobe'];
$sanitiser = $_POST['sanitiser'];
$tea = $_POST['tea'];
$minibar = $_POST['minibar'];
$air = $_POST['air'];
$safety = $_POST['safety'];
$hypoallergenic = $_POST['hypoallergenic'];
$marble = $_POST['marble'];
$soundproofing = $_POST['soundproofing'];
$fan = $_POST['fan'];
$carpeted = $_POST['carpeted'];
$kettle = $_POST['kettle'];
$cleaning = $_POST['cleaning'];
$sofa = $_POST['sofa'];
$desk = $_POST['desk'];
$area = $_POST['area'];
$tv = $_POST['tv'];
$telephone = $_POST['telephone'];
$flat = $_POST['flat-screen'];
$cable = $_POST['cable'];
$terrace = $_POST['terrace'];
$socket = $_POST['socket'];
$clothes = $_POST['clothes'];
$wake = $_POST['wake-up']; 



// echo $toiletries;
// echo $shower;
// echo $toilet; 
// echo $towels;
// die();

// die();

$sql = "INSERT INTO rooms values(NULL,'$room_categories','$location', '$h_name','$' '$bed', '$prices', '$discreption', '$toiletries', '$shower', '$toilet', '$towels', '$slippers', '$hairdryer', '$paper', '$dressing', '$wardrobe', '$sanitiser', '$tea', '$minibar', '$air', '$safety', '$hypoallergenic', '$marble', '$soundproofing','$fan', '$carpeted', '$kettle', '$cleaning', '$sofa', '$desk', '$area', '$tv', '$telephone', '$flat', '$cable', '$terrace', '$socket', '$clothes', '$wake')";
// die();

mysqli_query($conn,$sql);

header('Location: index.php');

?>