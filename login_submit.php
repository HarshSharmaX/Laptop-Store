<?php
    require 'include/connection.php';
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['password']);
    $encrypted_password=md5($password);
    $select_query="SELECT id,email FROM users WHERE email='$email' AND password='$encrypted_password'";
    $select_query_result= mysqli_query($con, $select_query)
            or die(mysqli_error($con));
    $total_rows_fetched= mysqli_num_rows($select_query_result);
    if($total_rows_fetched==0){
        header('location:index.php ?error=Invalid email or password');}
    else {
        $row=mysqli_fetch_array($select_query_result);
        $_SESSION['email']=$email;
        $_SESSION['id']= $row['id']; 
        header('location: home.php'); }
?>

