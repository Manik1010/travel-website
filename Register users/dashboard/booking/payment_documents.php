<?php
 $book_id = $_GET['book_id'];
 $package_id = $_POST['package_id'];

include'../include/all_header.php';


?>
<a href="index.php" class="btn btn-secondary">Back</a>
<div style="margin-left: 10%;margin-right: 10%">
	<form action="store_payment_documents.php?book_id=<?php echo $book_id;?>" enctype="multipart/form-data" method="post">
          <div class="mb-3">
              <label for="number" class="col-form-label">Your Bikash number:</label>
              <input type="text" class="form-control" placeholder="যে নম্বর দিয়ে আপনি পেমেন্ট সম্পূর্ণ করেছেন" name="number" required>
              <input  name="package_id" hidden value="<?php echo $package_id;?>">
          </div>

          <div class="mb-3">
              <label for="transaction" class="col-form-label">Transaction Id:</label>
              <input type="text" class="form-control" name="transaction_id" required>
          </div>

          <div class="mb-3">
              <label for="image" class="col-form-label">Transaction Screenshoot:</label>
              <input type="file" class="form-control" name="image" > 
          </div>
          <button type="Submit" class="btn btn-secondary">Submit</button>
         
   </form>
</div>