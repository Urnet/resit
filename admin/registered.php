<?php error_reporting (0); ?>

<?php require_once "include_files/header.php";?>


<div class="page-content">
    	<div class="row">


<?php require_once "include_files/sidebar.php";?>

<div class="col-md-10">

    <h1><B>THE SCHOOL OF NURSING, BIDA</B></h1>


    <H3><B> RE-SIT REGISTRATION FORM</B></H3>

    <!-- <h6>WELCOME</h6> -->


    
                        <!--Posts table-->
<?php
if(isset($_GET['source'])){

  $source = $_GET['source'];
}else {
  $source = '';
}

switch ($source) {

    case 'add_post':
      // code...
     include "includes/add_post.php";
      break;
      
      case 'edit_post':
        // code...
        include "includes/edit_post.php";
        break;

  default:
  include_once "include_files/view_all_users.php";
    break;
}

 ?>

</div>

 </div>
		</div>



 
    <!-- /#wrapper -->

    

    <?php include_once "include_files/footer.php";?>
