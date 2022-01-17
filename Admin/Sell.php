<?php

session_start();
include ('db.php');
$s = " select * from sellcar";
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
   <div class="container mt-5">
  <center> <div class="input-group mb-5" style="flex-wrap: nowrap">
      
  <div class="col-sm-10"  style="width:inherit; margin-left:20px">
      <input style="width:inherit; margin-left :18px;" type="password" class="form-control" id="inputPassword" placeholder="Search">
    </div>
  <button type="button" class="btn btn-primary" style="margin-right:100px">
    <i class="bi bi-search"></i>
  </button>
</div></center>
   </div>

   <div class="container">
   <?php
             while($row = mysqli_fetch_array($result)){?>
       <div class="container">
           <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" style="margin:auto">
                        <img src=<?php echo $row['image'] ?> style="height:120px; width:100%; object-fit:cover" alt="car photo">
                        </div>
                        <div class="col-md-6">
                        <h6><?php echo $row['carName'] ?></h6>  
                        <p>11,475 Miles </p>
                        <p><?php echo $row['location'] ?> </p>
                        <h6><?php echo $row['carPrice'] ?></h6> 
                        </div>
                    </div>
                </div>
           
            </div>
            <div class="col-md-6">
             <button style="background:blueviolet; border-radius:5px; float:right;margin-right:70px"><span><i style="color:white" class="bi bi-bookmark-star-fill"></i></span></button>
            </div>
           </div>
       </div><hr>
       <?php 
       }
       ?>

</div>

</body>
<script>
       document.getElementById('sellButton').style.backgroundColor='#08a5e0';

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