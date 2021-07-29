<?php
 require 'include/connection.php';
 $item_id=$_GET['id'];
 $user_id=$_SESSION['id'];
 $delect_query = "DELETE FROM users_items_compare WHERE users_id = '$user_id' AND items_id = '$item_id'";
 mysqli_query($con, $delect_query)
         or die(mysqli_error($con));;
 header('location: compare.php');
 ?>
