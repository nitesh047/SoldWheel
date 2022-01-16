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
        <title>SoldWheel</title>  

        
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Plugin CSS-->
        <link href="dist/css/plugins.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--main Css-->
        <link href="dist/css/main.min.css" rel="stylesheet">
        <link href="stylee.css" rel="stylesheet">
        <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js"></script>
    </head>
    <body> 
        <!-- Header-->
        <header id="header-fix" class="main-header">
            <div class="top-bar py-lg-0 py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 text-center text-md-left align-self-center">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="mailto:helpteam@soldwheel.com"><i class="fa fa-envelope pr-1"></i> team@soldwheel.com </a></li>
                                <li class="list-inline-item"><a href="tel:+91 99707 40063"><i class="fa fa-phone pr-1"></i>+91 99707 40063</a></li>
                            </ul> 
                        </div> 
                        <div class="col-12 col-md-6 text-center text-md-right">
                            <div class="top-right">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><i class="fa fa-user pr-1"></i> <a href="#signup" class="c-primary login_form"> Login </a> Or <a href="#signup" class="register_form c-primary"> Register </a></li>
                                    <li class="list-inline-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-language pr-1"></i> ENG </a>
                                        <div class="dropdown-menu rounded-0 border-0 py-0">
                                            <a class="dropdown-item" href="#">English</a>
                                            <a class="dropdown-item" href="#">Hindi</a>
                                            <a class="dropdown-item" href="#">Marathi</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-lg-0 py-3 px-0">
                    <a class="navbar-brand" href="index.html"><img src="dist/images/SoldWheel Logo.png" alt="" class="img-fluid" /></a>
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mr-lg-4 mt-4 mt-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"  aria-expanded="false">Company</a>
                            <ul class="dropdown-menu rounded-0 border-0 py-0">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="grid-without-sidebar.html">Cars List</a></li>
                        <li class="nav-item"><a class="nav-link" href="carRent.html">Car Rent</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog-grid.html">Blog</a></li>       
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                            <a href="sell-car.html" class="btn btn-primary my-2 my-sm-0 btn-sm">Sell Car</a>
                            <div class="form-group position-relative mb-0">
                                <input class="form-control ml-sm-2 rounded-0" type="search" placeholder="Search">
                                <div class="search position-absolute">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                      </form>
                    </div>
                </nav>
            </div>
        </header>
        <!-- End Header-->

        <!-- Hiring Form -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <center> <h5 class="modal-title" id="exampleModalLabel">Get a Job!</h5> </center>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Add Your Photo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Your Name</label>
                          <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Email</label>
                            <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
                          
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Charge</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Photo of your Licence</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="modal-footer">
                  <!-- <p> Rent Your Car and earn a good profit!</p> -->
                </div>
              </div>
            </div>
          </div>
        
        
        <!-- End! -->

        <!-- Driver Modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

            <div class="modal fade bd-example-modal-lg" tabindex="-1" id="empModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
               
                </div>
            </div>
            </div>

        <!-- End! -->
        
        <!-- Slider-->
        <!-- <section  class="py-0">
            <div id="owl-demo" class="owl-carousel owl-theme">
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
            </div>
            <div class="owl-text-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-5 col-lg-6">
                            <h4 class="text-white text-center">Find the Right Car for you</h4>
                            <div class="row">
                                <div class="col-3 pr-0">
                                    <ul class="nav flex-column nav-pills text-uppercase font-weight-bold text-center" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link redial-light rounded-left" data-toggle="tab" href="#tab2" role="tab" aria-selected="false" aria-expanded="false">Used</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-9 pl-0">
                                    <div class="tab-content bg-white rounded-bottom rounded-right full-block" id="myTabContent2">
                                        <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-expanded="true">
                                            <div class="card-body p-4">
                                                <ul class="nav nav-tabs border-0 justify-content-center mb-4  flex-column flex-sm-row text-center" id="myTab" role="tablist">
                                                    <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                                        <a class="nav-link redial-light rounded active" data-toggle="tab" href="#id1" role="tab" aria-selected="true" aria-expanded="true">By Budget</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link redial-light rounded" data-toggle="tab" href="#id2" role="tab" aria-selected="false" aria-expanded="false">By Brand</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                                                    <div class="tab-pane fade active show" id="id1" role="tabpanel" aria-expanded="true">
                                                        <form>
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option>--- Select Budget ---</option>
                                                                    <option value="0">-Select Budget-</option>
                                                                    <option value="1-lakh-5-lakh">1 Lakh - 5 Lakh</option>
                                                                    <option value="5-lakh-10-lakh">5 Lakh - 10 Lakh</option>
                                                                    <option value="10-lakh-20-lakh">10 Lakh - 20 Lakh</option>
                                                                    <option value="20-lakh-50-lakh">20 Lakh - 50 Lakh</option>
                                                                    <option value="50-lakh-1-crore">50 Lakh - 1 Crore</option>
                                                                    <option value="above-1-crore">Above 1 Crore</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="">--- Select City ---</option>
                                                                    <option value="Ratnagiri">Ratnagiri</option>
                                                                </select>
                                                            </div>
                                                            <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                            <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">Get Hired</a>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                                        <form>
                                                            <div class="form-group">
                                                                <select class="form-control rounded">
                                                                    <option>--- Select Model ---</option>
                                                                    <option value="Ford Mustang">Mustang </option>
                                                                    <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                                                    <option value="BMW X6 M">BMW X6 M</option>
                                                                    <option value="Aston Martin DB5">Aston Martin DB5</option>
                                                                    <option value="Chevrolet Camaro">Chevrolet Camaro</option>
                                                                    <option value="Honda City i VTEC SV">Honda City i VTEC SV</option>
                                                                    <option value="Volkswagen Jetta">Volkswagen Jetta</option>
                                                                    <option value="Tata Aria Pure 4x2">Tata Aria Pure 4x2</option>.
                                                                    <option value="Skoda Octavia Ambition 1.4 TSI MT">Skoda Octavia Ambition 1.4 TSI MT</option>
                                                                    <option value="Audi A4 35 TDI Premium">Audi A4 35 TDI Premium</option>
                                                                    <option value="Renault Fluence E4 D">Renault Fluence E4 D</option>
                                                                    <option value="Nissan Micra AT">Nissan Micra AT</option>
                                                                    <option value="Mahindra Scorpio S10 AT 2WD">Mahindra Scorpio S10 AT 2WD</option>
                                                                    <option value="Toyota Etios G">Toyota Etios G</option>
                                                                    <option value="Maruti Swift ZXI">Maruti Swift ZXI</option>
                                                                    <option value="Hyundai I20">Hyundai I20</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control rounded">
                                                                    <option value="">--- Select Brand ---</option>
                                                                    <option value="Ford">Ford </option>
                                                                    <option value="Volvo">Volvo</option>
                                                                    <option value="BMW">BMW</option>
                                                                    <option value="Aston">Aston</option>
                                                                    <option value="Chevrolet">Chevrolet</option>
                                                                    <option value="Honda">Honda City i VTEC SV</option>
                                                                    <option value="Volkswagen">Volkswagen</option>
                                                                    <option value="Tata">Tata</option>.
                                                                    <option value="Skoda">Skoda</option>
                                                                    <option value="Audi">Audi</option>
                                                                    <option value="Ranault">Ranault</option>
                                                                    <option value="Nissan">Nissan</option>
                                                                    <option value="Mahindra">Mahindra</option>
                                                                    <option value="Toyota">Toyota</option>
                                                                    <option value="Maruti">Maruti</option>
                                                                    <option value="Hyundai">Hyundai</option>
                                                                </select>
                                                            </div>
                                                            <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                            <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">Get Hired</a>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-expanded="false">
                                            <div class="card-body p-4">
                                                <ul class="nav nav-tabs border-0 justify-content-center mb-4  flex-column flex-sm-row text-center" id="myTab" role="tablist">
                                                    <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                                        <a class="nav-link redial-light rounded active" data-toggle="tab" href="#id3" role="tab" aria-selected="true" aria-expanded="true">By Budget</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link redial-light rounded" data-toggle="tab" href="#id4" role="tab" aria-selected="false" aria-expanded="false">By Brand</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                                                    <div class="tab-pane fade active show" id="id3" role="tabpanel" aria-expanded="true">
                                                        <form>
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option>--- Select Budget ---</option>
                                                                    <option value="0">-Select Budget-</option>
                                                                    <option value="1-lakh-5-lakh">1 Lakh - 5 Lakh</option>
                                                                    <option value="5-lakh-10-lakh">5 Lakh - 10 Lakh</option>
                                                                    <option value="10-lakh-20-lakh">10 Lakh - 20 Lakh</option>
                                                                    <option value="20-lakh-50-lakh">20 Lakh - 50 Lakh</option>
                                                                    <option value="50-lakh-1-crore">50 Lakh - 1 Crore</option>
                                                                    <option value="above-1-crore">Above 1 Crore</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="">--- Select City ---</option>
                                                                    <option value="New Delhi">New Delhi</option>
                                                                    <option value="Bangalore">Bangalore</option>
                                                                    <option value="Mumbai">Mumbai</option>
                                                                    <option value="Hyderabad">Hyderabad</option>
                                                                    <option value="Chennai">Chennai</option>
                                                                    <option value="Jaipur">Jaipur</option>
                                                                    <option value="Pune">Pune</option>
                                                                    <option value="Kolkata">Kolkata</option>
                                                                    <option value="Gurgaon">Gurgaon</option>
                                                                    <option value="Ahmedabad">Ahmedabad</option>
                                                                    <option value="Noida">Noida</option>
                                                                    <option value="Chandigarh">Chandigarh</option>
                                                                    <option value="Indore">Indore</option>
                                                                    <option value="Kochi">Kochi</option>
                                                                    <option value="" disabled="">--------------------</option>
                                                                    <option value="Agra">Agra</option>
                                                                    <option value="Ahmedabad">Ahmedabad</option>
                                                                    <option value="Ajmer">Ajmer</option>
                                                                    <option value="Akola">Akola</option>
                                                                    <option value="Alibag">Alibag</option>
                                                                    <option value="Aligarh">Aligarh</option>
                                                                    <option value="Allahabad">Allahabad</option>
                                                                    <option value="Alwar">Alwar</option>
                                                                    <option value="Amalapuram">Amalapuram</option>
                                                                    <option value="Ambala">Ambala</option>
                                                                    <option value="Ambernath">Ambernath</option>
                                                                    <option value="Ambikapur">Ambikapur</option>
                                                                    <option value="Amethi">Amethi</option>
                                                                    <option value="Amravati">Amravati</option>
                                                                    <option value="Amreli">Amreli</option>
                                                                    <option value="Amritsar">Amritsar</option>
                                                                    <option value="Amroha">Amroha</option>
                                                                    <option value="Anantapur">Anantapur</option>
                                                                    <option value="Aurangabad(bh)">Aurangabad(bh)</option>
                                                                    <option value="Avadi">Avadi</option>
                                                                    <option value="Azamgarh">Azamgarh</option>
                                                                    <option value="Baddi">Baddi</option>
                                                                    <option value="Badlapur">Badlapur</option>
                                                                    <option value="Baran">Baran</option>
                                                                    <option value="Barasat">Barasat</option>
                                                                    <option value="Baraut">Baraut</option>
                                                                    <option value="Bardhaman">Bardhaman</option>
                                                                    <option value="Bardoli">Bardoli</option>
                                                                    <option value="Bareilly">Bareilly</option>
                                                                    <option value="Bargarh">Bargarh</option>
                                                                    <option value="Baripada">Baripada</option>
                                                                    <option value="Barmer">Barmer</option>
                                                                    <option value="Barnala">Barnala</option>
                                                                    <option value="Barpeta">Barpeta</option>
                                                                    <option value="Barrackpore">Barrackpore</option>
                                                                    <option value="Barsar">Barsar</option>
                                                                    <option value="Barshi">Barshi</option>
                                                                    <option value="Baruipur">Baruipur</option>
                                                                </select>
                                                            </div>
                                                            <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                                        <form>
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option>--- Select Budget ---</option>
                                                                    <option value="0">-Select Budget-</option>
                                                                    <option value="1-lakh-5-lakh">1 Lakh - 5 Lakh</option>
                                                                    <option value="5-lakh-10-lakh">5 Lakh - 10 Lakh</option>
                                                                    <option value="10-lakh-20-lakh">10 Lakh - 20 Lakh</option>
                                                                    <option value="20-lakh-50-lakh">20 Lakh - 50 Lakh</option>
                                                                    <option value="50-lakh-1-crore">50 Lakh - 1 Crore</option>
                                                                    <option value="above-1-crore">Above 1 Crore</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="">--- Select City ---</option>
                                                                    <option value="Ratnagiri">Ratnagiri</option>
                                                                </select>
                                                            </div>
                                                            <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                            <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Get Hired</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider-->
         

         <!-- Main Section -->
        <!-- <section>
            <div class="container">
                <div class="row justify-content-center" style="align-items: center;">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style="background-color: #313131;"  src="dist/images/jeep.png" alt="Card image cap">
                            <div class="card-body">
                              <center><h4 class="card-text">Buy</h4></center>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem; margin-top: 15px;">
                            <img class="card-img-top" src="dist/images/slider2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <center><h4 class="card-text">Rent</h4></center>
                            </div>
                          </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem; margin-top: 30px;">
                            <img class="card-img-top" src="dist/images/driver.png" alt="Card image cap">
                            <div class="card-body">
                            <center><h4 class="card-text">Hire</h4></center>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section>
            <div class="main">
                <!-- <h1>Responsive Card Grid Layout</h1> -->
                <ul class="cards">
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://images.unsplash.com/photo-1593055357429-62eaf3b259cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNhciUyMGltYWdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"></div>
                      <div class="card_content">
                        <h2 class="card_title">Buy New Car</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btnn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://images.unsplash.com/photo-1603811478698-0b1d6256f79a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y2FyJTIwaW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"></div>
                      <div class="card_content">
                        <h2 class="card_title">Rent Your Car</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btnn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZHJpdmluZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"></div>
                      <div class="card_content">
                        <h2 class="card_title">Hire a Driver</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btnn card_btn">Read More</button>
                      </div>
                    </div>
                </li>
                </ul>
              </div>
              
        </section>

         <!-- End of Main Section -->
         <!-- Car Filter Form -->
         <section>
         <center><h2>Find The Right Car For You</h2>
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6">
                    <h4 class="text-white text-center">Find the Right Car for you</h4>
                    <div class="row">
                        <div class="col-3 pr-0">
                            <ul class="nav flex-column nav-pills text-uppercase font-weight-bold text-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link redial-light rounded-left" data-toggle="tab" href="#tab2" role="tab" aria-selected="false" aria-expanded="false">Used</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-9 pl-0">
                            <div class="tab-content bg-white rounded-bottom rounded-right full-block" id="myTabContent2">
                                <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-expanded="true">
                                    <div class="card-body p-4">
                                        <ul class="nav nav-tabs border-0 justify-content-center mb-4  flex-column flex-sm-row text-center" id="myTab" role="tablist">
                                            <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                                <a class="nav-link redial-light rounded active" data-toggle="tab" href="#id1" role="tab" aria-selected="true" aria-expanded="true">By Budget</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link redial-light rounded" data-toggle="tab" href="#id2" role="tab" aria-selected="false" aria-expanded="false">By Brand</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                                            <div class="tab-pane fade active show" id="id1" role="tabpanel" aria-expanded="true">
                                                <form>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>--- Select Budget ---</option>
                                                            <option value="0">-Select Budget-</option>
                                                            <option value="1-lakh-5-lakh">1 Lakh - 5 Lakh</option>
                                                            <option value="5-lakh-10-lakh">5 Lakh - 10 Lakh</option>
                                                            <option value="10-lakh-20-lakh">10 Lakh - 20 Lakh</option>
                                                            <option value="20-lakh-50-lakh">20 Lakh - 50 Lakh</option>
                                                            <option value="50-lakh-1-crore">50 Lakh - 1 Crore</option>
                                                            <option value="above-1-crore">Above 1 Crore</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option value="">--- Select City ---</option>
                                                            <option value="Ratnagiri">Ratnagiri</option>
                                                        </select>
                                                    </div>
                                                    <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="id2" role="tabpanel" aria-expanded="false">
                                                <form>
                                                    <div class="form-group">
                                                        <select class="form-control rounded">
                                                            <option>--- Select Model ---</option>
                                                            <option value="Ford Mustang">Mustang </option>
                                                            <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                                            <option value="BMW X6 M">BMW X6 M</option>
                                                            <option value="Aston Martin DB5">Aston Martin DB5</option>
                                                            <option value="Chevrolet Camaro">Chevrolet Camaro</option>
                                                            <option value="Honda City i VTEC SV">Honda City i VTEC SV</option>
                                                            <option value="Volkswagen Jetta">Volkswagen Jetta</option>
                                                            <option value="Tata Aria Pure 4x2">Tata Aria Pure 4x2</option>.
                                                            <option value="Skoda Octavia Ambition 1.4 TSI MT">Skoda Octavia Ambition 1.4 TSI MT</option>
                                                            <option value="Audi A4 35 TDI Premium">Audi A4 35 TDI Premium</option>
                                                            <option value="Renault Fluence E4 D">Renault Fluence E4 D</option>
                                                            <option value="Nissan Micra AT">Nissan Micra AT</option>
                                                            <option value="Mahindra Scorpio S10 AT 2WD">Mahindra Scorpio S10 AT 2WD</option>
                                                            <option value="Toyota Etios G">Toyota Etios G</option>
                                                            <option value="Maruti Swift ZXI">Maruti Swift ZXI</option>
                                                            <option value="Hyundai I20">Hyundai I20</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control rounded">
                                                            <option value="">--- Select Brand ---</option>
                                                            <option value="Ford">Ford </option>
                                                            <option value="Volvo">Volvo</option>
                                                            <option value="BMW">BMW</option>
                                                            <option value="Aston">Aston</option>
                                                            <option value="Chevrolet">Chevrolet</option>
                                                            <option value="Honda">Honda City i VTEC SV</option>
                                                            <option value="Volkswagen">Volkswagen</option>
                                                            <option value="Tata">Tata</option>.
                                                            <option value="Skoda">Skoda</option>
                                                            <option value="Audi">Audi</option>
                                                            <option value="Ranault">Ranault</option>
                                                            <option value="Nissan">Nissan</option>
                                                            <option value="Mahindra">Mahindra</option>
                                                            <option value="Toyota">Toyota</option>
                                                            <option value="Maruti">Maruti</option>
                                                            <option value="Hyundai">Hyundai</option>
                                                        </select>
                                                    </div>
                                                    <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-expanded="false">
                                    <div class="card-body p-4">
                                        <ul class="nav nav-tabs border-0 justify-content-center mb-4  flex-column flex-sm-row text-center" id="myTab" role="tablist">
                                            <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                                <a class="nav-link redial-light rounded active" data-toggle="tab" href="#id3" role="tab" aria-selected="true" aria-expanded="true">By Budget</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link redial-light rounded" data-toggle="tab" href="#id4" role="tab" aria-selected="false" aria-expanded="false">By Brand</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                                            <div class="tab-pane fade active show" id="id3" role="tabpanel" aria-expanded="true">
                                                <form>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>--- Select Budget ---</option>
                                                            <option value="0">-Select Budget-</option>
                                                            <option value="1-lakh-5-lakh">1 Lakh - 5 Lakh</option>
                                                            <option value="5-lakh-10-lakh">5 Lakh - 10 Lakh</option>
                                                            <option value="10-lakh-20-lakh">10 Lakh - 20 Lakh</option>
                                                            <option value="20-lakh-50-lakh">20 Lakh - 50 Lakh</option>
                                                            <option value="50-lakh-1-crore">50 Lakh - 1 Crore</option>
                                                            <option value="above-1-crore">Above 1 Crore</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option value="">--- Select City ---</option>
                                                            <option value="New Delhi">New Delhi</option>
                                                            <option value="Bangalore">Bangalore</option>
                                                            <option value="Mumbai">Mumbai</option>
                                                            <option value="Hyderabad">Hyderabad</option>
                                                            <option value="Chennai">Chennai</option>
                                                            <option value="Jaipur">Jaipur</option>
                                                            <option value="Pune">Pune</option>
                                                            <option value="Kolkata">Kolkata</option>
                                                            <option value="Gurgaon">Gurgaon</option>
                                                            <option value="Ahmedabad">Ahmedabad</option>
                                                            <option value="Noida">Noida</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Indore">Indore</option>
                                                            <option value="Kochi">Kochi</option>
                                                            <option value="" disabled="">--------------------</option>
                                                            <option value="Agra">Agra</option>
                                                            <option value="Ahmedabad">Ahmedabad</option>
                                                            <option value="Ajmer">Ajmer</option>
                                                            <option value="Akola">Akola</option>
                                                            <option value="Alibag">Alibag</option>
                                                            <option value="Aligarh">Aligarh</option>
                                                            <option value="Allahabad">Allahabad</option>
                                                            <option value="Alwar">Alwar</option>
                                                            <option value="Amalapuram">Amalapuram</option>
                                                            <option value="Ambala">Ambala</option>
                                                            <option value="Ambernath">Ambernath</option>
                                                            <option value="Ambikapur">Ambikapur</option>
                                                            <option value="Amethi">Amethi</option>
                                                            <option value="Amravati">Amravati</option>
                                                            <option value="Amreli">Amreli</option>
                                                            <option value="Amritsar">Amritsar</option>
                                                            <option value="Amroha">Amroha</option>
                                                            <option value="Anantapur">Anantapur</option>
                                                            <option value="Aurangabad(bh)">Aurangabad(bh)</option>
                                                            <option value="Avadi">Avadi</option>
                                                            <option value="Azamgarh">Azamgarh</option>
                                                            <option value="Baddi">Baddi</option>
                                                            <option value="Badlapur">Badlapur</option>
                                                            <option value="Baran">Baran</option>
                                                            <option value="Barasat">Barasat</option>
                                                            <option value="Baraut">Baraut</option>
                                                            <option value="Bardhaman">Bardhaman</option>
                                                            <option value="Bardoli">Bardoli</option>
                                                            <option value="Bareilly">Bareilly</option>
                                                            <option value="Bargarh">Bargarh</option>
                                                            <option value="Baripada">Baripada</option>
                                                            <option value="Barmer">Barmer</option>
                                                            <option value="Barnala">Barnala</option>
                                                            <option value="Barpeta">Barpeta</option>
                                                            <option value="Barrackpore">Barrackpore</option>
                                                            <option value="Barsar">Barsar</option>
                                                            <option value="Barshi">Barshi</option>
                                                            <option value="Baruipur">Baruipur</option>
                                                        </select>
                                                    </div>
                                                    <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="id4" role="tabpanel" aria-expanded="false">
                                                <form>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>--- Select Budget ---</option>
                                                            <option value="0">-Select Budget-</option>
                                                            <option value="1-lakh-5-lakh">1 Lakh - 5 Lakh</option>
                                                            <option value="5-lakh-10-lakh">5 Lakh - 10 Lakh</option>
                                                            <option value="10-lakh-20-lakh">10 Lakh - 20 Lakh</option>
                                                            <option value="20-lakh-50-lakh">20 Lakh - 50 Lakh</option>
                                                            <option value="50-lakh-1-crore">50 Lakh - 1 Crore</option>
                                                            <option value="above-1-crore">Above 1 Crore</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option value="">--- Select City ---</option>
                                                            <option value="Ratnagiri">Ratnagiri</option>
                                                        </select>
                                                    </div>
                                                    <a href="#" class="btn btn-primary btn-block btn-md text-uppercase font-weight-bold">Find Car</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
         </center>

         </section>
         <!-- End filter form -->
        <!-- Car Deals-->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12">
                        <h3>Best Car Deals For You</h3>
                        <ul class="nav nav-tabs border-0 py-3 flex-column flex-sm-row" id="myTab" role="tablist">
                            <li class="nav-item mr-sm-3 mb-3 mb-sm-0">
                                <a class="nav-link redial-light rounded active newslider" data-toggle="tab" href="#new" role="tab" aria-selected="true" aria-expanded="true">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link redial-light rounded usedslider" data-toggle="tab" href="#use" role="tab" aria-selected="false" aria-expanded="false">Used</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                    <div class="tab-pane fade active show" id="new" role="tabpanel" aria-expanded="false">
                        <div class="slider multiple-items">
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">

                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="use" role="tabpanel" aria-expanded="true">
                        <div class="slider multiple-itemsused">
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">

                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Car Deals-->

        <!-- Rent Your Car -->

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12">
                        <center><h3>Rent Your Car</h3></center>
                         
                    </div>
                </div>
                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                    <div class="tab-pane fade active show" id="new" role="tabpanel" aria-expanded="false">
                        <div class="slider multiple-items">
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br> 
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">

                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="use" role="tabpanel" aria-expanded="true">
                        <div class="slider multiple-itemsused">
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">

                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br> 
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   


        <!--end !  -->

        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12">
                        <center><h3>Hire Driver</h3></center>
                         
                    </div>
                </div>
                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                    <div class="tab-pane fade active show" id="new" role="tabpanel" aria-expanded="false">
                        <div class="slider multiple-items">
                        <?php
                         while($row = mysqli_fetch_array($result)){
                             ?>
                            <div>
                                <a href="#"><img src=<?php echo $row['image'] ?> alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <center> <h6 class="mb-2"><a href="listing-details.html"><?php echo $row['driverName'] ?></a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹<?php echo $row['rate'] ?> </h6> Per Day</small> <br>
                                       <button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button></center>
                                    </div>
                
                                </div>
                            </div>
                            <?php
                         }
                         ?>
</div>
</div>
</div>
</div>

        <!-- Hire a Driver -->

        <!-- <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12">
                        <center><h3>Hire Driver</h3></center>
                         
                    </div>
                </div>
                <div class="tab-content bg-white rounded-bottom rounded-right" id="myTabContent3">
                    <div class="tab-pane fade active show" id="new" role="tabpanel" aria-expanded="false">
                        <div class="slider multiple-items">
                            <div>
                                <a href="#"><img src="dist/images/driver.png" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <center> <h6 class="mb-2"><a href="listing-details.html">John Deo</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                       <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button></center>
                                    </div>
                
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/driver.png" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <center> <h6 class="mb-2"><a href="listing-details.html">John Deo</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                       <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button></center>
                                    </div>
                                    
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/driver.png" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <center> <h6 class="mb-2"><a href="listing-details.html">John Deo</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                       <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button></center>
                                    </div>
                                     
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/driver.png" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <center> <h6 class="mb-2"><a href="listing-details.html">John Deo</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                       <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button></center>
                                    </div>
                                     
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/driver.png" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <center> <h6 class="mb-2"><a href="listing-details.html">John Deo</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                       <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button></center>
                                    </div>
                                    
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/driver.png" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <center> <h6 class="mb-2"><a href="listing-details.html">John Deo</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                       <button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button></center>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;">contact:</span>  987654321</small>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;"> mail:</span>  kumar@gmail.com</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;">contact:</span>  987654321</small>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;"> mail:</span>  kumar@gmail.com</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="use" role="tabpanel" aria-expanded="true">
                        <div class="slider multiple-itemsused">
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;">contact:</span>  987654321</small>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;"> mail:</span>  kumar@gmail.com</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;">contact:</span>  987654321</small>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;"> mail:</span>  kumar@gmail.com</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;">contact:</span>  987654321</small>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;"> mail:</span>  kumar@gmail.com</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <small><h6 class="c-primary d-inline-block mb-0">₹800 </h6> Per Day</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;">contact:</span>  987654321</small>
                                        <small><h6 class="c-primary d-inline-block mb-0"><span style="color: black;"> mail:</span>  kumar@gmail.com</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img1.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">

                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Volvo xc90 inscription</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Range Rover auto car</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Chevrolet corvette C7</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br>
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a href="#"><img src="dist/images/img4.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Tesla model S</a></h6>
                                        <small><h6 class="c-primary d-inline-block mb-0">₹13 </h6> Per Kilometer</small> <br> 
                                        <small><h6 class="c-primary d-inline-block mb-0">contact: 987654321</small>
                                    </div>
                                    <ul class="list-inline mb-0 text-center down-content py-2 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-heart pr-1"></i> Bookamrk</a></li>
                                        <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="fa fa-retweet pr-1"></i> Compare</a></li>
                                        <li class="list-inline-item"><a href="#" class="c-light"><i class="fa fa-star pr-1"></i>  3.5/5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    -->


        <!-- End! -->
        
        <!-- Car Featured-->
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 d-flex justify-content-center pb-4">
                        <h3>Featured Used Cars</h3>
                    </div>
                </div>
                <div class="slider multiple-items2">
                    <div>
                        <a href="#"><img src="dist/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><a href="listing-details.html">Aston Martin DB5</a></h6>
                                <ul class="list-unstyled mb-0 c-line-height-2_5">
                                    <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹28,600,00 </h6></li>
                                    <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                                </ul>
                            </div>
                            <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                                <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <a href="#"><img src="dist/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><a href="listing-details.html">Chevrolet camaro SS</a></h6>
                                <ul class="list-unstyled mb-0 c-line-height-2_5">
                                    <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹35,800,00 </h6></li>
                                    <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                                </ul>
                            </div>
                            <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                                <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <a href="#"><img src="dist/images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><a href="listing-details.html">Land Rover Discovery XXV</a></h6>
                                <ul class="list-unstyled mb-0 c-line-height-2_5">
                                    <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹41,300,00 </h6></li>
                                    <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                                </ul>
                            </div>
                            <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                                <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <a href="#"><img src="dist/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><a href="listing-details.html">Aston Martin DB5</a></h6>
                                <ul class="list-unstyled mb-0 c-line-height-2_5">
                                    <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹28,600,00 </h6></li>
                                    <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                                </ul>
                            </div>
                            <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                                <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <a href="#"><img src="dist/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><a href="listing-details.html">Chevrolet camaro SS</a></h6>
                                <ul class="list-unstyled mb-0 c-line-height-2_5">
                                    <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹35,800,00 </h6></li>
                                    <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                                </ul>
                            </div>
                            <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                                <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <a href="#"><img src="dist/images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><a href="listing-details.html">Land Rover Discovery XXV</a></h6>
                                <ul class="list-unstyled mb-0 c-line-height-2_5">
                                    <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹41,300,00 </h6></li>
                                    <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                                </ul>
                            </div>
                            <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                                <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Car Featured-->
        
        <!-- Brand-->
        <section>
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-12 col-lg-6 pb-3">
                        <h3>Browse Cars by Top Brands</h3>
                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                    </div>
                </div>
                <div id="owl-client" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand1.png" alt="Cadillac" title="Cadillac" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand2.png" alt="Acura" title="Acura" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand3.png" alt="Chevrolet" title="Chevrolet" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand4.png" alt="Bugatti" title="Bugatti" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand5.png" alt="Mazda" title="Mazda" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand6.png" alt="Bentley" title="Bentley" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand7.png" alt="Lamborghini" title="Lamborghini" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand8.png" alt="Jaguar" title="Jaguar" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand9.png" alt="Porsche" title="Porsche" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand10.png" alt="Audi" title="Audi" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand11.png" alt="Ford" title="Ford" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand12.png" alt="Hyundai" title="Hyundai" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand1.png" alt="Cadillac" title="Cadillac" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand2.png" alt="Acura" title="Acura" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand3.png" alt="Chevrolet" title="Chevrolet" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand4.png" alt="Bugatti" title="Bugatti" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand5.png" alt="Mazda" title="Mazda" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand6.png" alt="Bentley" title="Bentley" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand7.png" alt="Lamborghini" title="Lamborghini" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand8.png" alt="Jaguar" title="Jaguar" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand9.png" alt="Porsche" title="Porsche" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand10.png" alt="Audi" title="Audi" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand11.png" alt="Ford" title="Ford" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand12.png" alt="Hyundai" title="Hyundai" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand1.png" alt="Cadillac" title="Cadillac" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand2.png" alt="Acura" title="Acura" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand3.png" alt="Chevrolet" title="Chevrolet" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand4.png" alt="Bugatti" title="Bugatti" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand5.png" alt="Mazda" title="Mazda" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand6.png" alt="Bentley" title="Bentley" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand7.png" alt="Lamborghini" title="Lamborghini" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand8.png" alt="Jaguar" title="Jaguar" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-xl-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand9.png" alt="Porsche" title="Porsche" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand10.png" alt="Audi" title="Audi" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-4 mb-sm-0">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand11.png" alt="Ford" title="Ford" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                <a href="#">
                                    <div class="card c-brd-light rounded-0 text-center">
                                        <div class="card-body py-0">
                                            <img src="dist/images/brand12.png" alt="Hyundai" title="Hyundai" class="img-fluid" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand-->
        
        <!-- Comparison--
        <section class="bg-light">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-12 col-lg-6 pb-3">
                        <h3>Top Cars Comparison</h3>
                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <div class="slider multiple-items3">
                    <div>
                        <div class="card c-brd-light">
                            <div class="card-body">
                                <ul class="list-inline text-center car-compare">
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-left mr-0 mb-5 mb-xl-0">
                                        <a href="carRent.html"><img src="dist/images/car1.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,600 </h6>
                                    </li>
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-right mr-0 pt-5 pt-xl-0">
                                        <div><span class="carvs text-uppercase c-bg-primary text-white rounded-circle">Vs</span></div>
                                        <a href="carRent.html"><img src="dist/images/car2.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $34,600 </h6>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="text-center mt-4"><a href="#" class="btn btn-outline-primary text-uppercase btn-lg c-font-weight-700">Compare Cars</a></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card c-brd-light">
                            <div class="card-body">
                                <ul class="list-inline text-center car-compare">
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-left mr-0 mb-5 mb-xl-0">
                                        <a href="carRent.html"><img src="dist/images/car1.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,600 </h6>
                                    </li>
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-right mr-0 pt-5 pt-xl-0">
                                        <div><span class="carvs text-uppercase c-bg-primary text-white rounded-circle">Vs</span></div>
                                        <a href="carRent.html"><img src="dist/images/car2.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $34,600 </h6>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="text-center mt-4"><a href="#" class="btn btn-outline-primary text-uppercase btn-lg c-font-weight-700">Compare Cars</a></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card c-brd-light">
                            <div class="card-body">
                                <ul class="list-inline text-center car-compare">
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-left mr-0 mb-5 mb-xl-0">
                                        <a href="carRent.html"><img src="dist/images/car1.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,600 </h6>
                                    </li>
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-right mr-0 pt-5 pt-xl-0">
                                        <div><span class="carvs text-uppercase c-bg-primary text-white rounded-circle">Vs</span></div>
                                        <a href="carRent.html"><img src="dist/images/car2.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $34,600 </h6>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="text-center mt-4"><a href="#" class="btn btn-outline-primary text-uppercase btn-lg c-font-weight-700">Compare Cars</a></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card c-brd-light">
                            <div class="card-body">
                                <ul class="list-inline text-center car-compare">
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-left mr-0 mb-5 mb-xl-0">
                                        <a href="carRent.html"><img src="dist/images/car1.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,600 </h6>
                                    </li>
                                    <li class="list-inline-item d-block d-xl-inline-block float-xl-right mr-0 pt-5 pt-xl-0">
                                        <div><span class="carvs text-uppercase c-bg-primary text-white rounded-circle">Vs</span></div>
                                        <a href="carRent.html"><img src="dist/images/car2.png" alt="" class="img-fluid mb-4 mx-auto" /><h6 class="mb-2">Aston Martin DB5</h6></a>
                                        <h6 class="c-primary mb-0"><small class="c-light">Price</small> $34,600 </h6>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="text-center mt-4"><a href="#" class="btn btn-outline-primary text-uppercase btn-lg c-font-weight-700">Compare Cars</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Comparison-->
        
        <!-- Advertise-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <div class="position-relative">
                            <a href="#"><img src="dist/images/advertise1.jpg" alt="" class="img-fluid w-100" /></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="position-relative">
                            <a href="#"><img src="dist/images/advertise2.jpg" alt="" class="img-fluid w-100" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Advertise-->
        
        <!-- Testimonial-->
        <section class="image-bg">
            <div class="background-image-maker"></div>
            <div class="holder-image">
                <img src="dist/images/bg1.jpg" alt="" class="img-fluid d-none" />
            </div>
            <div class="black-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 d-flex justify-content-center pb-4">
                        <h3 class="text-white mb-0">What Say Our Customers</h3>
                    </div>
                </div>
                <div class="slider testimonial text-white">
                    <div>
                        <div class="card c-brd-primary c-bg-primary mb-5">
                            <div class="card-body p-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <h6 class="text-white">John Deo </h6>
                                <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                    Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                </blockquote>
                                <span class="sprite"></span>
                            </div>
                        </div>
                        <div class="media ml-5">
                            <img src="dist/images/author3.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                            <div class="media-body align-self-center">
                                <h6 class="mb-0 text-white">Marry Anderson</h6>
                                <small>Manager of XYZ</small>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <div class="card c-brd-primary c-bg-primary mb-5">
                            <div class="card-body p-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <h6 class="text-white">Customer Support </h6>
                                <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                    Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                </blockquote>
                                <span class="sprite"></span>
                            </div>
                        </div>
                        <div class="media ml-5">
                            <img src="dist/images/author1.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                            <div class="media-body align-self-center">
                                <h6 class="mb-0 text-white">Alex Anderson</h6>
                                <small>Manager of XYZ</small>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <div class="card c-brd-primary c-bg-primary mb-5">
                            <div class="card-body p-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <h6 class="text-white">Customer Support </h6>
                                <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                    Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                </blockquote>
                                <span class="sprite"></span>
                            </div>
                        </div>
                        <div class="media ml-5">
                            <img src="dist/images/author2.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                            <div class="media-body align-self-center">
                                <h6 class="mb-0 text-white">Marry Anderson</h6>
                                <small>Manager of XYZ</small>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <div class="card c-brd-primary c-bg-primary mb-5">
                            <div class="card-body p-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <h6 class="text-white">John Deo </h6>
                                <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                    Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                </blockquote>
                                <span class="sprite"></span>
                            </div>
                        </div>
                        <div class="media ml-5">
                            <img src="dist/images/author3.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                            <div class="media-body align-self-center">
                                <h6 class="mb-0 text-white">Marry Anderson</h6>
                                <small>Manager of XYZ</small>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <div class="card c-brd-primary c-bg-primary mb-5">
                            <div class="card-body p-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <h6 class="text-white">Customer Support </h6>
                                <blockquote class="mb-0 font-italic c-line-height-2 position-relative">
                                    Maecenas tempus, tellus eget condimntum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                </blockquote>
                                <span class="sprite"></span>
                            </div>
                        </div>
                        <div class="media ml-5">
                            <img src="dist/images/author1.jpg" alt="" class="rounded-circle img-fluid d-flex mr-2" width="50" />
                            <div class="media-body align-self-center">
                                <h6 class="mb-0 text-white">Alex Anderson</h6>
                                <small>Manager of XYZ</small>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial-->
        
        <!-- Review--
        <section class="bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 pb-4">
                        <h3 class="mb-2">Expert Reviews</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-6 mb-4 mb-xl-0">
                        <div class="review">
                            <div class="card c-brd-light positon-relative gradient gradient-bt">
                                <img src="dist/images/img8.jpg" alt="" class="img-fluid rounded w-96" />
                                <div class="card-body review position-absolute w-100 h-100">
                                    <div class="d-table w-100 h-100 ">
                                        <div class="d-table-cell align-bottom">
                                            <ul class="list-inline mb-2 c-primary">
                                                <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item mr-0"><i class="fa fa-star-o"></i></li>
                                                <li class="list-inline-item mr-0">5/3.5</li>
                                            </ul>
                                            <a href="#"><h5 class="mb-0 text-white">Ford Vignale Mondeo Turnier Review</h5></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="media d-block d-sm-flex mb-4">
                            <a href="#"><img src="dist/images/img9.jpg" alt="" class="img-fluid d-sm-flex mr-sm-3 mb-3 mb-sm-0 border c-brd-light" width="170" /></a>
                            <div class="media-body align-self-center">
                                <ul class="list-inline mb-2 c-primary">
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star-o"></i></li>
                                    <li class="list-inline-item mr-0">5/3.5</li>
                                </ul>
                                <a href="#"><h5 class="mb-2">BMW X6 M 2015 Blue Review</h5></a>
                                Nulla consequat massa quis enim. Donec Justo, frilla vel, aliquet nec, vulputate eget, arcu.
                            </div> 
                        </div>
                        <div class="media d-block d-sm-flex mb-4">
                            <a href="#"><img src="dist/images/img10.jpg" alt="" class="img-fluid d-sm-flex mr-sm-3 mb-3 mb-sm-0 border c-brd-light" width="170" /></a>
                            <div class="media-body align-self-center">
                                <ul class="list-inline mb-2 c-primary">
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star-half-o"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star-o"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star-o"></i></li>
                                    <li class="list-inline-item mr-0">5/2.5</li>
                                </ul>
                                <a href="#"><h5 class="mb-2">Ford Mustang Car Review</h5></a>
                                Nulla consequat massa quis enim. Donec Justo, frilla vel, aliquet nec, vulputate eget, arcu.
                            </div> 
                        </div>
                        <div class="media d-block d-sm-flex">
                            <a href="#"><img src="dist/images/img11.jpg" alt="" class="img-fluid d-sm-flex mr-sm-3 mb-3 mb-sm-0 border c-brd-light" width="170" /></a>
                            <div class="media-body align-self-center">
                                <ul class="list-inline mb-2 c-primary">
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fa fa-star-o"></i></li>
                                    <li class="list-inline-item mr-0">5/4.0</li>
                                </ul>
                                <a href="#"><h5 class="mb-2">Nissan GT R Black Review</h5></a>
                                Nulla consequat massa quis enim. Donec Justo, frilla vel, aliquet nec, vulputate eget, arcu.
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Review-->
        
        <!-- News-->
        <section>
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-12 col-lg-6 pb-4">
                        <h3>Latest Auto News</h3>
                        <!--p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <a href="#">
                            <div class="blog">
                                <img src="dist/images/blog1.jpg" alt="" class="img-fluid rounded">  
                            </div>
                        </a>  
                        <div class="pt-4">
                            <a href="single-blog.html"><h6 class="mb-2">Ducati Panigale V4 Hits Production</h6></a>
                            <small><strong class="c-dark">John Doe </strong> -  Feb 26, 2017</small>
                            <p class="mb-0 pt-2">The Ducati flagship is priced at  19,250 (Rs 16.51 lakh), with deliveries starting from Januarya</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <a href="#">
                            <div class="blog">
                                <img src="dist/images/blog2.jpg" alt="" class="img-fluid rounded">  
                            </div>
                        </a>  
                        <div class="pt-4">
                            <a href="single-blog.html"><h6 class="mb-2">Ducati Panigale V4 Hits Production</h6></a>
                            <small><strong class="c-dark">John Doe </strong> -  Feb 26, 2017</small>
                            <p class="mb-0 pt-2">The Ducati flagship is priced at  19,250 (Rs 16.51 lakh), with deliveries starting from Januarya</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="#">
                            <div class="blog">
                                <img src="dist/images/blog3.jpg" alt="" class="img-fluid rounded">  
                            </div>
                        </a>  
                        <div class="pt-4">
                            <a href="single-blog.html"><h6 class="mb-2">Ducati Panigale V4 Hits Production</h6></a>
                            <small><strong class="c-dark">John Doe </strong> -  Feb 26, 2017</small>
                            <p class="mb-0 pt-2">The Ducati flagship is priced at  19,250 (Rs 16.51 lakh), with deliveries starting from Januarya</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News-->
        
        <!-- Subscribe-->
        <section class="py-4 c-bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-4 mb-lg-0 align-self-center">
                        <div class="media d-block d-md-flex">
                            <div class="d-md-flex mr-sm-3 mb-3 mb-md-0 align-self-center">
                                <h5 class="text-white c-font-weight-600 c-open-sans mb-0 c-line-height-1_5">Download SoldWheel <br />Mobile App</h5>
                            </div>
                            <div class="media-body align-self-center">
                                <a href="#"><img src="dist/images/google-play.jpg" alt="" class="img-fluid rounded mr-sm-2 mb-2" /></a>
                                <a href="#"><img src="dist/images/app-store.jpg" alt="" class="img-fluid rounded mb-2" /></a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label class="text-white h6">Subscribe</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your email address...">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text c-bg-dark border-0 text-white"><i class="fa fa-paper-plane-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe-->
        
        <!-- Footer Top -->
        <section class="footer c-bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                        <h6 class="text-white">Latest Tweets</h6>
                        <div class="media d-block d-sm-flex mb-3">
                            <a href="#" class="d-sm-flex mr-2 c-primary pt-1"><i class="fa fa-twitter"></i></a>
                            <div class="media-body align-self-center tweet">
                                <p class="mb-0">SoldWheel- the top notch car deling wbsite <a href="#"> #SellYourCar https://t.co/rxJuQV5meq </a></p>
                                <small>about 20 hours ago</small>
                            </div> 
                        </div>
                        <div class="media d-block d-sm-flex mb-3">
                            <a href="#" class="d-sm-flex mr-2 c-primary pt-1"><i class="fa fa-twitter"></i></a>
                            <div class="media-body align-self-center tweet">
                                <p class="mb-0">SoldWheel- Ceckout our new Mobile App <a href="#"> #AndroidApp https://t.co/rxJuQV5meq </a></p>
                                <small>about 17 hours ago</small>
                            </div> 
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-12 col-sm-4 mb-4 mb-sm-0">
                                <h6 class="text-white">Latest Tweets</h6>
                                <ul class="list-unstyled footer-links mb-0">
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> BMW</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Mercedes</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Lamborghini</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Audi</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Porsche</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Ford</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-4 mb-4 mb-sm-0">
                                <h6 class="text-white">Overview</h6>
                                <ul class="list-unstyled footer-links mb-0">
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> About Us</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Feedback</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Advertise with us</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Contact Us</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> FAQs</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-4">
                                <h6 class="text-white">Other Pages</h6>
                                <ul class="list-unstyled footer-links mb-0">
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Careers</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Customer Care</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Privacy Policy</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Terms & Conditions</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Sitemapa </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h6 class="text-white">Contact Info</h6>
                        <ul class="list-unstyled footer-address mb-0">
                            <li><a href="#"><i class="fa fa-map-marker pr-2"></i> SoldWheel, At Pnaval, Ratnagiri, 415619, India.</a></li>
                            <li><a href="tel:+91 99707 40063"><i class="fa fa-phone pr-2"></i> +91 99707 40063</a></li>
                            <li><a href="mailto:support@soldwheel.com"><i class="fa fa-envelope pr-2"></i> support@soldwheel.com</a></li>
                            <li><a href="#"><i class="fa fa-fax pr-2"></i> Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Top-->
        
        <!-- Footer Bottom -->
        <section class="footer-bottom c-bg-dark py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 text-lg-left text-center mb-3 mb-lg-0">
                        <span class="copyright">Copyright &copy; 2021-2022 Powered By <a href="www.soldwheel.com">SoldWheel Ltd.</a>  All Rights Reserved. Design and Develop By <a href="darkcode.in">DarkCode Pvt. Ltd.</a></span>
                    </div>
                    <div class="col-12 col-lg-4 text-lg-right text-center">
                        <ul class="list-inline footer-social mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook pr-3"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter pr-3"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin pr-3"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play pr-3"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p pr-3"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Bottom -->
        
        <!-- Top To Bottom-->
        <div class="scrollup">
            <img src="dist/images/up-arrow.svg" class="img-fluid" />
        </div>
        <!-- End Top To Bottom-->
      
        <!-- Login /Register Form-->
        <div id="signup" class="popupContainer bg-white">
            <header class="popupHeader p-3 text-uppercase">
                <span class="header_title font-weight-bold c-dark">Login</span>
                <span class="modal_close float-right"><i class="fa fa-times"></i></span>
            </header>
            <div class="card-body">
                <!-- Social Login -->						
                <!-- Username & Password Login form -->
                <div class="user_login">
                    <form onsubmit="login()" id="loginForm">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control rounded-0" placeholder="Email address" />
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control rounded-0" placeholder="password" />
                        </div>
                        <div class="checkbox form-group">
                            <input id="remember" type="checkbox" />
                            <label for="remember">Remember me on this computer</label>
                        </div>
                        <div class="action_btns form-group">
                            <button type="submit" class="btn btn-primary btn-md btn-block">Login</a>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <div class="border border-top-0 c-brd-light my-3"></div>
                            Don't have an account <a href="#" class="register_form c-primary">Sign Up</a>
                        </div>  
                    </form>
                </div>

                <!-- Register Form -->
                <div class="user_register">
                    <form onsubmit="register()" id="registerForm">
                       
                        <div class="form-group">
                            <input type="email" class="form-control rounded-0" id="emaill" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control rounded-0" id="passwordd" placeholder="Password" />
                        </div>
                        <div class="checkbox form-group">
                            <input id="send_updates" type="checkbox" />
                            <label for="send_updates">Send me occasional email updates</label>
                        </div>
                        <div class="action_btns form-group">
                            <button class="btn btn-primary btn-md btn-block">Register</button>
                        </div>
                        <div class="form-group mb-0 text-center">
                            
                            <div class="border border-top-0 c-brd-light my-3"></div>
                            Already have an account <a href="#" class="login_form c-primary">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Login /Register Form-->
        
        <!-- jQuery -->
        <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'driverDetails.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-content').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
       
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-analytics.js"></script> --> -->
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js"></script> -->
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
        <script src="firebase.js"></script>
        <script src="index.js"></script>
    </body>

</html>