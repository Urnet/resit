<?php
// session_start();

require_once "include_files/header.php";?>

 
  <?php 
// priviedge

// if(!is_admin($_SESSION['username'])){

 
// } 

// if(is_admin($_SESSION['username'])){

//   // redirect("index.php");
// } 
// if(is_admin($_GET['username'])){

//   // redirect("index.php");
// } 
// else {         
//         redirect("../s_login.php");
// } 



// if(!is_admin($_SESSION['username'])){

//     redirect("../index.php");
// } 
// if(!login_user($_SESSION['username'])){

//     redirect("../index.php");
// } 
//   else {                       } 

// if(!is_admin($_SESSION['username'] || ($_SESSION['username']))){
//     if(!is_user($_SESSION['username'] )){

//                                  redirect("../index.php");
//                              } 
//                                else {                       } 
//   ?>


<?php

// if(isset($_SESSION['username'])){
//     //$user_id = $_SESSION['user_id'];
//     if (
//     $username == $_SESSION['username']){

//     }else{
//       redirect("../s_login.php");
//   }

//     $query = "SELECT * FROM users WHERE username = '{$username}'";
//     $selct_user_profile_query = mysqli_query($connection,$query);

//     while ($row = mysqli_fetch_array($selct_user_profile_query)) {
//       $user_id = $row['user_id'];
//       $username = $row['username'];
//       $mat_no = $row['mat_no'];
//     //   $user_lastname = $row['user_lastname'];
//       $user_password = $row['user_password'];
//       $user_email = $row['user_email'];
//     //   $user_image = $row['user_image'];
//       $user_role = $row['user_role'];
    





// if( $_POST['username'] == $username && $_POST['user_password'] == $user_password ){
//   // redirect("admin/");
// }


// if($username == $_SESSION['username']){
//   // redirect("admin/");

// }
// else{
//     redirect("../s_login.php");
// }

// }
// }

// if(isset($_POST['login'])) {


//   login_user($_POST['username'] == $username,$_POST['user_password']== $user_password);
  
//   //  redirect("../admin/index.php");
  
  
//   }
//   else{
  
//       redirect("../s_login.php");
//   } 

  

 ?>


<div class="page-content">
    	<div class="row">


<?php require_once "include_files/sidebar.php";?>

<div class="col-md-10">

    <h1><B>THE SCHOOL OF NURSING, BIDA</B></h1>


    <H3><B>RE-SIT REGISTRATION FORM </B></H3>

    <h6>WELCOME</h6>
 <?php   if(isset($_SESSION['username'])) {

echo $_SESSION['username'];
}

?>
</div>

 </div>
		</div>


<?php include_once "include_files/footer.php";?>
