<?php
    require 'include/connection.php';
?>
<html>
    <head>
        <title>Home</title>
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
        <?php
            include 'include/check-if-added.php';
        ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-md-2 col-sm-4">
                
                <a href="home.php"><img src="img/homelogo.png" alt="Responsive Image" class="thumb"></a>
                
            </div>
            <div class="col-md-2 col-sm-4">
                <a href="hp.php"><img src="img/hp.jpg" alt="Responsive Image" class="thumb" ></a>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href="lenovo.php"><img src="img/lenovo.png" alt="Responsive Image" class="thumb" ></a>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href="asus.php"><img src="img/asus.png" alt="Responsive Image" class="thumb" ></a>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href="acer.php"><img src="img/acer.png" alt="Responsive Image" class="thumb" ></a>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href="dell.php"><img src="img/dellbl.png" alt="Responsive Image" class="thumb" ></a>
            </div>
            </div>    
        </div>
        <div class="container">
            <div class="row" style="padding:50px;">
                <div class="col-md-offset-5 col-md-3">
                    <div class="dropdown">
                        <button class="btn dropbtn">Prices</button>
                        <div class="dropdown-content">
                            <a href="filter.php">Under Rs.40000</a>
                            <a href="filter1.php">Rs.40000-Rs.80000</a>
                            <a href="filter2.php">Rs.80000-Rs.120000</a>
                            <a href="filter3.php">Rs.120000-Rs.160000</a>
                            <a href="filter4.php">Over Rs.160000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-style">
                
                <div class="col-md-3 col-sm-4">
                    
                            <img src="img/13.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Apple MacBook Pro</p> 
                                <p>Price: Rs.174000.00</p>
                                <a href="#" data-toggle="modal" data-target="#13">Read More</a><br>
                                <a href="compare_add.php?id=13" >Compare Price</a><br><br>
                            
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(13)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=13" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>                
                           
                
                <div class="col-md-3 col-sm-4">
                    
                            <img src="img/14.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Apple MacBook Air</p>
                                <p>Price: Rs.99999.00</p>
                                <a href="#" data-toggle="modal" data-target="#14">Read More</a><br>
                                <a href="compare_add.php?id=14" >Compare Price</a><br><br>
                            
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(14)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=14" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>               
                         
                    </div>
                </div>
         <div class="container">
            <div class="row row-style">
                <div class="col-md-3 col-sm-4"> 
                    
                            <img src="img/15.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 26px;">Google Pixelbook GO</p>
                                <p>Price: Rs.116000.00</p>
                                <a href="#" data-toggle="modal" data-target="#15">Read More</a><br>
                                <a href="compare_add.php?id=15" >Compare Price</a><br><br>
                             
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(15)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=15" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
            </div>
                           
                <div class="col-md-3 col-sm-4">
                   
                            <img src="img/16.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Lenovo Yoga C930</p>
                                <p>Price: Rs.121000.00</p>
                                <a href="#" data-toggle="modal" data-target="#16">Read More</a><br>
                                <a href="compare_add.php?id=16" >Compare Price</a><br><br>
                          
                                       <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(16)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=16" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>                
                           
                    </div>
                </div>
        <div class="container">
            <div class="row row-style">
                <div class="col-md-3 col-sm-4">
                    
                            <img src="img/17.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Lenovo Legion Y740</p>
                                <p>Price: Rs.143000.00</p>
                                <a href="#" data-toggle="modal" data-target="#17">Read More</a><br>
                                <a href="compare_add.php?id=17" >Compare Price</a><br><br>
                           
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(17)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=17" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>                
                           
                <div class="col-md-3 col-sm-4">
                   
                            
                            <img src="img/18.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 21px;">Microsoft Surface Laptop 3</p>
                                <p>Price: Rs.110800.00</p>
                                <a href="#" data-toggle="modal" data-target="#18">Read More</a><br>
                                <a href="compare_add.php?id=18" >Compare Price</a><br><br>
                       <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(18)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=18" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>                
                           
                
            </div>
        </div>
        <div class="container">
            <div class="row home-style">
                <div class="col-xs-2 col-xs-offset-3">
                    <a style="background-color: gainsboro; color: black " href="home1.php" name="page" value="page" class="btn btn-block ">Previous Page</a>
                </div>
                <div class="col-xs-2 col-xs-offset-2">
                    <a style="background-color: gainsboro; color: black " href="#" name="page" value="page" class="btn btn-block">Next Page</a>

                </div>   
            </div>
        </div> 
        
        
         <?php
            include 'include/footer.php';
        ?>
    </body>
    <div class="modal fade " role="dialog" id="13">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/13.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU: 9th-generation Intel Core i7 – i9</li>
                                <li>Graphics: AMD Radeon Pro 5300M – Radeon Pro 5500M</li>
                                <li>RAM: 16GB – 64GB</li>
                                <li>Screen: 16-inch Retina display with True Tone</li>
                                <li>Storage: 512GB – 8TB SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
<div class="modal fade " role="dialog" id="14">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/14.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: 10th generation Intel Core i7</li>
                                <li>Graphics: Intel Iris Plus Graphics</li>
                                <li>RAM: 8GB – 16GB</li>
                                <li>Screen: 13.3-inch (diagonal) 2,560 x 1,600 LED-backlit display with IPS technology</li>
                                <li>Storage: 512GB – 2TB SSD</li> 
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
<div class="modal fade " role="dialog" id="15">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/15.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: Intel Core m3 - Intel Core i7</li>
                                <li>Graphics: Intel UHD Graphics 615</li>
                                <li>RAM: 8GB - 16GB</li>
                                <li>Screen: 13.3-inch Full HD (1,920 x 1,080) or 4K LCD touchscreen</li>
                                <li>Storage: 128GB - 256GB eMMC</li> 
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
    
<div class="modal fade " role="dialog" id="16">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/16.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU: 8th-generation Intel Core i7-8550U</li>
                                <li>Graphics: Intel UHD Graphics 620</li>
                                <li>RAM: 16GB</li>
                                <li>Screen: 13.9” UHD (3840 x 2160) IPS Glossy Multi-touch with Dolby Vision</li>
                                <li>Storage: 1 TB PCIe SSD </li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
<div class="modal fade" role="dialog" id="17">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/17.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: 8th- and 9th-generation Intel Core i7</li>
                                <li>Graphics: Nvidia GeForce GTX 1660 Ti to RTX 2070 with Max-Q</li>
                                <li>RAM: up to 32GB</li>
                                <li>Screen: 15.6” 1920 x 1080 IPS Anti-glare with G-Sync</li>
                                <li>Storage: up to 1TB SSD, dual drive configurations </li> 
                 </ul>       
                </div>
            </div>
        </div>
</div>


    
<div class="modal fade " role="dialog" id="18">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/18.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                                <li>CPU: AMD Ryzen 5 </li>
                                <li>Graphics: Intel Iris Plus Graphics / AMD Radeon Vega 9 / AMD Radeon RX Vega 11</li>
                                <li>RAM: 8GB - 16GB</li>
                                <li>Screen: 13.5-inch PixelSense (2,256 x 1,504) / 15-inch PixelSense (2,496 x 1,664)</li>
                                <li>Storage: 128GB, 256GB, 512GB or 1TB SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
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
                    <button style="background-color: #c9302c ;" type="submit" class="btn buton">Login</button>
                </div>
                </form>    
            </div>
            <div class="modal-footer">
                <p><a style="color:#c9302c ;" href="forgotpassword.php" class="float">Forgot Password ?</a></p>
            </div>
        </div>
    </div>
</div>      
</html>
