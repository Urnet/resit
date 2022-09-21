<?php include "include_files/header.php";?>
<?php include "include_files/head.php";?>

<div class="site-breadcrumb glyphicon glyphicon-home btn">
				<a href="index.php">Home</a>
				<span>- Signup</span>
			</div>

      <?php
    // session_start();
    // if(!isset($_SESSION['login'])) {
    //     header('LOCATION:login.php'); die();
    // }
?>



<?php
        // if ($_SERVER['REQUEST_METHOD'] == "POST") {

      if (isset($_POST['submit'])) {
        // code...
            $username = trim($_POST['username']);
            $mat_no = trim($_POST['mat_no']);
            $password = trim($_POST['user_password']);
 
        $error = [

            'username'=>'',
            'user_ids' => '',
            'user_password'=> '' 
        ];

            if(strlen($username) < 4){
              $error['username'] = 'Username needs to be longer';
            }
            if ($username == '') {
              $error['username'] = 'Username cannot be empty';
            }

            if (user_check($username)) {
              $error['username'] = "Username Exists Already";
            } 
             
            if(strlen($mat_no) < 4){
              $error['mat_no'] = 'Id needs to be longer';
            }
            if ($mat_no == '') {
              $error['mat_no'] = 'Id cannot be empty';
            }

            // if (email_check($user_ids)) {
            //     $error['user_ids']  = "Id associated with an existing account, <a href='index.php'>Please login</a>";
            // }

            if($password == ''){
              $error['user_password'] = "Password cannot be empty";
            }



      foreach($error as $key => $value){
          if(empty($value)){
          unset($error[$key]);
          }
      }
        if(empty($error)){
          register_user($username, $mat_no, $password);
          login_user($username,$password);
redirect("admin/index.php");
        }
    }
?>
    <!-- Navigation -->




    
<?php

// if(isset($_POST['submit'])){
 
//     $username = escape($_POST['username']);
//     $mat_no = escape($_POST['mat_no']);
//     $user_password = escape($_POST['user_password']);
//     $user_email = '';
//     $user_role = '';
     
  
     
// $query = "INSERT INTO users(user_id, username, user_password, mat_no, user_email, user_role)";
// $query .= "VALUES ('{$user_id}', '{$username}', '{$user_password}', '{$mat_no}', '{$user_email}', '{$user_role}')";
 

//   $reg_query = mysqli_query($connection,$query);
//    confirmQuery($reg_query);

  // require_once "print_out.php";
// }
 ?>
 
        <div class="row">
            <div class="col-xs-6 col-6 col-xs-offset-3 col-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
              <input type="text" autocomplete="on" value="<?php echo isset($username)? $username:'' ;?>"
               name="username" id="username" class="form-control" placeholder="Enter username">
 <p><?php echo isset($error['username'])? $error['username']:'' ?></p>
                        </div>
                         
                        <!-- <div class="form-group">
                            <label for="user_ids" class="sr-only">Ids</label>
                            <input type="text" autocomplete="on" value="<?php //echo isset($user_ids)? $user_ids:'' ?>"
                             name="user-ids" id="user_ids" class="form-control" placeholder="Enter Matric No or Staff Id">
<p><?php// echo isset($error['user_ids'])? $error['user_ids']:'' ?></p>
                        </div> -->


                        <div class="form-group">
                        <label for="user_ids" class="sr-only">Ids</label>

     <input   type="text" autocomplete="on" class="form-control" placeholder="Enter Matric No " name="mat_no" required><br/>
    </div>


                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="user_password" id="key" class="form-control" placeholder="Password">
<p><?php echo isset($error['user_password'])? $error['user_password']:'' ?></p>
                        </div>

                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>

                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    <!-- </div> -->
     <!-- /.container -->
<!-- </section> -->


        <hr>



        <?php include "include_files/footer.php";?>
    </div>