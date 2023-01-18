<title>payment </title>
<?php
$url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
} 

$user_id = $_SESSION['user_id'];
$order_id = $_GET['order_id'];
$quantity = $_GET['quantity'];
$product_id = $_GET['product_id'];
include '../include/all_header.php';
$termSql = "SELECT * FROM terms_conditions
            WHERE user_type ='shop manager'";
$termResult = mysqli_query($conn,$termSql);
$termData = mysqli_fetch_assoc($termResult);
?>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style type="text/css">
#regForm {
  background-color: #fff;
  margin:  auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
.container-fluid {
  background-color: #f1f1f1;
  
  
}
.payment_info li,ol,strong{
  font-size: 14px;
}

</style>
<section class="body">

	<form id="regForm" action="store_payment_document.php?order_id=<?php echo $order_id;?>&quantity=<?php echo $quantity;?>" enctype="multipart/form-data" method="post">

		
     <input name="quantity" value="<?php echo $quantity;?>" hidden>
     <input name="product_id" value="<?php echo $product_id;?>" hidden>
    <h1>Step <span id="stepInc">1</span></h1><hr>
     
		<!-- One "tab" for each step in the form: -->
		<div class="tab">
      <h2>How to payment System Work?</h2>
		  <p class="payment_info"><?php echo $termData['terms_conditions'];?></p>
		 
		</div>

		<div class="tab">
       <h2>Provide payment documents</h2>
       
    		  <p><input type="text" placeholder="address..." name="address" oninput="this.className = ''"></p>
    		  <p><input type="text" placeholder="Phone..." name="bikash_number" oninput="this.className = ''"></p>
          <p><input type ="file" placeholder="Payment screenshot..." name="image" oninput="this.className = ''"></p>
          <p><input type="text" placeholder="transaction id..." name ="transaction_id" oninput="this.className = ''"></p>

       
		</div>

		

		<div style="overflow:auto;">
		  <div style="float:right;">
		    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
		    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
		  </div>
		</div>
    
		<!-- Circles which indicates the steps of the form: -->
		<div style="text-align:center;margin-top:40px;">
		  <span class="step"></span>
		  <span class="step"></span>
		  
		</div>

	</form>
</section>

<script type="text/javascript">
	var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var stepInc;
  

  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:

    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
  if(n==-1)
     document.getElementById("stepInc").innerHTML = "1";
  else{
  	 document.getElementById("stepInc").innerHTML = "2";
  }
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}



</script>