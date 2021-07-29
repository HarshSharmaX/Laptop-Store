<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       <script src="bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="stylish.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            /*img{
                height: 200px;
                width: 350px;
            }*/
        </style>
    </head>
    <body>
        <?php include 'include/header.php';?>
        <div class="back-image"></div>
        <div class="container about-style">

            <div class="row">
                <div class="col-xs-6">
                    <h3><b>CONTACT US</b></h3>
                    <form method="post" action="contactus_submit.php">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="name">
                            <?php if(isset($_GET['name_error'])){
                                         echo $_GET['name_error'];
                                     }?>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" name="email">
                            <?php if(isset($_GET['email_error'])){
                                         echo $_GET['email_error'];}
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea class="form-control" name="message" rows="3" cols="10"></textarea>
                            
                        </div>
                        <div class="form-group">
                         <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-xs-5 col-xs-offset-1">
                    <h3><b>Company Information</b></h3>
                    <p>500 Lorem Ipsum Dolor Sit</p>
                    <p>22-56-2-9 Sit Amet, Lorem </p>
                    <p>USA</p>
                    <p>Phone:(00)222 666 444</p>
                    <p>Fax:(000)000 00 00 0</p>
                    <p>Email:info@mycompany.com</p>
                    <p>Follow On: Facebook,Twitter</p>
                </div>
            </div>
            </div>
        <?php include 'include/footer.php';?>
    </body>
</html>

