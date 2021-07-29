<?php
require 'include/connection.php';
$email=$_POST['email'];
$regex_email="/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$select_query="SELECT id,email FROM users WHERE email='$email';";
$select_query_res= mysqli_query($con, $select_query) 
        or die(mysqli_error($con));
if(!preg_match($regex_email, $email)){
    header('location:forgotpassword.php?email_error=enter valid email');exit;
}
$total_rows_fetched= mysqli_num_rows($select_query_res);
if($total_rows_fetched>0){
        header('location:forgotpassword.php?email_error=New Password sent to your registered mail.Please check');
}
 else {
        header('location:forgotpassword.php?email_error=Enter correct email');
}
?>

