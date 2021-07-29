
<html>
    <head>
        <title>Header</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="stylish.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <div class="navbar navbar-inverse navbar-fixed-top"> 
        <div class="container"> 
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button> 
                    
                <a class="navbar-brand" href="index.php">Laptop-Store</a> 
            </div> 
            <div class="collapse navbar-collapse" id="myNavbar"> 
                <ul class="nav navbar-nav navbar-right"> 
                    <?php if (isset($_SESSION['email'])) { ?> 
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "compare.php"><span class = "glyphicon glyphicon-tasks"></span> Compare</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
                    <?php }else { ?> 
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                    
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <?php } ?> 
                </ul> 
            </div> 
        </div> 
        </div>
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