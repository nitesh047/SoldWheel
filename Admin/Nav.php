
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="static/css/w3.css">
<link rel="stylesheet" href="static/css/style_sidebar.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<script src="https://kit.fontawesome.com/d5548a6412.js" crossorigin="anonymous"></script>
<body>




<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px; background: #2B2F35; z-index:9;
 color: aliceblue; font-size: 14px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" style="background:transparent;" onclick="w3_close()" ><span style="float: right; margin-top: 6px; color: #0f76a5;"><i class="bi bi-x-circle"></i></span></button>
 <center><img id="profile_img" src="../dist/images/driver.png"   href="student profile"></center>
 <center> <a href="profile.php"  style="color: white; margin-left:5px;">Profile</a> </center>

    
     <hr>
   <center> <p style="color: white; margin-left:5px;">Admin Panel</p></center> <hr>
    <div> <a class="nav-link pl-0 side" href="Home.php" style="color: blanchedalmond; font-size: 14px; margin-top: 15px;" id="homeButton">       Home</a> </div>
    <!-- background-color: #08a5e0;  -->
    <a class="nav-link pl-0 side" href="Sell.php" style="color: blanchedalmond; font-size: 14px; margin-top: 15px; " id="sellButton" >       Sell</a>

    <a class="nav-link pl-0 side" href="Rent.php" style="color: blanchedalmond; font-size: 14px; margin-top: 15px;" id="rentButton">       Rent</a>
    <a class="nav-link pl-0 side" href="Driver.php" style="color: blanchedalmond; font-size: 14px; margin-top: 15px;" id="driverButton">        Driver</a>
 
</div>
<div class="w3-main" style="margin-left:200px">
<div class="">
  <button class="w3-button  w3-xlarge w3-hide-large" style=" z-index: 9999; position: fixed; background-color: none; color: #009EE4;" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
  </div>
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</body>
</html>