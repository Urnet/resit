<?php error_reporting (0); ?>

 
<?php
// session_start();
require_once "include_files/header.php";?>
 

 <!-- Page Content -->
 <div class="container">
     <div class="row">

     <div class="col-md-3"></div>
     <div class="col-md-3"></div>

 
           <div class="col-md-8">

                     <div class="content-box-large ">
                       <div class="panel-heading">
                       <!-- <img src="../l.png" alt="LOgo" width="70" height="60">                                                                     -->

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
<p> <?php echo  $_POST["lname"] . ' ' .  $_POST["fname"];?>  </p>
<hr/>
<label class="control-label col-md-3">Matric No.:</label>
<p><?php echo  $_POST["mat_no"];?></p>
      </div>
      <hr /> 
      <!-- <div class="form-group "> -->

<label class="control-label col-md-3">Level: </label>
<p> <?php echo  $_POST["lev"];?> </p>
<hr/>
<label class="control-label col-md-3">GPA:</label>
<p> <?php echo $_POST["gpa"]?></p>
      <!-- </div>  -->
      <hr />               
                          <label class="control-label col-md-3">Registered Course Code: </label>
                         <br />  <hr />
                                          <option >
                                          <?php echo  $_POST["fcourse"];?>
                                          </option>
                                                             <!-- <br /> -->
                                                <option  > 
                                                        <?php
                                                        if($_POST["scourse"] !==""){
                                                          echo $_POST["scourse"];
                                                        }
                                                       ?>
                                                        </option>
                                                        <option >
                                          <?php
                                              if($_POST["tcourse"] !==""){
                                                   echo  $_POST["tcourse"];
                                                        }
                                                        ?>
                                          </option>                     
                                                                    <br /><hr /><br /><br /><br />
                                                                                               
<label class="control-label col-md-6">Signature :<img src="s.png" alt="signed" width="90" height="30"> </label>

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
    //  }

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
