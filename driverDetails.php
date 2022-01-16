<?php
include "db.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from hiredriver where id=".$userid;
$result = mysqli_query($con,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
 <!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Spot</title> 
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Plugin CSS-->
        <link href="dist/css/plugins.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--main Css-->
        <link href="dist/css/main.min.css" rel="stylesheet">
    </head>
    <body> 
    <div class="container" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;background-color: azure;">
                    <div class="row">
                   <div class="col-md-4" style="margin:auto;">
                     <img style="height:200px; border-radius:15px" src=<?php echo $row['image'] ?> alt="driver image">
                   </div>
                   <div class="col-md-8">
                   <h5 class="mt-3"><?php echo $row['driverName'] ?></h5>
                   <h6><?php echo $row['address'] ?></h6>
                   <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li><br>
                   <a href="<?php echo $row['licence'] ?>" target="_blank" class="btn btn-primary" >View Licence</a><br><br><hr>
                   <center><p>Contact Now!</p></center>
                   <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        <a href="tel:+91<?php echo $row['contact'] ?>" class="btn btn-success btn-block">Call Now</a>
                        </div>
                        <div class="col-md-4">
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $row['whatsapp'] ?>"  class="btn btn-success btn-block">Whatsapp Now</a>  
                        </div>
                        <div class="col-md-4">
                            <a href = "mailto: <?php echo $row['email'] ?>" class="btn btn-success btn-block">Email Now</a>  
                             </div>
                    </div>
                
                 </div><br>

                   </div>
                    </div>
                </div>



<script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
</body>
</html>
    
 
<?php } ?>