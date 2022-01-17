<?php

session_start();
include ('db.php');
$s = " select * from hiredriver";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
// $row = mysqli_fetch_array($result);
// echo $row['carName'];
 
// echo $num;

//  echo gettype($row);

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
    
   <?php include ('Nav.php'); ?>
  
   <?php
             while($row = mysqli_fetch_array($result)){?>

   <div class="container mt-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;background-color: azure;">
    <button class="btn btn-outline-warning" style="float:right; margin: 15px 20px 10px 0px"><span><i class="bi bi-pen"></i></span>  Edit </button><br>
                    <div class="row">
                   <div class="col-md-4" style="margin:auto;">
                     <img style="height:200px; border-radius:15px" src=<?php echo $row['image'] ?> alt="driver image">
                   </div>
                   <div class="col-md-8">
                   <h5 class="mt-3"><?php echo $row['driverName'] ?></h5>
                   <h6></h6>
                   <li><i class="bi bi-geo-alt"></i> <?php echo $row['address'] ?></li><br>
                   <a href="" target="_blank" class="btn btn-primary" >View Licence</a><br><br><hr>
                   <center><p>Contact Now!</p></center>
                   <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        <a href="tel:+91<?php echo $row['contact'] ?>"  class="btn btn-outline-primary btn-block"><span><i class="bi bi-telephone-forward-fill"></i></span> Call Now</a>
                        </div>
                        <div class="col-md-4">
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $row['whatsapp'] ?>"  class="btn btn-outline-success btn-block"><i class="bi bi-whatsapp"></i></span> Whatsapp Now</a>  
                        </div>
                        <div class="col-md-4">
                            <a href = "mailto: <?php echo $row['email'] ?>" class="btn btn-outline-info btn-block"> <i class="bi bi-envelope"></i></span> Email Now</a>  
                             </div>
                    </div>
                
                 </div><br>

                   </div>
                    </div>
                </div>

                <?php 
             }
             ?>



  

   </body>
<script>
       document.getElementById('driverButton').style.backgroundColor='#08a5e0';
   </script>
   <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-analytics.js"></script> --> 
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js"></script> -->
  
        <script src="firebase.js"></script>
        <script>
            const auth = firebase.auth(); 
            auth.onAuthStateChanged(user=>{
                if (user) {
                  console.log("user found");
                } else {
                  location.replace('Login.php');
                }
})
        </script>
        <script src="index.js"></script>
</html>