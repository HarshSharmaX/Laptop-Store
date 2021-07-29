<?php
  require 'include/connection.php';
  if (isset($_SESSION['email'])) 
    { header('location: home.php'); }
?>
<html>
    <head>
        <title>Forgot Password</title>
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="stylish.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'include/header.php';?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-4 col-xs-offset-4">
                <form method="post" action="forgotpassword_script.php">
                    <h3><b>FORGOT PASSWORD</b></h3>
                
                    <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group"> 
                         <?php if(isset($_GET['email_error'])){
                             echo $_GET['email_error'];
                             echo '<br>';}
                         ?>
                         <button type="submit" name="submit" class="btn btn-primary">Confirm</button><br>
           
                    </div>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>

