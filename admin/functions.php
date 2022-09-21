
<?php
        //redirection function
    function redirect($location){
      return header("Location:" . $location);
    }

//sql injection prevention function
      function escape($string){
          global $connection;
          return mysqli_real_escape_string($connection, trim($string));
      }




function set_message($msg){

if(!$msg) {

$_SESSION['message']= $msg;

} else {

$msg = "";


    }


}


function display_message() {

    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }


}


    function users_online(){
      if (isset($_GET['onlineusers'])) {
          global $connection;
//if (!connection) {
    session_start();
    include_once ("../include_files/db.php");

      //grabs the number of session/users online
      $sessionId = session_id();
      $time = time();
      $time_out_in_seconds = 05;
      $time_out = $time - $time_out_in_seconds;

      $query = "SELECT * FROM users_online WHERE session = '$sessionId'";
      $send_query = mysqli_query($connection,$query);
      $count = mysqli_num_rows($send_query);

        if ($count == NULL) {
          mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$sessionId','$time')");

        }else {

          mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session ='$sessionId'");
        }

      $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
  echo  $count_user = mysqli_num_rows($users_online_query);

  //}


}//get request

    }
    users_online();



function confirmQuery($result){
  global $connection;

  if(!$result){
    die("QUERY FAILED" . mysqli_error($connection));
  }
}


function insert_category(){
  global $connection;
        if(isset($_POST['submit'])){
      $cat_title =  $_POST['cat_title'];
$stmt =mysqli_prepare($connection, "INSERT INTO categories(cat_title) VALUES(?) ");
      if($cat_title == "" || empty($cat_title)){
        echo "This field should not be empty";
      }else {


        // $query = "INSERT INTO categories(cat_title)";
        // $query .= "VALUE('{$cat_title}')";
        // $create_category_query = mysqli_query($connection, $query);

        
        mysqli_stmt_bind_param($stmt, 's', $cat_title);
        mysqli_stmt_execute($stmt);



        if(!$stmt){
          die('QUERY FAILED' . mysqli_error($connection));
        }
      }
            mysqli_stmt_close($stmt);
        }
}


function findAllCategories(){
  global $connection;

  $query = "SELECT * FROM categories";
  $select_categories = mysqli_query($connection,$query);

  while($row = mysqli_fetch_assoc($select_categories)) {
  $cat_id = $row['cat_id'];
  $cat_title = $row['cat_title'];

  echo "<tr>";
  echo "<td>{$cat_id}</td>";
  echo "<td>{$cat_title}</td>";
  echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
  echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
  echo "</tr>";
  }

}

function deleteCategories(){
  global $connection;
  if(isset($_GET['delete'])){
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id ={$the_cat_id}";
    $delete_query = mysqli_query($connection,$query);
  //refreshing the page
  header("location:categories.php");
  }

}


// function is_admin($username = ''){
 
function is_admin($username) {

    global $connection; 

    $query = "SELECT user_role FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    $row = mysqli_fetch_array($result);


    if($row['user_role'] == 'admin'){

        return true;

    }else {


        return false;
    }

}


//function user presence($username = ''){
 
  function is_user($username) {
  
      global $connection; 
  
      $query = "SELECT user_role FROM users WHERE username = '$username'";
      $result = mysqli_query($connection, $query);
      confirmQuery($result);
  
      $row = mysqli_fetch_array($result);
  
  
      $row = mysqli_fetch_array($result);
      if(mysqli_num_rows($result) < 0){
        return true;
      }else{
        return false;
}
  
  }
  

//username duplication check
function user_check($username=''){
  global $connection;

  $query = "SELECT username FROM users WHERE username = '$username'";
  $result = mysqli_query($connection,$query);

  confirmQuery($result);

  $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result) > 0){
          return true;
        }else{
          return false;
  }
}


      //email duplication check
      function id_check($user_ids){
        global $connection;

        $query = "SELECT user_ids FROM users WHERE user_ids = '$user_ids'";
        $result = mysqli_query($connection,$query);

        confirmQuery($result);

        $row = mysqli_fetch_array($result);
              if(mysqli_num_rows($result) > 0){
                return true;
              }else{
                return false;
        }
    }


        function register_user($username,$mat_no,$password){
          global $connection;

          $username = mysqli_real_escape_string($connection,$username);
          $user_password = mysqli_real_escape_string($connection,$user_password);
          $mat_no = mysqli_real_escape_string($connection,$mat_no);
          $user_password  = password_hash( $user_password, PASSWORD_BCRYPT, array('cost' => 10));

          $query = "INSERT INTO users(username, user_password, mat_no, user_role)";
          $query.= "VALUES('{$username}','{$user_password}', '{$mat_no}', 'student' ) ";
          $register_user_query = mysqli_query($connection,$query);

          confirmQuery($register_user_query);
    }
  

    function login_user($username, $password){
global $connection;
    $username = trim($username);
    $password = trim($password);
         
      $username = mysqli_real_escape_string($connection,$username);
      $password = mysqli_real_escape_string($connection,$password);
 
      // $query = "SELECT * FROM users WHERE username = '{$username}' AND user_password = '{$password}'";
      $query = "SELECT * FROM users WHERE username = '{$username}'";
      $select_user_query = mysqli_query($connection,$query);

      if(!$select_user_query){
      die("QUERY FAILED". mysqli_error($connection));
      }

      while ($row = mysqli_fetch_array($select_user_query)) {
        // code...
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
        $db_user_mat_no = $row['mat_no'];
        // $db_user_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
      }

      //reversing the encrypted password for logining in
      // $password = crypt($password, $db_user_password);

      if (password_verify($password,$db_user_password)) {

        $_SESSION['username'] = $db_username;
        $_SESSION['mat_no'] = $db_user_mat_no;
        // $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;

        redirect("/oerp/admin");


       } else {

       redirect("../index.php");
//          header("Location: index.php");

      }

    }
 
 ?>
