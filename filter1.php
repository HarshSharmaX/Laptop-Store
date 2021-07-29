<?php 
require  'include/connection.php';

?>

<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="stylish.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            img{
                height: 250px ;
                width: 350px;
            }
        </style>
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
                
                <a href="hp.php"><img src="img/hp.jpg" alt="Responsive Image" class="thumb"></a>
                
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
        
                  <?php 
                  
                  $select_query = "SELECT id,images,name,price FROM items WHERE price BETWEEN 40000 AND 80000";
                  $select_result = mysqli_query($con, $select_query);
                  $rows_fetched= mysqli_num_rows($select_result);
                  
                  if ($rows_fetched==0) {
                      echo "Add item to cart first!";
                  }
                  else
                  {   ?>
                     
                            
                     <?php while ($row=mysqli_fetch_array($select_result))
                      { 
                          
                          
                          $id = $row['id'].',';
                          $_SESSION['item_id'] = $row['id'];
                        ?>  
                            <div class="container">
                            <div class="row price-style filter-style">
                                <center>
                            <div class="col-md-offset-2 col-md-4 col-sm-4">
                                
                            <?php echo '<img src="'.$row['images'].'" class="thumbnails">'?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <br><p style=" font-size:28px;"><?php echo $row['name'] ?></p>
                                <p> Price: Rs. <?php echo $row['price'] ?></p>
                                <?php echo'<a href="#" data-toggle="modal" data-target="#'.$row['id'].'" >Read More</a>' ?><br>
                                <?php echo'<a href="compare_add.php?id='.$row['id'].'" >Compare Price</a>' ?><br><br>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                <a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary buttons">Buy Now</a>
                                <?php 
                                } else {
                                    if (check_if_added_to_cart($row['id'])) { 
                                        echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>'; 
                                         } 
                                    else { 
                                        echo '<a href="cart-add.php?id='.$row['id'].'" name="add" value="add" class="btn btn-primary buttons">Add to cart</a>' ;
                                    } } ?>
                            </div>
                                </center>
                            </div>   
                         </div>
                  <?php } } ?>
                  
             
        <?php     
        require 'include/footer.php';
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
    
    
<div class="modal fade" role="dialog" id="3">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <img src="img/3.jpg" class="modal-style">
                  <h1>DESCRIPTION:-</h1>
                </div>
                <div class="modal-body">
                 <ul>
                    <li>CPU: 8th generation Intel Core i5 – i7</li>
                    <li>Graphics: Intel UHD Graphics 620 , Nvidia GeForce MX150 2GB GDDR5</li>
                    <li>RAM: 8GB</li>
                    <li>Screen: 13-inch 1440p (2,160 x 1,440)</li>
                    <li>Storage: 256GB - 512GB SSD</li>  
                 </ul>       
                </div>
            </div>
        </div>
</div>
    
    
    
    
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
                     <li>Storage: 1 TB SSD</li>
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

