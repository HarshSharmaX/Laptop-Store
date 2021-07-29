<?php
    require 'include/connection.php';
    if (isset($_SESSION['email'])) 
    { header('location: home.php'); }
?>
<html>
    <head>
        <title>Laptop-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="styling.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                   overflow: hidden;
                } 
        </style>
    </head>
    <body>
        <?php
            include 'include/header.php';
        ?>
       
        <div id="back-image">
            <div class="container">
                <div class="back-content">
                    <h1 style="font-size: 48px;">SIGN UP</h1><br>
                    <form method="post" action="signup_insert.php">
                                <div class="form-group">
                                    <input type="text" class="input-lg" style="color: #000;" placeholder="Name" name="name" size="40" >
                                    <?php if(isset($_GET['name_error'])){
                                         echo $_GET['name_error'];
                                     }?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="input-lg" style="color: #000;" placeholder="Email" name="email" size="40" >
                                     <?php if(isset($_GET['email_error'])){
                                         echo $_GET['email_error'];
                                     }?>
                                </div>     
                                <div class="form-group">
                                    <input type="password" class="input-lg" style="color: #000;" placeholder="Password" name="password" size="40">
                                    <?php if(isset($_GET['password_error'])){
                                         echo $_GET['password_error'];
                                     }?> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="input-lg" style="color: #000;" placeholder="Contact" name="contact" size="40" >
                                    <?php if(isset($_GET['contact_error'])){
                                         echo $_GET['contact_error'];
                                     }?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="input-lg" placeholder="City" style="color: #000;" name="city" size="40">
                                    <?php if(isset($_GET['city_error'])){
                                         echo $_GET['city_error'];
                                     }?>
                                </div>
                                <div class="form-group">
                                    <input type='text' class="input-lg" placeholder="Address" style="color: #000;" name="address" size="40"><br><br>
                                </div>
                                <?php if(isset($_GET['blankerror'])){
                                         echo $_GET['blankerror'];
                                         echo '<br>';
                                         }
                                 ?> 
                                <button type="submit" name="submit" class="btn buttons">  SIGN UP  </button><br>
                                
                            </form>
                </div>
            </div>
        </div>
    </body>
</html>
