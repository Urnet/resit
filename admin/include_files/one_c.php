

<?php 
// session_start();

require_once "include_files/header.php";?>


<div class="page-content">
    	<div class="row">

        <!-- <div class="col-md-2"> -->
<?php //require_once "include_files/sidebar.php";?>
</div>
 


<?php

// $ref = $_GET['reference'];
// $ref = $_POST['reference'];
// if ($ref == " ") {
//         // get redirected back to previous page
//     header("Location:javascript://history.go(-1)");
// }


if(isset($_POST['reg'])){
 
    $fname = escape($_POST['fname']);
    $lname = escape($_POST['lname']);
    $lev = escape($_POST['lev']);
    $mat_no = escape($_POST['mat_no']);
    $stat = "paid 1000";
    $reference = "";
    // $reference ;
    // $reference = $_SESSION['reference'];
    // $reference = $_GET['reference'];
    $gpa = escape($_POST['gpa']);
    $fcourse = escape($_POST['fcourse']);
    // $scourse = escape($_POST['scourse']);
    // $tcourse = escape($_POST['tcourse']);
    $scourse = "";
    $tcourse = " ";
    $date_time = date('m/d/y h:i:s a', time());
    $sn = "";
  
     
$query = "INSERT INTO reg_year_one(sn, mat_no, stat, reference, date_time, fname, lname,
 gpa, lev, fcourse, scourse, tcourse)";
$query .= "VALUES ('{$sn}', '{$mat_no}', '{$stat}', '{$reference}', '{$date_time}', '{$fname}', '{$lname}',
 '{$gpa}', '{$lev}', '{$fcourse}', '{$scourse}', '{$tcourse}')";
 

  $create_post_query = mysqli_query($connection,$query);
//$the_post_id = mysqli_insert_id($connection);
  confirmQuery($create_post_query);

//   echo   $fname ; 
require_once "print_out.php";
//    echo   $reference ; 
    // echo "<div class='col-md-2'>Course Registered  $reference -  <a class='btn btn-success' href='print_out.php'>Print Form</a></div>";
}
 ?>

<div class="col-md-2"></div>
     <div class="col-md-8">
     <h2><B>THE SCHOOL OF NURSING, BIDA</B></h2>


<!-- <div class="col-md-10"> -->
    
<!-- <form  action="print.php" method="post" class="form-group" role="form" enctype="multipart/form-data"> -->

						<div class="content-box-large ">
		  				<div class="panel-heading">
							
                            <div class="container ">
                            <div class="row">   
                            <div class="col-12"> 
                            <div class="panel-title"><h3><b>ENTER DETAILS</b></h3>
                        <?php 
                        // echo $ref = $_GET[$ref];
                        // echo $ref = $_GET['reference'];
                        // echo $ref = $_SESSION[$ref];
                        // echo $ref = $_POST[$reference];
                        // echo $ref = $_POST['reference'];
                        // echo $ref = $_GET[$reference];
                        // echo $ref = $_GET['reference'];
                        // echo $ref = $_SESSION['reference'];
                        // echo $ref = $_POST[$reference];
                        // echo $ref = $_POST['reference'];
                        
                        ?>
 
                        </div>
			 
</div>
</div>
 </div>
                             <hr /> 
                               

                                                                       <div class="content-box-large">
		  	<div class="panel-heading">
			<div class="panel-title">
                <!-- <h3><b>SELECT COURSE(S) TO REWRITE</b></h3></div> -->
							
						 
						</div>
		  				<div class="panel-body">
		  					<div id="rootwizard">
								<div class="navbar">
								  <div class="navbar-inner">
								    <div class="container">
								<ul class="nav nav-pills" >
								  	<li class="active"><a href="#tab1" data-toggle="tab" >First Year</a></li>
									<li><a href="#tab2" data-toggle="tab" >Second Year</a></li>
									<li><a href="#tab3" data-toggle="tab" >Third Year</a></li>
								</ul>
								 </div>
								  </div>
								</div>
								<div class="tab-content">
								    <div class="tab-pane active" id="tab1" >

 <form  action="" method="post" enctype="multipart/form-data">
 <div class="form-group ">
 <input type="text" value="Year 1" id="lev" name="lev" hidden />

             <input type="text" style="width: 30%;"  autocomplete="on" value=""
      name="fname" id="fname" class="form-control" placeholder="Enter FirstName" />
<br/>
<input type="text" style="width: 30%;" name="lname" id="lname"  class="form-control" placeholder="Enter lastName" />

      <p><?php echo isset($error['lname'])? $error['lname']:'' ?></p>
           
         </div>
            <br />
           <div class="form-group">

<input type="text" style="width: 30%;" class="form-control" autocomplete="on" placeholder="Enter mat.no" id="mat_no" name="mat_no" required />
           
<input type="text" style="width: 30%;" class="form-control" placeholder="Enter last GPA" id="gpa" name="gpa" required />
</div>       
<!-- </div>
</div>
</div> -->
             <br /><hr /><br /> 
                                     
 <div class="form-group">
                                                                           <label class="control-label col-md-2">Select_First_Course</label>
                                                                           <br /> <div class="col-md-4">
                                                                               <select class="form-control" id="fcourse" name="fcourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               <br /><hr /><br /> 
                                                                               </div>


                                                                       </div>
                                                                       <br /><hr /><br /> 

                                                                       <button class="btn btn-primary" type="submit" name="reg" >Register</button>
                 </form>

								    </div>

								    <div class="tab-pane" id="tab2">
								    
								
 <form  action="" method="post" enctype="multipart/form-data">
 <div class="form-group ">
 <input type="text" value="Year 2" id="lev" name="lev" hidden />

             <input type="text" style="width: 30%;" autocomplete="on" value=""
      name="fname" id="fname" class="form-control" placeholder="Enter FirstName" />
<br/>
<input type="text" style="width: 30%;" name="lname" id="lname" class="form-control" placeholder="Enter lastName"  />

      <p><?php echo isset($error['lname'])? $error['lname']:'' ?></p>
           
         </div>
            <br />
           <div class="form-group">

<input type="text" style="width: 30%;" class="form-control" autocomplete="on" placeholder="Enter mat.no" id="mat_no" name="mat_no" required />
           
<input type="text" style="width: 30%;" class="form-control" placeholder="Enter last GPA" name="gpa" id="gpa" required />
</div>       
<!-- </div>
</div>
</div> -->
             <br /><hr /><br /> 
                                     
 <div class="form-group">
                                                                           <label class="control-label col-md-2">Select_First_Course</label>
                                                                           <br />   <div class="col-md-4">
                                                                               <select class="form-control" style="width: 250px;" id="fcourse" name="fcourse">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               <br /><hr /><br /> 
                                                                               </div>


                                                                       </div>                                                          
                                                                                            <br /><hr /><br /> 

                                                                       <button class="btn btn-primary" type="submit"  name="reg" id="reg" >Register</button>
                 </form>

									    </div>


									<div class="tab-pane" id="tab3">
                               
								
 <form  action="" method="post" enctype="multipart/form-data">
 <div class="form-group ">
 <input type="text" value="Year 3" id="lev" name="lev" hidden />

             
             <input type="text" style="width: 30%;" autocomplete="on" value=""
      name="fname" id="fname" class="form-control" placeholder="Enter FirstName" />
<br/>
<input type="text" style="width: 30%;" name="lname" id="lname" class="form-control" placeholder="Enter lastName" />

      <p><?php echo isset($error['lname'])? $error['lname']:'' ?></p>
           
         </div>
            <br />
           <div class="form-group">

<input type="text" style="width: 30%;" class="form-control" autocomplete="on" placeholder="Enter mat.no" id="mat_no" name="mat_no" required />
           
<input type="text" style="width: 30%;" class="form-control" placeholder="Enter last GPA" id="gpa" name="gpa" required />
</div>       
<!-- </div>
</div>
</div> -->
             <br /><hr /><br /> 
                                     
 <div class="form-group">
                                                                           <label class="control-label col-md-2">Select_First_Course</label>
                                                                           <br />   <div class="col-md-4">
                                                                               <select class="form-control" style="width: 250px;" id="fcourse" name="fcourse">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               <br /><hr /><br /> 
                                                                               </div>


                                                                       </div>                                                                               <br /><hr /><br /> 

                                                                       <button class="btn btn-primary" type="submit" name="reg" >Register</button>
                 </form>


								    </div>
									 
								</div>	
							</div>
		  				</div>
		  			</div>
</div>

                                                                        </div>
</div></div>
<!-- </form> -->

</div>
<div class="col-md-2">
<!-- </div> -->
</div>
</div>
</div>
<?php require_once "include_files/footer.php";?>
