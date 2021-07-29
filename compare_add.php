<?php
require 'include/connection.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$insert_query= "INSERT INTO users_items_compare(users_id, items_id, status) VALUES('$user_id', '$item_id', 'Added to Compare')" ;
$query_result= mysqli_query($con , $insert_query)
        or die(mysqli_error($con));
 header('location: home.php');
?>

