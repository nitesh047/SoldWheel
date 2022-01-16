<?php
include "db.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from rentcar where id=".$userid;
$result = mysqli_query($con,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
 <!-- <h1><?php echo $row['carName'] ?></h1> -->
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
    
 
 <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p>Hello</p>
                <!-- <div id="owl-demo" style="margin-left:-15px;" class="owl-carousel owl-theme"> -->
                    <div class="item">
                        <div class="background-image-maker gradient gradient-lr"></div>
                        <div class="holder-image">
                            <img src= <?php echo $row['images'] ?> alt="" class="img-fluid d-none" />
                        </div>
                    </div>

           <!-- </div> -->
          
            </div>
            <div class="col-md-5">
            <center><h3 class="mt-5"><?php echo $row['carName'] ?></h3></center><br><hr>
                <ul style="list-style-type: none; margin-top: 118px;">
                 <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹<?php echo $row['rentPrice'] ?> Kilometer per hour</h6></li><hr>
                <li><i class="fa fa-map-marker pr-1"></i><?php echo $row['location'] ?></li><hr>
                <li><h6 class="c-primary mb-0"><small class="c-light">Capacity : </small> <?php echo $row['capacity'] ?> </h6></li> <hr>
                <li><h6 class="c-primary mb-0"><small class="c-light">fuel type :  </small> <?php echo $row['fuelType'] ?> </h6></li>
               </ul>
               <hr>
               <center><h5><?php echo $row['ownerName'] ?></</h5></center>
               <div class="container">
                   <div class="row">
                       <div class="col-md-6">
                       <a href="tel:+91<?php echo $row['contact'] ?>" class="btn btn-primary btn-block">Call Now</a>
                       </div>
                       <div class="col-md-6">
                      <a href="https://api.whatsapp.com/send?phone=<?php echo $row['whatsapp'] ?>"  class="btn btn-primary btn-block">Whatsapp Now</a>  
                       </div>
                   </div>
               </div> <br><br>
            </div>
        </div>
    </div>

      <!-- jQuery -->
      <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
</body>
</html>
    
 
<?php } ?>
<!-- 
<div id="owl-demo" style="margin-left:-15px;" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="background-image-maker gradient gradient-lr"></div>
                        <div class="holder-image">
                            <img src="dist/images/slider1.jpg" alt="" class="img-fluid d-none" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="background-image-maker gradient gradient-lr"></div>
                        <div class="holder-image">
                            <img src="dist/images/slider2.jpg" alt="" class="img-fluid d-none" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="background-image-maker gradient gradient-lr"></div>
                        <div class="holder-image">
                            <img src="dist/images/slider3.jpg" alt="" class="img-fluid d-none" />
                        </div>
                    </div>
                    
                </div> -->
<!-- 

                <center><h3 class="mt-5">Volvo X3</h3></center><br><hr>
                <ul style="list-style-type: none; margin-top: 118px;">
                 <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹13 Kilometer per hour</h6></li><hr>
                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li><hr>
                <li><h6 class="c-primary mb-0"><small class="c-light">Capacity : </small> 4 </h6></li> <hr>
                <li><h6 class="c-primary mb-0"><small class="c-light">fuel type :  </small> CNG </h6></li>
               </ul>
               <hr>
               <center><h5>Mr. John Deo</h5></center>
               <div class="container">
                   <div class="row">
                       <div class="col-md-6">
                       <button class="btn btn-primary btn-block">Call Now</button>
                       </div>
                       <div class="col-md-6">
                      <button class="btn btn-primary btn-block">Whatsapp Now</button>  
                       </div>
                   </div>
               </div>  -->