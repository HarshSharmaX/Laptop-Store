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
            </div>
        </div>
        <div class="container filter-style">
            <div class="row row-style">
                <div class="col-md-3 col-sm-4">
                   
                            <img src="img/35.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Lenovo Ideapad 320</p>
                                <p>Price: Rs.82000.00</p>
                                <a href="#" data-toggle="modal" data-target="#24">Read More</a><br>
                                <a href="compare_add.php?id=24" >Compare Price</a><br><br>
                          
                                       <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(24)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=24" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>  
                <div class="col-md-3 col-sm-4">
                    
                    <img src="img/36.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 25px;">Lenovo Thinkpad L460</p>
                                <p>Price: Rs.143000.00</p>
                                <a href="#" data-toggle="modal" data-target="#25">Read More</a><br>
                                <a href="compare_add.php?id=25" >Compare Price</a><br><br>
                           
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(25)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=25" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div> 
            </div>
        </div>
        
        
         <?php
            include 'include/footer.php';
        ?>
    </body>
    
    
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

<div class="modal fade" role="dialog" id="24">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/35.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU: Intel Core I7 (7th Gen) Processor</li>
                     <li>Graphics: NVIDIA GeForce 920M</li>
                     <li>RAM: 8 GB DDR4 RAM</li>
                     <li>Screen: 15.6" (39.62 Cm) Display, 1366 X 768 Px</li>
                     <li>Storage:1 TB HDD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
lenovo thinkpad l460
<div class="modal fade" role="dialog" id="25">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/36.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU: Intel Core I5 (6th Gen) Processor</li>
                     <li>Graphics:Intel HD Graphics 520</li>
                     <li>RAM:4 GB DDR3 RAM</li>
                     <li>Screen: 14.0" (35.56 Cm) Display, 1366 X 768 Px</li>
                     <li>Storage:500 GB HDD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>    
    
</html>
