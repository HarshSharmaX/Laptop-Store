<?php
   require 'include/connection.php';
    if (!isset($_SESSION['email'])) 
    { header('location: index.php');}
?>
<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="stylish.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include 'include/header.php';
        ?>  
        <div class="container">
            <div class="row setting-style">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading" style="background-color: #c9302c;">
                           <h4>Change Password</h4>
                        </div>
                        <div class="panel-body">
                           <form method="post" action="settings_script.php">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Old Password" name="oldpassword">
                                     <?php if(isset($_GET['password_error'])){
                                         echo $_GET['password_error'];
                                     }?> 
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password" name="newpassword">
                                     <?php if(isset($_GET['password_error'])){
                                         echo $_GET['password_error'];
                                     }?> 
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Re-type New Password" name="retypepassword">
                                     <?php if(isset($_GET['password_error'])){
                                         echo $_GET['password_error'];
                                     }?> 
                                </div>
                                <?php if(isset($_GET['error'])){
                                        echo $_GET['error'];
                                        echo '<br>';
                                        
                                        }  
                                      if(isset($_GET['final_error'])){
                                        echo $_GET['final_error'];
                                        echo '<br>';
                                        }  
                                ?>
                               <center>
                                <button type="submit" name="submit" class="btn btn-block btn-primary buttons">Change</button>
                               </center>
                                      
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php
            include 'include/footer.php';
        ?>
    </body>
</html>
