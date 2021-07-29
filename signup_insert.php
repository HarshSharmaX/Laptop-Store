<?php
require 'include/connection.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$encrypted_password= md5($password);
      $enter=$_POST;
    
 if(empty($enter['name']) || 
    empty($enter['email']) ||
    empty($enter['password']) ||
    empty($enter['contact']) ||
    empty($enter['city']) ||
    empty($enter['address']) ){
     header('location: signup.php?blankerror=Fill all fields');
     die('enter all fields');
 }
   
$regex_name="/^([a-zA-Z']+)$/";
if(!preg_match($regex_name, $name)){
    header('location:signup.php?name_error=enter valid name');    exit();
}
$regex_email="/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email)){
    header('location:signup.php?email_error=enter valid email');    exit();
}
if(strlen($password)<6){
    header('location:signup.php?password_error=enter password more than 6 characters');    exit();
}
$regex_contact="/[0-9]{10}/";
if( (strlen($contact)>10)||
     (strlen($contact)<10) ){
    header('location:signup.php?contact_error=enter valid contact');    exit();
     }
if(!preg_match($regex_contact, $contact)){
    header('location:signup.php?contact_error=enter valid contact');    exit();
}
$regex_city="/^([a-zA-Z']+)$/";
if(!preg_match($regex_city, $city)){
    header('location:signup.php?city_error=enter valid city');    exit();
}

   
$select_query="SELECT id FROM users WHERE email='$email'";
$select_query_result= mysqli_query($con, $select_query)
            or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);
if($total_rows_fetched>0){
   header('location: signup.php?email_error=email id already exists');}
else {
   $user_registration_query="INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$encrypted_password','$contact','$city','$address')";
   $user_registration_result= mysqli_query($con, $user_registration_query)
            or die(mysqli_error($con));
   $_SESSION['id']= mysqli_insert_id('$con');
   $_SESSION['email']= $email;
   header('location: home.php');}
 ?>
