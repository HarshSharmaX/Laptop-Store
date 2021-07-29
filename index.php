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
            html,body{ 
      width: 100%; 
      height: 100%; 
      margin: 0;
      background-color: #584e4a;
      overflow: auto;
}
        </style>
    </head>
    <body>
        
        <div class="header">
            <div class="inner-header">
                <div class=" centerlogo">
                    <a style=" text-decoration: none ;background-color: transparent; color:#ededed ; "href="#">Laptop-Store</a>
                </div>
                
            </div>
        </div>
        <div class="page">
            <span class="menu_toggle">
                <a href="#" class="menu_open"><span class = "glyphicon glyphicon-menu-hamburger gi-2x"></span></a>
                <a href="#" class="menu_close"><span class = "glyphicon glyphicon-remove gi-2x"></span></a>
                
            </span>
            
            <ul class="menu_items">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user gi-2x"></span> Sign Up</a></li> 
                <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in gi-2x"></span> LogIn</a></li> 
                <li><a href="contactus.php"><span class="glyphicon glyphicon-phone gi-2x"></span> Contact Us</a></li>
            </ul>
                
        
        <div class="content"> 
            <div class="inner-content">
        <div class="homecontent">
            <div class="banner-image">
             <div class="inner-banner">
                    <div class="banner_content">
                        <h1>Price. Service. Selection.</h1>
                        <p>Making your life easier.</p><br>
                        
                        <a href="home.php" class="button">Shop Now</a>
                    </div>
                   </div>
            </div>    
        </div>   
            
        
         <?php
            include 'include/footer.php';
        ?>
            </div>
        </div>  
        </div>        
        <script>        
var $page = $('.page');

$('.menu_toggle').on('click', function(){
  $page.toggleClass('real');
});
$('.content').on('click', function(){
  $page.removeClass('real');
});

      </script>  
    </body>
    
    
    
    
    
<div class="modal fade row-style" role="dialog" id="loginmodal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h3 class="modal-title">LOGIN</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Don't have an account?<a style="color:#c9302c" href="signup.php">Register</a></p>
                <form method="post" action="login_submit.php">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div>
                        <?php if(isset($_GET['error'])){
                        echo $_GET['error'];}?>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn buton">Login</button>
                </div>
                </form>    
            </div>
            <div class="modal-footer">
                <p><a style="color:#c9302c" href="forgotpassword.php" class="float">Forgot Password ?</a></p>
            </div>
        </div>
    </div>
</div>  
</html>
