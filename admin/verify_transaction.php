<?php 
// session_start();
require_once "include_files/header.php";?>



<?php

// php global variable

$ref = $_GET['reference'];
if ($ref == " ") {
        // get redirected back to previous page
    header("Location:javascript://history.go(-1)");
}

// $ref = $_POST[$ref];

?> 

<?php
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/". rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_6211dd298094e173f36c97ad1abc1d862ab55100",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
    $result = json_decode($response);

  }
 
//   if ($result->data->status == 'success' && $result->data->amount == 100000) {
    if ($result->data->status == 'success') {

    $stat = $result->data->status;
   echo $amount = $result->data->amount;
  $reference = $result->data->reference;
  //  $ref = $_POST[$reference];

    // $std_email = $result->data->email;
    date_default_timezone_set('Africa/Lagos');
    $date_time = date('m/d/y h:i:s a', time());

        if ($result->data->amount == 100000){
            // header("Location: stack.php?status=success"); 
            header("Location: stack.php?amount=one_course"); 
        }
        if ($result->data->amount == 200000){
            // header("Location: stack.php?status=success"); 
            header("Location: stack.php?amount=two_course"); 
        }
        if ($result->data->amount == 300000){
            // header("Location: stack.php?status=success"); 
            header("Location: stack.php?amount=three_course");
             
        }
        // header("Location: stack.php?amout==1000"); 

  }
    else{
        alert(' Registeration failed.');
        // header("Location:javascript://history.go(-1)");
        header("Location: index.php");
        exit;
    }
?>

 