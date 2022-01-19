<?php
include "db.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from rentcar where id=".$userid;
$result = mysqli_query($con,$sql);
// while( $row = mysqli_fetch_array($result) ){
    // echo $userid;

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
        <!-- <link href="../dist/css/plugins.min.css" rel="stylesheet"> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--main Css-->
        <!-- <link href=".../dist/css/main.min.css" rel="stylesheet"> -->
    </head>
    <body> 
      <div class="container">
            <form action="form_back.php" method="post">
                <center> <h5 class="mt-5">Update Details Form </h5></center>
         <div class="form-group">
            <input type="text" class="form-control" name="carId"  aria-describedby="emailHelp" value="<?php echo $userid  ?>" placeholder="Car Name">
             
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="carName"  aria-describedby="emailHelp" placeholder="Car Name">
              </div>
        <div class="form-group"> 
            <input type="text" class="form-control" name="price"   placeholder="Price">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="ownerName"   placeholder="Owner's Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="capacity"   placeholder="capacity">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="fuelType"  placeholder="fuel type">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contact"   placeholder="contact number">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="whatsapp"   placeholder="whatsapp number">
        </div>
        <button type="submit" class=" mb-5 btn btn-primary">Update</button>
        </form >
      </div>

 
</body>
</html>
    
  