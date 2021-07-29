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
                            
                            <img src="img/1.jpg" alt="Responsive Image" class="thumbnails" >
                            
                </div>    
                <div class="col-md-3 col-sm-6 borders">
                                <p style="font-size: 28px;">Dell XPS 15</p>
                                <p>Price: Rs.185000.00</p>
                                <a href="#" data-toggle="modal" data-target="#1">Read More</a><br>
                                <a href="compare_add.php?id=1" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                <a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a>
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(1)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary buttons">Add to cart</a>
                                <?php } } ?>
                </div>   
              
            
                <div class="col-md-3 col-sm-4">
                   
                            <img src="img/2.jpg" alt="Responsive Image" class="thumbnails">
                               
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Dell XPS 13</p>
                                <p>Price: Rs.140000.00</p>
                                <a href="#" data-toggle="modal" data-target="#2">Read More</a><br>
                                <a href="compare_add.php?id=2" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(2)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary buttons">Add to cart</a>
                            <?php } } ?>
                </div>
               
            </div>      
        </div>   
        <div class="container filter-style">
            <div class="row row-style">
              
                <div class="col-md-3 col-sm-4">
                            
                    <img src="img/32.jpg" alt="Responsive Image" class="thumbnails" >
                            
                </div>    
                <div class="col-md-3 col-sm-6 borders">
                                <p style="font-size: 22px;">Dell Inspiration 15 3000</p>
                                <p>Price: Rs.27000.00</p>
                                <a href="#" data-toggle="modal" data-target="#21">Read More</a><br>
                                <a href="compare_add.php?id=21" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                <a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a>
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(21)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-primary buttons">Add to cart</a>
                                <?php } } ?>
                </div>   
              
            
                <div class="col-md-3 col-sm-4">
                   
                    <img src="img/33.jpg" alt="Responsive Image" class="thumbnails">
                               
                </div>
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">Dell Vostro 5401</p>
                                <p>Price: Rs.70000.00</p>
                                <a href="#" data-toggle="modal" data-target="#22">Read More</a><br>
                                <a href="compare_add.php?id=22" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(22)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-primary buttons">Add to cart</a>
                            <?php } } ?>
                </div>
               
            </div>      
        </div>  
        
        
         <?php
            include 'include/footer.php';
        ?>
    </body>
    
    
    <div class="modal fade" role="dialog" id="1">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/1.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU: 10th-generation Intel Core i5 – i7</li>
                     <li>Graphics: Intel Iris Plus Graphics - Nvidia GeForce GTX 1650 Ti</li>
                     <li>RAM: 8GB – 64GB</li>
                     <li>Screen: 15.6" FHD+ (1920 x 1200) IPS - UHD+ (3840 x 2400)</li>
                     <li>Storage: 256GB – 1TB SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
<div class="modal fade" role="dialog" id="2">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/2.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: 10th generation Intel Core i5 – i7</li>
                    <li>Graphics: Intel Iris Plus</li>
                    <li>RAM: 8GB – 16GB</li>
                    <li>Screen: 13.3-inch FHD (1,920 x 1,080) – 4k (3840 x 2160)</li>
                    <li>Storage: 256GB – 2TB SSD</li>  
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
<div class="modal fade" role="dialog" id="21">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/32.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU:Intel Core i3 6th Gen 6006U 2 GHz</li>
                     <li>Graphics: Intel Integrated HD Graphics 520</li>
                     <li>RAM: 8GB-16GB</li>
                     <li>Screen: 15.60-inch 1920x1080 pixels NoTouch</li>
                     <li>Storage:256GB NO SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
<div class="modal fade" role="dialog" id="22">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/33.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU:10th Generation Intel® Core™ i5-1035G1 Processor (6MB Cache, up to 3.6 GHz)</li>
                     <li>Graphics: Intel® UHD Graphics with shared graphics memory.</li>
                     <li>RAM: 8GB, 1x8GB, DDR4, 3200MHz.</li>
                     <li>Screen: 14" (35.56 cm) display, 1920 x 1080 px</li>
                     <li>Storage:512GB M.2 PCIe NVMe Solid State Drive</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>    
    
</html>    
