<?php require_once "include_files/header.php";?>


<div class="page-content">
    	<div class="row">


<?php //require_once "include_files/sidebar.php";?>

<div class="col-md-10">
 

                      <?php
if(isset($_GET['amount'])){

  $amount = $_GET['amount'];
}else {
  $amount = '';
}

switch ($amount) {

    case 'one_course':
      // code...
      include_once "include_files/one_c.php";
      break;
        
         case 'two_course':
      // code...
     include_once "include_files/two_c.php";
      break;

      case 'three_course':
        // code...
        include_once "include_files/three_c.php";
        break;

  default:
  include_once "include_files/one_c.php";
    break;
}

 ?>





</div>

 </div>
		</div> 

    <?php include_once "include_files/footer.php";?>
