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
                height: 100px;
                width: 150px;
            }
        </style>
    </head>
    <body>
 
     <?php        
     require 'include/header.php';
     ?>
                  
     
        <div class="container ">
            <div class="table-resposive">
                <center>
                    <table class="table table-striped cart-style">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Item Number</td>
                            <td>Item Name</td>
                            <td>Price</td>
                            <td></td>
                        </tr>
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
                         echo '<tr>
                             <td><img src="'.$row['images'].'"></td>
                            <td>'.$item_no.'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['price'].'</td>
                            <td> <a href="cart-remove.php?id='.$row['item_id'].'" class="remove_item_link"> Remove</a> </td>
                        </tr>';
                          }
                          $total=$sum+100;
                  }
                  ?>
                  <?php if($sum != 0){ ?>   
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Amount</td>
                            <td>Rs <?php echo $sum.'/-';?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Delivery Charges</td>
                            <td>Rs 100/-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td>Rs <?php echo $total.'/-';?></td>
                            <td> <a href="success.php"><button type="button" class="btn btn-primary buttons">Confirm Order</button></a></td>
                        </tr>
                  <?php } else { ?>
                         <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td>Rs <?php echo $sum.'/-';?></td>
                            <td> <a href="#"><button type="button" class="btn btn-primary buttons">Confirm Order</button></a></td>
                        </tr>
                  <?php } ?>  
                    </tbody>
                
                </table>
                </center>
                
            </div>
         
        </div>  
        <?php     
        require 'include/footer.php';
        ?>
    </body>
</html>