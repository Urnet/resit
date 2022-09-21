<?php error_reporting (0); ?>

  <?php 
//admin priviedge

                             if(!is_admin($_SESSION['username'])){

                                 redirect("index.php");
                             } 
                               else {                       } 
  ?>

<?php
          include ("delete_modal.php");

  if(isset($_POST['checkBoxArray'])){

foreach ($_POST['checkBoxArray'] as $postValueId) {
  // code...
  $bulk_options = $_POST['bulk_options'];

            switch ($bulk_options) {
              case 'published':
                $query = "UPDATE reg_year_one set stat = '{$bulk_options}' WHERE post_id = {$postValueId} ";

                    $update_to_published_status = mysqli_query($connection,$query);
                    confirmQuery($update_to_published_status);
                break;

                case 'draft':
                  $query = "UPDATE reg_year_one set stat = '{$bulk_options}' WHERE post_id = {$postValueId} ";

                      $update_to_draft_status = mysqli_query($connection,$query);
                      confirmQuery($update_to_draft_status);
                  break;

                  case 'delete':
                  $query = "DELETE FROM reg_year_one WHERE post_id = {$postValueId}";

                        $update_to_delete_status = mysqli_query($connection,$query);
                        confirmQuery($update_to_delete_status);
                    break;

                  case 'clone':

                  $query = "SELECT * FROM reg_year_one WHERE post_id = $postValueId";
                  $select_posts_query = mysqli_query($connection,$query);

                  while ($row = mysqli_fetch_array($select_posts_query)) {
                    $mat_no = $row['mat_no'];
                    $stat = $row['stat'];
                    $date_time = $row['date_time'];
                    $lname = $row['lname'];
                    $fname = $row['fname'];
                    $gpa = $row['gpa'];
                  //  $post_image_temp = $_FILES['image']['tmp_name'];
                    $lev = $row['lev'];
                    $fcourse = $row['fcourse'];
                    $scourse = $row['scourse'];
                    $tcourse = $row['tcourse'];
                    $reference = $row['reference'];
                    // $sn = $row['sn'];
     
                    $query = "INSERT INTO reg_year_one(sn, mat_no, stat, reference, date_time, fname, lname,
                    gpa, lev, fcourse, scourse, tcourse)";
                   $query .= "VALUES ('{$sn}', '{$mat_no}', '{$stat}', '{$reference}', '{$date_time}', '{$fname}', '{$lname}',
                    '{$gpa}', '{$lev}', '{$fcourse}', '{$scourse}', '{$tcourse}')";
                    
                   
                     $create_post_query = mysqli_query($connection,$query);
                      confirmQuery($create_post_query);
 
                  }

                    break;

            }

}

   }

 ?>  
 

<form class="" action="" method="post">


<table class="table table-bordered table-hover ">

<div id="bulkOptionsContainer" class="col-xs-4">

  <select class="form-control" name="bulk_options">
    <option value="">select Options</option>
    <!-- <option value="published">Publish</option>
    <option value="draft">Draft</option> -->
    <option value="delete">Delete</option>
    <!-- <option value="clone">Clone</option> -->
  </select>

  </div>
   <div class="col-xs-4"> 
    <input type="submit" name="submit" value="Apply" class="btn btn-success">  
    <!-- <a href="posts.php?source=add_post" class="btn btn-primary">Add New</a> -->
  </div>
<br/><hr/>

  <thead>
    <tr>
      <th><input type="checkbox" name="" id="selectAllBoxes">  </th>
      <th>Sn</th>
        <!-- <th>Post_by</th>
      <th>Publisher</th>
      <th>Composer</th> -->
      <th>Lastname</th>
      <th>FirstName</th>
      <th>Last_gpa</th>
      <th>Level</th>
      <th>Mat. No</th>
      <th>Payment_Status</th>
      <th>1st Course</th>
       <th>2nd Course</th>
      <th>3rd Course</th>
      <th>Reference</th>
      <th>Pay Date</th>
      <th>Edit</th>
      <th>Delete</th>
      <!-- <th>Post Views</th> -->
    </tr>
  </thead>
  <tbody>
   <?php
   $query = "SELECT * FROM reg_year_one ORDER BY sn DESC";
   $select_posts = mysqli_query($connection,$query);

   while($row = mysqli_fetch_assoc($select_posts)) {
   $mat_no = $row['mat_no'];
   $stat = $row['stat'];
   $date_time = $row['date_time'];
   $lname = $row['lname'];
   $fname = $row['fname'];
   $gpa = $row['gpa'];
   $lev = $row['lev'];
   $fcourse = $row['fcourse'];
   $scourse = $row['scourse'];
   $tcourse = $row['tcourse'];
   $reference = $row['reference'];
  //  $post_tags = $row['post_tags'];
  //  $post_comment_count = $row['post_comment_count'];
  //  $post_date = $row['post_date'];
  //  $post_views_count = $row['post_views_count'];


echo "<tr>";
?>
<td>
 <input type='checkbox' class="checkBoxes" id='selectAllBoxes' name="checkBoxArray[]" value="<?php echo $post_id;?>">
</td>
 <?php
echo "<td>{$post_id}</td>";
//        echo "<td>{$post_by}</td>";
// echo "<td>{$post_publisher}</td>";
// echo "<td>{$post_author}</td>";
// echo "<td>{$lname}</td>";

echo "<td>{$lname}</td>";

echo "<td>{$fname}</td>";
echo "<td>{$gpa}</td>";
echo "<td>{$lev}</td>";
 echo "<td>{$mat_no}</td>";
echo "<td>{$stat}</td>";
echo "<td>{$fcourse}</td>";
echo "<td>{$scourse}</td>";
echo "<td>{$tcourse}</td>";
echo "<td>{$reference}</td>";
echo "<td>{$date_time}</td>";
echo "<td><a class='btn btn-info'  href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
 echo '<td><input class="btn btn-danger" type="submit" name="delete" Value="Delete"></td>';

   }
$query = "SELECT * FROM categories WHERE cat_id = {$post_cat_id}";
$select_categories_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_categories_id)) {
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];

echo "<td>{$lname}</td>";

echo "<td>{$fname}</td>";
echo "<td>{$gpa}</td>";
echo "<td>{$lev}</td>";
 echo "<td>{$mat_no}</td>";
echo "<td>{$stat}</td>";
echo "<td>{$fcourse}</td>";
echo "<td>{$scourse}</td>";
echo "<td>{$tcourse}</td>";
echo "<td>{$reference}</td>";
}
// $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
// $send_comment_query = mysqli_query($connection,$query);

// $row = mysqli_fetch_array($send_comment_query);
// $comment_id = $row['comment_id'];
// $count_comments = mysqli_num_rows($send_comment_query);

// echo "<td><a class='btn btn-primary' href='post_comments.php?id=$post_id'>[{$count_comments}] commented</a></td>";


echo "<td>{$date_time}</td>";
// echo "<td><a class='btn btn-primary' href='../post.php?p_id={$post_id}'>View Registeration</a></td>";
echo "<td><a class='btn btn-info'  href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";

?>
<form method="post">
<input type="hidden" name="post_id" value="<?php echo $post_id ?>">

<?php echo '<td><input class="btn btn-danger" type="submit" name="delete" Value="Delete"></td>';
 ?>
</form>
<?php

echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to Delete'); \" href='posts.php?delete={$post_id}'>Delete</a></td>";

// echo "<td><a class='btn btn-success' href='posts.php?reset={$post_id}'><b>{$post_views_count}</b><small> Views__</small><i>Click to Reset</i></a></td>";

echo "</tr>";

// }
  //  }
    ?>


   </tbody>
</table>

</form> 

<?php

if(isset($_POST['delete'])){

$the_post_id = escape($_POST['sn']);

$query = "DELETE FROM reg_year_one WHERE sn = {$the_post_id}";
$delete_query = mysqli_query($connection,$query);

//refreshing the page
header("location:./courses.php");

}

if(isset($_GET['reset'])){

$the_post_id = $_GET['reset'];

$query = "UPDATE  reg_year_one SET post_views_count = 0 WHERE post_id =" . mysqli_real_escape_string($connection, $_GET['reset']) ." ";
$reset_query = mysqli_query($connection,$query);

//refreshing the page
header("location:./courses.php");

}
 ?>



<script>
    


    $(document).ready(function(){


        $(".delete_link").on('click', function(){


            var id = $(this).attr("rel");

            var delete_url = "courses.php?delete="+ id +" ";


            $(".modal_delete_link").attr("href", delete_url);


            $("#myModal").modal('show');


        });

    });



  <?php if(isset($_SESSION['message'])){

         unset($_SESSION['message']);

     }
    // }
         ?>



</script>

