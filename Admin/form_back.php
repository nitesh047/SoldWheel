<?php

 

include ('db.php');
$carId = $_POST['carId'];
$namee=$_POST['carName'];
$price = $_POST['price'];
$ownerName = $_POST['ownerName'];
$capacity = $_POST['capacity'];
$fuelType = $_POST['fuelType'];
$contact = $_POST['contact'];
$whatsapp =$_POST['whatsapp2'];
 

$sql1 = " UPDATE rentcar SET carName='$namee' WHERE id='$carId' ";
$sql2 = " UPDATE rentcar SET rentPrice='$price' WHERE id='$carId' ";
$sql3 = " UPDATE rentcar SET ownerName='$ownerName' WHERE id='$carId' ";
$sql4 = " UPDATE rentcar SET fuelType='$fuelTYpe' WHERE id='$carId' ";
$sql5 = " UPDATE rentcar SET contact='$contact' WHERE id='$carId' ";
$sql6 = " UPDATE rentcar SET whatsapp='$whatsapp' WHERE id='$carId' ";

mysqli_query($con,$sql1);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
mysqli_query($con,$sql4);
mysqli_query($con,$sql5); 
mysqli_query($con,$sql6);
header('location:Rent.php');


?>