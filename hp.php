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
                            <img src="img/5.jpg" alt="Responsive Image" class="thumbnails">
                </div>
                <div class="col-md-3 col-sm-6">
                
                                <p style="font-size: 28px;">HP Envy x360 13</p>
                                <p>Price: Rs.83000.00</p>
                                <a href="#" data-toggle="modal" data-target="#5">Read More</a><br>
                                <a href="compare_add.php?id=5" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(5)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=5" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                                
                </div>         
                <div class="col-md-3 col-sm-4">
                
                            <img src="img/4.jpg" alt="Responsive Image" class="thumbnails">
            </div>  
            <div class="col-md-3 col-sm-6">    
                                <p style="font-size: 28px;">HP Elite Dragonfly</p>
                                <p>Price: Rs.200000.00</p>
                                <a href="#" data-toggle="modal" data-target="#4">Read More</a><br>
                                <a href="compare_add.php?id=4" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(4)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=4" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
            </div> 
            </div>
        </div>  
        <div class="container filter-style">
            <div class="row row-style">
                 <div class="col-md-3 col-sm-4">
                    
                    
                            <img src="img/6.jpg" alt="Responsive Image" class="thumbnails">
                </div> 
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">HP Spectre x360</p>
                                <p>Price: Rs.146000.00</p>
                                <a href="#" data-toggle="modal" data-target="#6">Read More</a><br>
                                <a href="compare_add.php?id=6" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(6)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=6" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>
                <div class="col-md-3 col-sm-4">
                    
                    
                    <img src="img/34.jpg" alt="Responsive Image" class="thumbnails">
                </div> 
                <div class="col-md-3 col-sm-6">
                                <p style="font-size: 28px;">HP Pavilion x360</p>
                                <p>Price: Rs.60000.00</p>
                                <a href="#" data-toggle="modal" data-target="#23">Read More</a><br>
                                <a href="compare_add.php?id=23" >Compare Price</a><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                            <p><a href="#" role="button" class="btn btn-primary buttons">Buy Now</a></p> 
                                <?php 
                                } else {
                                    if (check_if_added_to_cart(23)) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; } 
                                    else { ?> 
                                        <a href="cart-add.php?id=23" name="add" value="add" class="btn buttons btn-primary">Add to cart</a>
                            <?php } } ?>
                </div>
            </div>
        </div>
        
        
         <?php
            include 'include/footer.php';
        ?>
    </body>
    
    
    <div class="modal fade" role="dialog" id="4">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/4.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU: 8th-generation Intel Core i5 – i7</li>
                     <li>Graphics: Intel UHD Graphics 620</li>
                     <li>RAM: 8GB - 16GB</li>
                     <li>Screen: 13.3" diagonal Full HD touch display – Full HD touch Sure View display</li>
                     <li>Storage: 256 GB SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
<div class="modal fade" role="dialog" id="5">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/5.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: AMD Ryzen 3 3300U – AMD Ryzen 7 3700U</li>
                    <li>Graphics: AMD Radeon Vega 6 – Radeon Vega 10</li>
                    <li>RAM: 8GB – 16GB</li>
                    <li>Screen: 13.3" diagonal FHD IPS (1,920 x 1,080)</li>
                    <li>Storage: 256 GB – 1TB SSD<li> 
                 </ul>       
                </div>
            </div>
        </div>
</div>


    
<div class="modal fade" role="dialog" id="6">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/6.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                                <li>CPU: 10th-generation Intel Core i5 – i7</li>
                                <li>Graphics: Intel Iris Plus Graphics</li>
                                <li>RAM: 8GB – 16GB</li>
                                <li>Screen: 13.3" FHD (1920 x 1080) IPS BrightView micro-edge WLED-backlit multitouch – 13.3" diagonal 4K (3840 x 2160) UWVA BrightView micro-edge AMOLED multitouch</li>
                                <li>Storage: 256GB – 2TB SSD</li> 
                 </ul>       
                </div>
            </div>
        </div>
</div>
   
<div class="modal fade" role="dialog" id="23">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/34.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                     <li>CPU:10th Gen Intel Core i5</li>
                     <li>Graphics: Intel® UHD Graphics</li>
                     <li>RAM: 8GB – 32GB</li>
                     <li>Screen: 14" (35.56 cm) display, 1920 x 1080 px</li>
                     <li>Storage:256 GB SSD</li>
                 </ul>       
                </div>
            </div>
        </div>
</div>    
    
</html>  