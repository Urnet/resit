<?php ob_start(); ?>
<?php  
//database_connection_2 using array function for more secured db.
$db['db_host'] = "localhost"; 
$db['db_user'] = "root";

$db['db_pass'] = "";

$db['db_name'] = "fed_nurs_db";

//using uppercase function for each value of the array
foreach ($db as $key => $value) {define(strtoupper($key),$value);}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//testing the connection
//if($connection){  echo "we are connected";}

 ?>



<?php
    /*  ---------------------------------------------------------------------------
     * 	@package	: mychoirsongs
     *	@author 	: Urnet
     *  @email      : emailurworld.net@gmail.com
     *	@version	: 1.1
     *	@link		: http://www.urnet.com.ng
     *	@copyright	: Copyright (c) 2022, http://www.urnet.com.ng
     *	--------------------------------------------------------------------------- */
?>