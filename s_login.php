
<!-- header -->
<?php include "include_files/header.php";?>

<!--            <div class="container" style="background-color:lightblue;">-->
 <?php include "include_files/head.php";?>

	                

 <?php
      // if(isset($_POST['submit'])){
      //   $username = $_POST['username']; $password = $_POST['password'];
      //   if($username === '' && $password === 'password'){
      //     $_SESSION['login'] = true; header('LOCATION:admin'); die();
      //   } {
      //     echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
      //   }
        
      // }
    ?>

                     <div style="background-color:lightblue;">  
           <div class="site-breadcrumb glyphicon glyphicon-home btn">
				<a href="index.php">Home</a>
				<span>- Login</span>
			</div>
<center>      
        <h3><b>ONLINE POST SEMESTER REGISTRATION
          <br/>  <small>
            PLEASE LOGIN BELOW
        </small>
            </b>
            </h3>       
   <div class="row">
        <div class="col-md-3"></div>         
               <div class="col-md-6">
        <form action="include_files/login.php" method="post">
            <div class="imgcontainer">
              <img src="avatar.png" alt="Avatar" class="avatar">
            </div>


      



          <hr/>
                <div class="col-3 form-group">
               <label for="text"><b>Username</b></label>
              <input class="form-control" type="text" placeholder="Enter username" name="username" required style="width:10;" /><br/>
                </div>
                <div class="form-group">
              <label for="text"><b>Password</b></label>
              <input class="form-control" type="password" placeholder="Enter Password" name="user_password" required /><br/>
                </div>
              <button class="btn btn-primary" type="submit" name="login">Login</button><br>
              
                                            
                  <br/><label> 
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </form> 
 

            <!-- <form action="include_files/login.php" method="post">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Enter Username">
                </div>

                  <div class="input-group ">
                    <input name="password" type="password" class="form-control" placeholder="Enter Password">
                    <span class="input-group-btn">
                       <button class="btn btn-primary glyphicon-log-in" name="login" type="submit">Login
                       </button>
                    </span>
                    
                </div>
                </form> -->


            
       </div>         
        <div class="col-md-3"></div>         

            </div>
            <br/>
            <div class="" style="background-color:#f1f1f1">
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            <span class="psw">Is it your first time? <a href="registration.php">SIGN UP</a></span>
           
       
    <br/><hr/><br/>
        </center>

                        </div>
 <!--</div>-->



   <!-- login -->
   <!-- <div class="well">
<?php if(isset($_SESSION['user_role'])): ?>
<h4><b>Logged in as <small>
  <?php echo $_SESSION['username']; ?>


</small></b></h4>
  <a href="include_files/logout.php" class="btn btn-danger" name="logout">
<span class="glyphicon-log-out">Logout</span>
</a>
<?php else:?>

        <h4>Login</h4>
 
        
         <form action="include_files/login.php" method="post">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Enter Username">
                </div>

                  <div class="input-group ">
                    <input name="password" type="password" class="form-control" placeholder="Enter Password">
                    <span class="input-group-btn">
                       <button class="btn btn-primary glyphicon-log-in" name="login" type="submit">Submit
                       </button>
                    </span>
                    
                </div>
                </form>
<?php endif; ?>

     </div> -->



 



<?php include "include_files/footer.php";?>
