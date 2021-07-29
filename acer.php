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
        
                <div class="container filter-style">
            <div class="row row-style">
                <div class="col-md-3 col-sm-4">
                    
                    <img src="img/30.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Acer Aspire 5</p>
                                <p>Price: Rs.55000.00</p>
                                <a href="#" data-toggle="modal" data-target="#19">Read More</a><br>
                                <a href="compare_add.php?id=19" >Compare Price</a><br><br>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(19)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=19" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>
                           
                <div class="col-md-3 col-sm-4">
                    
                    <img src="img/31.jpg" alt="Responsive Image" class="thumbnails">
                </div>                
                <div class="col-md-3 col-sm-6">             
                                <p style="font-size: 28px;">Acer Nitro 5</p>
                                <p>Price: Rs.67000.00</p>
                                <a href="#" data-toggle="modal" data-target="#20">Read More</a><br>
                                <a href="compare_add.php?id=20" >Compare Price</a><br><br>
                            
                                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(20)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=20" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                                
                </div>
                           
                
            </div>
        </div>
        
        
         <?php
            include 'include/footer.php';
        ?>
    </body>
    
    
    
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
    
<div class="modal fade" role="dialog" id="19">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/30.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU:Intel Core i5 7th Gen 7200U</li>
                     <li>Graphics: Nvidia GeForce MX150</li>
                     <li>RAM: 8GB – 16GB</li>
                     <li>Screen: 15.60-inch 1366x768 pixels NoTouch</li>
                     <li>Storage:1TB NO SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
<div class="modal fade" role="dialog" id="20">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/31.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU:Intel Core i5 7300HQ 2.5 GHz</li>
                     <li>Graphics: Nvidia GeForce GTX 1050</li>
                     <li>RAM: 8GB – 32GB</li>
                     <li>Screen: 15.60-inch 1920x1080 pixels NoTouch</li>
                     <li>Storage:1TB NO SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>    
    
    
</html>
