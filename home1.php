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
            <div class="row price-style">
                <div class="col-md-3 col-sm-4">
                   
                            <img src="img/7.jpg" alt="Responsive Image" class="thumbnails">
                </div>            
                <div class="col-md-3 col-sm-6">              
                                <p style="font-size: 22px;"> Asus ROG Zephyrus G14</p>
                                <p>Price: Rs.110000.00</p>
                                <a href="#" data-toggle="modal" data-target="#7">Read More</a><br>
                                <a href="compare_add.php?id=7" >Compare Price</a><br><br>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(7)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=7" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                              
                </div>            
                           
                
                <div class="col-md-3 col-sm-4">
                   
                            <img src="img/8.jpg" alt="Responsive Image" class="thumbnails">
                </div>           
                <div class="col-md-3 col-sm-6">            
                                <p style="font-size: 28px;">Asus TUF A15</p>
                                <p>Price: Rs.71000.00</p>
                                <a href="#" data-toggle="modal" data-target="#8">Read More</a><br>
                                <a href="compare_add.php.php?id=8" >Compare Price</a><br><br>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(8)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=8" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                 </div>
             </div>
        </div>
        <div class="container">
            <div class="row row-style">
                <div class="col-md-3 col-sm-4">
                    
                            <img src="img/9.jpg" alt="Responsive Image" class="thumbnails">
                </div>            
                <div class="col-md-3 col-sm-6">              
                                <p style="font-size: 24px;">Asus Chromebook Flip</p>
                                <p>Price: Rs.57000.00</p>
                                <a href="#" data-toggle="modal" data-target="#9">Read More</a><br>
                                <a href="compare_add.php?id=9" >Compare Price</a><br><br>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(9)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=9" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>
                           
        
                <div class="col-md-3 col-sm-4">
                    
                            <img src="img/10.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Asus VivoBook S15</p>
                                <p>Price: Rs.53000.00</p>
                                <a href="#" data-toggle="modal" data-target="#10">Read More</a><br>
                                <a href="compare_add.php?id=10" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(10)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=10" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>
        </div>
    </div>
        <div class="container">
            <div class="row row-style">
                <div class="col-md-3 col-sm-4">
                    
                            <img src="img/11.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Acer Swift 3</p>
                                <p>Price: Rs.51990.00</p>
                                <a href="#" data-toggle="modal" data-target="#11">Read More</a><br>
                                <a href="compare_add.php?id=11" >Compare Price</a><br><br>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(11)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=11" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>
                           
                <div class="col-md-3 col-sm-4">
                    
                                <img src="img/19.jpg" alt="Responsive Image" class="thumbnails">
                </div>                
                <div class="col-md-3 col-sm-6">             
                                <p style="font-size: 28px;">Acer ConceptD 7</p>
                                <p>Price: Rs.99000.00</p>
                                <a href="#" data-toggle="modal" data-target="#12">Read More</a><br>
                                <a href="compare_add.php?id=12" >Compare Price</a><br><br>
                            
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(12)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=12" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                                
                </div>
                           
                
            </div>
        </div>
        <div class="container">
            <div class="row home-style">
                <div class="col-xs-2 col-xs-offset-3">
                    <a style="background-color: gainsboro; color: black " href="home.php" name="page" value="page" class="btn btn-block ">Previous Page</a>
                </div>
                <div class="col-xs-2 col-xs-offset-2">
                    <a style="background-color: gainsboro; color: black " href="home2.php" name="page" value="page" class="btn btn-block">Next Page</a>

                </div>   
            </div>
        </div> 
        
        
         <?php
            include 'include/footer.php';
        ?>
    </body>
 <div class="modal fade" role="dialog" id="7">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/7.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: AMD Ryzen 7 4800HS – 9 4900HS</li>
                    <li>Graphics: NVIDIA GeForce RTX 2060</li>
                    <li>RAM: 16GB – 32GB</li>
                    <li>Screen: 14-inch Non-glare Full HD (1920 x 1080) IPS-level panel, 120Hz – 14-inch Non-glare WQHD (2560 x 1440) IPS-level panel, 60Hz</li>
                    <li>Storage: 512GB / 1TB M.2 NVMe PCIe 3.0</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
<div class="modal fade" role="dialog" id="8">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/8.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                <li>CPU: AMD Ryzen 5 4600H – 7 4800H</li>
                <li>Graphics: NVIDIA GeForce GTX 1660TI – RTX 2060</li>
                <li>RAM: up to 32 GB SDRAM</li>
                <li>Screen: 15.6" (16:9) FHD (1920x1080) 60Hz Anti-Glare IPS-level Panel – 15.6" (16:9) FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel</li>
                <li>Storage: 1TB 5400 rpm SATA HDD – 256GB/512GB/1TB PCIe Gen3 SSD</li>  
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
<div class="modal fade" role="dialog" id="9">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/9.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: Intel Pentium – Core m7</li>
                                <li>Graphics: Intel HD Graphics 510 – 515</li>
                                <li>RAM: 4GB – 8GB</li>
                                <li>Screen: 12.5-inch FHD (1,920 x 1,080) LED backlit anti-glare display</li>
                                <li>Storage: 32GB – 128GB eMMC</li> 
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
    
<div class="modal fade" role="dialog" id="10">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/10.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: Intel Core i5 – i7</li>
                                <li>Graphics: Intel UHD Graphics</li>
                                <li>RAM: 8GB DDR4</li>
                                <li>Screen: 15.6-inch full HD (1920 x 1080)</li>
                                <li>Storage: 512GB SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
<div class="modal fade" role="dialog" id="11">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/11.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: up to Intel Core i7-8565U</li>
                    <li>Graphics: Nvidia GeForce MX150, Intel HD Graphics 620 or AMD Radeon Vega 8</li>
                                <li>RAM: 4GB – 8GB</li>
                                <li>Screen: 14-inch FHD (1,920 x 1,080) ComfyView IPS – 15.6" Full HD (1920 x 1080)</li>
                                <li>Storage: 128GB – 1 TB HDD, 16 GB Intel Optane Memory</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>


    
<div class="modal fade" role="dialog" id="12">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/19.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                                <li>CPU: 9th-generation Intel Core i7</li>
                                <li>Graphics: NVIDIA GeForce RTX 2060 – 2080</li>
                                <li>RAM: 16GB – 32GB</li>
                                <li>Screen: 15.6" 4K UHD (3840 x 2160) 16:9 IPS</li>
                                <li>Storage: 1TB</li> 
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
                    <button style="background-color: #c9302c;" type="submit" class="btn buton">Login</button>
                </div>
                </form>    
            </div>
            <div class="modal-footer">
                <p><a style="color:#c9302c;" href="forgotpassword.php" class="float">Forgot Password ?</a></p>
            </div>
        </div>
    </div>
</div>      

</html>

