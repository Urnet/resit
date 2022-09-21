<!-- db_connection -->
<?php 
session_start();
include_once "../include_files/db.php";?>
<?php include_once "./functions.php";


// $query = "SELECT * FROM users";
//    $select_users = mysqli_query($connection,$query);

//    while($row = mysqli_fetch_assoc($select_users)) {
//    $user_id = $row['user_id'];
//    $username = $row['username'];
//   //  $user_firstname = $row['user_firstname'];
//    $mat_no = $row['mat_no'];
//    $user_password = $row['user_password'];
//    $user_ids = $row['user_ids'];
//    $user_image = $row['user_image'];
//    $user_role = $row['user_role'];

// // if (!isset($_POST['username'] == $row['username'])) {
// 	if ($_SESSION['username'] == $row['username']) {
// 		if ($_SESSION['user_password'] !== $user_password) {
	
// }

// 	}
// 	else{
// 		header('Location: ../index.php');
// 		exit;
// 	}
// }

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
// if ($stmt = $connection->prepare('SELECT username, user_password FROM users WHERE username = ?')) {
// 	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
// 	$stmt->bind_param('s', $_POST['username']);
// 	$stmt->execute();
// 	// Store the result so we can check if the account exists in the database.
// 	$stmt->store_result();


// 	if ($stmt->num_rows > 0) {
// 		$stmt->bind_result($username, $password);
// 		$stmt->fetch();



// 	if ($_POST['username'] === $username) {


// 	}
// 	else {
	
// 		header("location: ../index.php");
		
		
// 		} 
	
// 	if ($_POST['user_password'] === $user_password) {
	
// 	session_regenerate_id();
// 		$_SESSION['username'] = TRUE;
// 		$_SESSION['username'] = $_POST['username'];
// 		$_SESSION['id'] = $id;
// 		echo 'Welcome ' . $_SESSION['username'] . '!';
// 	} else {
// 		// Incorrect password
// 		echo 'Incorrect username and/or password!';
// 		header("location: ../index.php");
// 	}
// } else {
// 	// Incorrect username
// 	echo 'Incorrect username and/or password!';
// 	header("location: ../index.php");
// }	


// 	$stmt->close();
// }








// function isLoggedIn()
// {
// 	if (isset($_POST['username'])) {
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

// if (!isLoggedIn()) {
// 	$_POST['msg'] = "You must log in first";
// 	header('location: ../s_login.php');
// }



// if(isset($_SESSION['user_role']) == 'student') {



// }
// if(isset($_POST['username']) == 'admin') {



// }
//  else {

// header("location: ../index.php");


// } 





// if(isset($_REQUEST['logout'])){
// 	unset($_SESSION['user_password']);
// 	unset($_SESSION['username']);
// 	unset($_SESSION['user_id']);
// 	unset($_SESSION['user_role']);
// session_destroy();
// }
// //

// if(!empty($_POST['submit'])){
// if(empty($_POST['username']))
// $error_msg='please enter username';
// if(empty($_POST['user_password']))
// $error_msg='please enter password';
// if(empty($error_msg)){
// $sql="SELECT*FROM users WHERE username='%s' AND password='%s'";
// $sql=sprintf($sql,$_POST['username'],md5($_POST['user_password']));
// $records=mysql_query($sql) or die(mysql_error());

// if($record_new=mysql_fetch_array($records)){

// 	$_SESSION['user']=$record_new;
// 	$_SESSION['user_id']=$record_new['user_id'];
// 	$_SESSION['username']=$record_new['username'];
// 	$_SESSION['user_role']=$record_new['user_role'];
// 	header('location:admin/');
// 	$error_msg='welcome';
// 	exit();
// }else{
// 	$error_msg='invalid details';
// }
// }       
// }
 
// if(!isset($_POST['username']) || $_POST['user_role'] != 'admin'){
//     header('Location: index.php');
// }

// if(!isset($_SESSION['username']) || $_SESSION['user_role'] != 'admin'){
//     header('Location: index.php');
// }

?>
 

        <!DOCTYPE html>
<html>
  <head>
    <title>Admin Examination Re-sit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- <link href="bootstrap/mycss.css" rel="stylesheet"> -->
 
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1>
						<a >        
						<h4>              <img src="../l.png" alt="LOgo" width="70" height="30">                                                                    
           						 <B>THE SCHOOL OF NURSING, BIDA</B>
								</h4>
</a></h1>
	              </div>
	           </div>
	          
	        </div>
	     </div>
	</div>
	<br/>