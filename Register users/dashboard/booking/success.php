<?php
// session_start();
// $user_id = $_SESSION['user_id'];
// echo $user_id;
// die();
echo "succes full trancation.";
$u_id = $_GET['u_id'];
$tk = $_GET['tk'];
// echo $tk;
// die();

$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("acmco6281900d5b088");
$store_passwd=urlencode("acmco6281900d5b088@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;

	 // echo $status." ".$tran_id." ".$card_type;
	// $p_id = $_GET['p_id'];
	include '../../include/config.php';

	$sql = "SELECT * FROM booking_info where id = '$u_id' ";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);
	// $tk = $row['tk'];
	$name = $row['name'];
	$h_name = $row['h_name'];
	$phone = $row['phone'];
	$user_id = $row['id'];
	$event = $row['h_name'];

	echo $name;
	echo $h_name;
	echo $phone;
	echo $tk;
	echo $card_type;
	echo $tran_id; 


    $sql = "INSERT INTO pemant(name, h_name,phone, tk, payment_type, tran_id) values('$name','$h_name', '$phone', '$tk','$card_type', '$tran_id')";
    
    mysqli_query($conn, $sql);
    // die();
    $sql1 = "DELETE FROM booking_info where id = '$u_id' ";
    $result = mysqli_query($conn, $sql1);

 //    $sql2 = "SELECT * FROM pement";
	// $result2 = mysqli_query($con, $sql2);

    // header('Location:chat.php?id1='.$id1.'&id2='.$id2);
    header('Location:store.php?u_id='.$u_id);

} else {

	echo "Failed to connect with SSLCOMMERZ";
}

?>
