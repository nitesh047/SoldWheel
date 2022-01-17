<?php

session_start();
include ('db.php');
$s = " select * from rentcar";
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
        <!-- <link href="../dist/css/plugins.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--main Css-->
        <link href="../dist/css/main.min.css" rel="stylesheet">
        <!-- <link href="../stylee.css" rel="stylesheet"> -->
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Plugin CSS-->
        <link href="../dist/css/plugins.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--main Css-->
        <link href="../dist/css/main.min.css" rel="stylesheet">
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

   <section class="bg-light">
            <div class="container">
                <div class="row">
                     
                </div>
                <div class="slider multiple-items2">
                <?php
             while($row = mysqli_fetch_array($result)){?>
                   
                    <div>
                        <a href="#"><img src=<?php echo $row['images'] ?> style="width: 100%; height: 18vw; object-fit: cover;" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><?php echo $row['carName'] ?></h6>
                                <ul class="list-unstyled mb-0 c-line-height-2_5">
                                    <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹<?php echo $row['rentPrice'] ?> </h6></li>
                                   <li><h6 class="c-primary mb-0"><small class="c-light">Owner Name: </small> <?php echo $row['ownerName'] ?> </h6></li>
                                   <li><h6 class="c-primary mb-0"><small class="c-light">Sitting Capacity: </small> <?php echo $row['capacity'] ?> </h6></li>
                                   <li><h6 class="c-primary mb-0"><small class="c-light">Fuel Type: </small> <?php echo $row['fuelType'] ?> </h6></li>
                                </ul>
                            </div>
                             <ul class="list-inline mb-0 p-3 c-brd-light" style="margin:auto">
                                <li class="list-inline-item mr-3"><a href="tel:+91<?php echo $row['contact'] ?>" class="c-light btn btn-primary"><span><i class="bi bi-telephone-forward-fill"></i></span>  Call Now </a></li>
                                <li class="list-inline-item mr-3"><a href="https://api.whatsapp.com/send?phone=<?php echo $row['whatsapp'] ?>" class="c-light btn btn-success"><span><i class="bi bi-whatsapp"></i></span>   Whatsapp Now</a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light btn btn-danger"><span><i class="bi bi-pen"></i></span>   Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php }
                    ?>
</div>
</div>


    
   
   <script>
       document.getElementById('rentButton').style.backgroundColor=' #08a5e0';
   </script>
       <script src="../dist/js/plugins.min.js"></script>
        <script src="../dist/js/common.js"></script>
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