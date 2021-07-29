<?php
    require 'include/connection.php';
    if (!isset($_SESSION['email'])) 
    { header('location: index.php');}
    $password= mysqli_real_escape_string($con,$_POST['oldpassword']);
    $new_password=mysqli_real_escape_string($con,$_POST['newpassword']);
    $retype_password=mysqli_real_escape_string($con,$_POST['retypepassword']);
    if(strlen($password)<6){
    header('location:settings.php?password_error=enter password more than 6 characters');exit;
    }
    if(strlen($new_password)<6){
    header('location:settings.php?password_error=enter password more than 6 characters');exit;
    }
    if(strlen($retype_password)<6){
    header('location:settings.php?password_error=enter password more than 6 characters');exit;
    }

    $encrypted_password= md5($password);
    $select_query="SELECT id,password FROM users WHERE password='$encrypted_password'";
    $select_query_result= mysqli_query($con, $select_query);
    $rows_fetched= mysqli_num_rows($select_query_result);
    if($rows_fetched>0){
        if($new_password==$retype_password){
            $encrypted_newpassword= md5($new_password);
            $update_query="UPDATE users SET password='$encrypted_newpassword' WHERE password='$encrypted_password'";
            $update_result= mysqli_query($con , $update_query);
            header('location: home.php');
        }
        else{
            header('location: settings.php?error=passwords dont match');
        }
        
    }
    else{
        header('location: settings.php?final_error=enter correct password');
    }
        
    ?>
