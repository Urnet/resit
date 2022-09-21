<?php include "include_files/header.php";?>
<?php include "include_files/head.php";?>




<?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

      // if (isset($_POST['submit'])) {
        // code...
        $username = trim($_POST['username']);
        $user_ids = trim($_POST['user_ids']);
        $password = trim($_POST['password']);

        $error = [

          'user_firstname'=>'',
          'user_ids' => '',
            'password'=> ''
        ];

            if(strlen($username) < 4){
              $error['user_firstname'] = 'Username needs to be longer';
            }
            if ($username == '') {
              $error['username'] = 'Username cannot be empty';
            }

            if (user_check($username)) {
              $error['username'] = "Username Exists Already";
             }

            if(strlen($user_ids) < 4){
              $error['user_ids'] = 'Id needs to be longer';
            }
            if ($user_ids == '') {
              $error['user_ids'] = 'Email cannot be empty';
            }

            if (email_check($user_ids)) {
                $error['user_ids']  = "ID associated with an existing account, <a href='index.php'>Please login</a>";
            }

            if($password == ''){
              $error['password'] = "Password cannot be empty";
            }



      foreach($error as $key => $value){
          if(empty($value)){
          unset($error[$key]);
          }
      }
        if(empty($error)){
          register_user($username, $user_ids, $password);
          login_user($username,$password);
redirect("admin/index.php");
        }
    }
?>

<div  style="background-color:#ccc;">
    
    <div class="site-breadcrumb glyphicon glyphicon-home btn">
				<a href="index.php">Home</a>
				<span>- Signup</span>
			</div>
    <center>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr/>
<div class="row" >
    <div class="col-md-2"></div>
<div class="col-md-8">
    
<form action="" style="border:1px solid #ccc;  border-radius: 5em; background-color:lightblue; padding: 6em" method="post" enctype="multipart/form-data">
  <div class="form-group">
     <input   type="text" placeholder="Enter FirstName and LastName" name="username" required><br/>
    </div>
    
    <div class="form-group">
     <input   type="text" placeholder="Enter Matric No or Staff Id" name="user_ids" required><br/>
    </div>
                    <div class="col-3 form-group">
     <input  type="password" placeholder="Enter Password" name="psw" required>
    </div><br/>
                <div class="col-3 form-group">
     <input type="password" placeholder="Repeat Password" name="psw-repeat" required width="30%"><br/>
    </div>
   <label> 
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
     
         <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">

       <!-- <span class="btn btn-primary" type="submit" class="signupbtn" value='Register'>Register</span> -->
    <br/>
  </form>
   Click to <a href="s_login.php">Login</a> instead?
    </div>
        <div class="col-md-2"></div>

</div>
        </center>

<?php include "include_files/footer.php";?>
    </div>
