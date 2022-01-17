<?php

session_start();
include ('db.php');
$s1 = " select * from rentcar";
$result1 = mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);
$s2 = " select * from sellcar";
$result2 = mysqli_query($con,$s2);
$num2 = mysqli_num_rows($result2);
$s3 = " select * from hiredriver";
$result3 = mysqli_query($con,$s3);
$num3 = mysqli_num_rows($result3);
// $row = mysqli_fetch_array($result);
// echo $row['carName'];
 

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
   <div class="container">
       <div class="row ml-5 mt-5">
           <div class="col-md-4">
           <div class="card" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
  <div class="card-body">
    <center><h5 class="card-title">Total Number of Car for Sale</h5><br>
    <h5><?php echo $num1 ?></h5></center>
  </div>
</div>
           </div>
           <div class="col-md-4">
           <div class="card" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
  <div class="card-body">
  <center><h5 class="card-title">Total Number of Car for Rent</h5><br>
    <h5><?php echo $num2 ?></h5></center>
  </div>
</div>
           </div>
           <div class="col-md-4">
           <div class="card" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
  <div class="card-body">
  <center><h5 class="card-title">Total Number of Driver Hired</h5><br>
    <h5><?php echo $num3 ?></h5></center>
  </div>
</div> 
           </div>
               
        </div>
   </div><br>
   <hr>
   <center><h5>Google Analytics</h5></center>



   <script>
       document.getElementById('homeButton').style.backgroundColor=' #08a5e0';
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
</body>

</html>