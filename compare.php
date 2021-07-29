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
                            <td>Item Name</td>
                            <td></td>
                            <td>Laptop-Store</td>
                            <td>Amazon</td>
                            <td>Flipkart</td>
                            <td></td>
                        </tr>
                  <?php $user_id = $_SESSION['id'];
                  $select_query = "SELECT DISTINCT i.images,uic.id,uic.items_id,i.name,i.price,i.amazon,i.flipkart FROM users_items_compare uic INNER JOIN items i ON i.id = uic.items_id WHERE users_id = '$user_id' AND status='Added to Compare'";
                  $select_result = mysqli_query($con, $select_query);
                  $rows_fetched= mysqli_num_rows($select_result);
 
                  if ($rows_fetched==0) {
                      echo "Add item to cart first!";
                  }
                  else
                  {   
                     
                      while ($row=mysqli_fetch_array($select_result))
                      {
                        $id = $row['items_id'].',';
                          $_SESSION['item_id'] = $row['items_id'];
                         echo '<tr>
                             <td><img src="'.$row['images'].'"></td>
                            <td>'.$row['name'].'</td>
                            <td>Price :</td>
                            <td>Rs.'.$row['price'].'</td>
                            <td>Rs.'.$row['amazon'].'</td>
                            <td>Rs.'.$row['flipkart'].'</td>    
                            <td> <a href="compare_remove.php?id='.$row['items_id'].'" class="remove_item_link"> Remove</a> </td>
                        </tr>';
                          }
                          
                  }
                  ?>
                  
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
