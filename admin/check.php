 
 
<?php require_once "include_files/header.php";?>
 

    <!-- Page Content -->
    <div class="container">
        <div class="row">

        <div class="col-md-3"></div>

 
               
              $fname = $row['fname'];
              $lname = $row['lname'];
              $gpa = $row['gpa'];
              $lev = $row['lev'];
              $fcourse = $row['fcourse'];
            $scourse = $row['scourse'];
                  $tcourse = $row['tcourse'];
              $reference = $row['reference'];
              $mat_no = $row['mat_no'];
              $sn = $row['sn'];    
              $date_time = $row['date_time'];    
                  
   
              <div class="col-md-8">
 
						<div class="content-box-large ">
		  				<div class="panel-heading">
 
                             <!-- <hr />  -->
                             <h3><B>Course Re-sit Form</B></h3>
                  <div class="content-box-large">
		  	<div class="panel-heading">
			 
		  				<div class="panel-body">
		  					<div id="rootwizard">
							 
								<div class="tab-content">
								    <div class="tab-pane active" id="tab1" >

 <!-- <form  action="" method="post" enctype="multipart/form-data"> -->
 <div class="form-group ">
 
 <label class="control-label col-md-3">Student Name: </label>
<p>nameeeeeee</p>
<hr/>
<label class="control-label col-md-3">Matric No.:</label>
<p>111111111111</p>
         </div>
         <hr /> 
         <!-- <div class="form-group "> -->
 
 <label class="control-label col-md-3">Level: </label>
<p>year 1</p>
<hr/>
<label class="control-label col-md-3">GPA:</label>
<p>3</p>
         <!-- </div>  -->
         <hr />               
                             <label class="control-label col-md-3">Selected Course: </label>
                            <br />  <hr />
                                             <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                <br />
                                                           <option value="gns 110">GNS 110 | Anatomy & Physiology I</option>
                                                                     
                                                                       <br /><hr /><br /><br /><br /> 
  <label class="control-label col-md-6">Signature : ________________</label>
 
								    </div>

								      
								</div>	
							</div>
		  				</div>
		  			</div>
</div>
<button onclick="printw()">print</button>

                                                                        </div>
</div></div>
 
</div>











             
  <?php
      //   }

      // }
    // }
     ?> 
               
  <div class="col"></div>



<script>

function printw(){
window.print()

}

</script>


</div>
</div>
<?php require_once "include_files/footer.php";?>
