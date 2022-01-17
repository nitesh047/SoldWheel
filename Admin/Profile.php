
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

   <div class="container-fluid">
           <div class="container-fluid" style="margin-top: 65px;">
            <div class="container-fluid" style="box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;">
            <br><h2>Admin Profile</h2><br><Br><br>
            </div>
            <div class="container-fluid mt-3" style="box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;">
                <div class="row" style="align-items:center">
                <div class="col-md-4">
                   
                  <center><h5>Basic Information</h5>
                  <!-- <p id="urlll"></p> -->
                  
                  <h1></h1>
                  <p>Admin Profile</p>
                  <img data-toggle="modal" data-target="#uploadImage" style="    height: 153px;
    border-radius: 31px;
    margin-top: 10px;
    " src="../dist/images/driver.png" href="student profile"></center>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid mt-5">
                        <h5>Mr. John Deo</h5>
                        <h5>Contact : +91 9521538903</h5>
                        <h5>Email: john@gmail.com</h5>
                      </div>
    </div>   
    
    
</div>
 
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