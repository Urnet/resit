

<?php require_once "include_files/header.php";?>


<div class="page-content">
    	<div class="row">

        <!-- <div class="col-md-2"> -->
<?php //require_once "include_files/sidebar.php";?>
</div>
 

<?php

if(isset($_POST['reg'])){
 
    $fname = escape($_POST['fname']);
    $lname = escape($_POST['lname']);
    $lev = escape($_POST['lev']);
    $mat_no = escape($_POST['mat_no']);
    $stat = "paid 3000";
    $reference = "";
    $gpa = escape($_POST['gpa']);
    $fcourse = escape($_POST['fcourse']);
    $scourse = escape($_POST['scourse']);
    $tcourse = escape($_POST['tcourse']);
    $date_time = date('m/d/y h:i:s a', time());
    $sn = "";
  
     
$query = "INSERT INTO reg_year_one(sn, mat_no, stat, reference, date_time, fname, lname,
 gpa, lev, fcourse, scourse, tcourse)";
$query .= "VALUES ('{$sn}', '{$mat_no}', '{$stat}', '{$reference}', '{$date_time}', '{$fname}', '{$lname}',
 '{$gpa}', '{$lev}', '{$fcourse}', '{$scourse}', '{$tcourse}')";
 

  $create_post_query = mysqli_query($connection,$query);
//$the_post_id = mysqli_insert_id($connection);
  confirmQuery($create_post_query);

  require_once "print_out.php";

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
                            <div class="panel-title"><h3><b>ENTER DETAILS</b></h3></div>
						 
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
 <input type="text" value="Year 1" name="lev" hidden />

             <input type="text" style="width: 30%;" autocomplete="on" 
      name="fname" id="fname" class="form-control" placeholder="Enter FirstName" />
<br/>
<input type="text" style="width: 30%;" name="lname" class="form-control" placeholder="Enter lastName" />

      <p><?php echo isset($error['lname'])? $error['lname']:'' ?></p>
           
         </div>
            <br />
           <div class="form-group">

<input type="text" style="width: 30%;" class="form-control" autocomplete="on" placeholder="Enter mat.no" name="mat_no" required />
           
<input type="text" style="width: 30%;" class="form-control" placeholder="Enter last GPA" name="gpa" required />
</div>       
<!-- </div>
</div>
</div> -->
             <br /><hr /><br /> 
                                     
 <div class="form-group">
                                                                            <div class="col-md-4">
                                                                            <label class="control-label col-md-2">Select_First_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="fcourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                                <hr />
                                                                                <label class="control-label col-md-2">Select_Second_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="scourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               
                                                                               <hr /> 
                                                                               <label class="control-label col-md-2">Select_Third_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="tcourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               </div> 
                                                                       </div>
                                                                       
                                                      <div class="col-md-4 p-2 form-control">
                                                        
                            <button class="btn btn-primary" type="submit" name="reg" >Register</button>
</div>
                 </form>

								    </div>

								    <div class="tab-pane" id="tab2">
								    
								
 <form  action="" method="post" enctype="multipart/form-data">
 <div class="form-group ">
 <input type="text" value="Year 2" name="lev" hidden />

             <input type="text" style="width: 30%;" autocomplete="on" value=""
      name="fname" id="fname" class="form-control" placeholder="Enter FirstName" />
<br/>
<input type="text" style="width: 30%;" name="lname" class="form-control" placeholder="Enter lastName"  />

      <p><?php echo isset($error['lname'])? $error['lname']:'' ?></p>
           
         </div>
            <br />
           <div class="form-group">

<input type="text" style="width: 30%;" class="form-control" autocomplete="on" placeholder="Enter mat.no" name="mat_no" required />
           
<input type="text" style="width: 30%;" class="form-control" placeholder="Enter last GPA" name="gpa" required />
</div>       
<!-- </div>
</div>
</div> -->
             <br /><hr /><br /> 
                                     
 <div class="form-group">
 <div class="col-md-4">
                                                                            <label class="control-label col-md-2">Select_First_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="fcourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                                <hr />
                                                                                <label class="control-label col-md-2">Select_Second_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="scourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               
                                                                               <hr /> 
                                                                               <label class="control-label col-md-2">Select_Third_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="tcourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               </div> 
                                                                       </div>
                                                                       
                                                      <div class="col-md-4 p-2 form-control">
                                                        
                            <button class="btn btn-primary" type="submit" name="reg" >Register</button>
</div>
 </form>

									    </div>


									<div class="tab-pane" id="tab3">
                               
								
 <form  action="" method="post" enctype="multipart/form-data">
 <div class="form-group ">
 <input type="text" value="Year 3" name="lev" hidden />

             
             <input type="text" style="width: 30%;" autocomplete="on" value=""
      name="fname" id="fname" class="form-control" placeholder="Enter FirstName" />
<br/>
<input type="text" style="width: 30%;" name="lname" class="form-control" placeholder="Enter lastName" />

      <p><?php echo isset($error['lname'])? $error['lname']:'' ?></p>
           
         </div>
            <br />
           <div class="form-group">

<input type="text" style="width: 30%;" class="form-control" autocomplete="on" placeholder="Enter mat.no" name="mat_no" required />
           
<input type="text" style="width: 30%;" class="form-control" placeholder="Enter last GPA" name="gpa" required />
</div>       
<!-- </div>
</div>
</div> -->
             <br /><hr /><br /> 
                                     
 <div class="form-group">
 <div class="col-md-4">
                                                                            <label class="control-label col-md-2">Select_First_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="fcourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                                <hr />
                                                                                <label class="control-label col-md-2">Select_Second_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="scourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               
                                                                               <hr /> 
                                                                               <label class="control-label col-md-2">Select_Third_Course</label>
                                                                           <br />
                                                                               <select class="form-control" name="tcourse" style="width: 250px;">
                                                                                   <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                                   <option value="gns 111">GNS 111 | Foundation of Nursing I</option>
                                                                                   <option value="gns 112">GNS 112 | Nutrition</option>
                                                                                   <option value="gst 110">GNS 110 | Use of English</option>
                                                                                   <option value="gst 111">GST 111 | Applied Physics</option>
                                                                                   <option value="gst 112">GST 112 | Applied Chemistry</option>
                                                                                   <option value="gst 113">GST 113 | Sociology</option>
                                                                                   <option value="gst 114">GST 114 | Introduction to ICT</option>
                                                                                    
                                                                               </select>
                                                                               </div> 
                                                                       </div>
                                                                       
                                                      <div class="col-md-4 p-2 form-control">
                                                        
                            <button class="btn btn-primary" type="submit" name="reg" >Register</button>
</div>
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
