<?php
   require 'include/connection.php';
    if (!isset($_SESSION['email'])) 
    { header('location: index.php');}
    ?>
<html>
    <head>
    <title>Success</title>
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
        $user_id=$_SESSION['id'];
        $update_query= "UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
        $query_result= mysqli_query($con, $update_query);
        ?>
        <div class="jumbotron success-style"> 
            <center>
                <h3 style=" padding-bottom: 20px ; border-bottom: 1px solid gray">Thank you for ordering from Laotop-Store.The order shall be delivered to you shortly</h3> 
            <p>Order some more electronic items <a href="home.php">here.</a><p>
            </center>   
        </div>
        <?php
            include 'include/footer.php';
        ?>   
    </body>
</html>
