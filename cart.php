<?php 
require  'include/connection.php';
if (!isset($_SESSION['email'])) { 
header('location: index.php');}
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
     require 'include/header.php';
     ?>
                  
     
        
                  <?php $user_id = $_SESSION['id'];
                  $select_query = "SELECT i.images,ui.id,ui.item_id,i.name,i.price FROM users_items ui INNER JOIN items i ON i.id = ui.item_id WHERE user_id = '$user_id' AND status='Added to cart'";
                  $select_result = mysqli_query($con, $select_query);
                  $rows_fetched= mysqli_num_rows($select_result);
                  $sum=0;
                  if ($rows_fetched==0) {
                      echo "Add item to cart first!";
                  }
                  else
                  {   
                     $sum=0;
                     $item_no=0;
                      while ($row=mysqli_fetch_array($select_result))
                      {
                          $item_no++;
                          $sum += $row['price'];
                          $id = $row['item_id'].',';
                          $_SESSION['item_id'] = $row['item_id'];
                        ?>  
                        <div class="container">
                            <div class="row row-style">
                            <div class="col-md-1">
                                <p style=" font-size:28px; "><?php echo $item_no?>.</p>
                            </div>
                            <div class="col-md-offset-1 col-md-5">
                            <?php echo '<img src="'.$row['images'].'">'?>
                            </div>
                            <div class="col-md-4">
                               <br><br><br><p style=" font-size:28px; "><?php echo $row['name'] ?></p> <br>
                                <p style=" font-size:18px; "> Price: Rs. <?php echo $row['price'] ?></p>
                            </div>
                            <div class="col-md-1">
                            <br><br><br><br><?php echo '<a style=" font-size:18px;" href="cart-remove.php?id='.$row['item_id'].'" class="remove_item_link"> Remove</a>' ?>
                            </div>
                            </div>
                        </div>
                        <?php  }
                         $total=$sum+100; 
                  }
                  ?>
                  <?php if($sum != 0){ ?>   
                            <div class="container filter-style">
                                <div class="row row-style">
                                    <div class="col-md-offset-7 col-md-2">
                            
                                        <p style=" font-size:20px; ">Total:</p><br>
                                        <p style=" font-size:20px; ">Delivery Charges:</p><br>
                                        <p style=" font-size:20px; ">Amount Payable:</p><br>
                                    </div>    
                                        <div class="col-md-2">
                                            <p style=" font-size:20px; ">Rs <?php echo $sum.'/-';?></p><br>
                                            <p style=" font-size:20px; ">Rs 100/-</p><br>
                                            <p style=" font-size:20px; ">Rs <?php echo $total.'/-';?></p><br>
                                              
                                            <a href="success.php"><button type="button" class="btn btn-primary buttons">Confirm Order</button></a>
                                           
                                    </div>
                                </div>
                            </div>
                  <?php } else { ?>
                            <div class="container">
                                <div class="row row-style">
                                    <div class="col-md-offset-3 col-md-6">
                                        <center>
                                        <h1>ADD ITEM TO CART FIRST!</h1>
                                        </center>
                                    </div>
                                </div>   
                            </div>  
                            <div class="container">
                                <div class="row cart-style ">
                                    <div class="col-md-offset-7 col-md-2">
                                        <h4>Total:</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>Rs <?php echo $sum.'/-';?></h4>
                                        <a href="#"><button type="button" class="btn btn-primary buttons">Confirm Order</button></a>
                                    </div>
                                </div>
                            </div>
                  <?php } ?>  
             
        <?php     
        require 'include/footer.php';
        ?>
    </body>
</html>

