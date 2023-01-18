<?php 
echo "Manik";

$array1 = array("**alpha**","omega","**bravo**","**charlie**","**delta**","**foxfrot**");
$array2 = array("**alpha**","gamma","**bravo**","x-ray","**charlie**","**delta**","halo","eagle","**foxfrot**");

$result = array_intersect($array1, $array2);

die();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <script>
    Swal.fire({
  title: 'Custom animation with Animate.css',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
    
  </script>
  
</body>
</html>

<?php
die();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Text</title>
  <link rel="stylesheet" href="">
  <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

</head>
<body>
  <main class="mt-5 pt-3">
      <!-- <div class="container-fluid mt-5 bg-light pt-2"> -->
          <h2>Add Terms & Condition</h2>
           <form action="store_terms_conditions.php" method="POST" >
              <div class="mb-3">
                <label for="description" >Terms & conditions</label>
                <textarea class="form-control" id="editor" name="payment_rules" rows="10"></textarea>
              </div>

              <button type="submit" class="btn btn-outline-primary">Submit</button>

           </form>
            
      <!-- </div> -->
</main>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
