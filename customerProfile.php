
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
        <button style="float:right; margin-right:20px" class="btn btn-outline-danger">Logout</button>
        <div class="container-fluid mt-3" style="box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;">
                <div class="row" style="align-items:center">
                <div class="col-md-4">
                   
                  <center> 
                  
                  <p>Admin Profile</p>
                  <img data-toggle="modal" data-target="#uploadImage" style="    height: 153px;
    border-radius: 31px;
    margin-top: 10px;
    " src="dist/images/driver.png" href="student profile">
    
    </center>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid mt-5">
                        <h5>Mr. John Deo</h5>
                        <h5>Contact : +91 9521538903</h5>
                        <h5>Email: john@gmail.com</h5>
                      </div>
    </div>   
      <br><br>
       
    
      <section class="bg-light" style="margin:auto">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 d-flex justify-content-center pb-4">
                        <h3>List Car For Sale</h3>
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

        <section class="bg-light" style="margin:auto">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 d-flex justify-content-center pb-4">
                        <h3>List Car For Rent</h3>
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

       
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-analytics.js"></script> --> 
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js"></script> -->
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
        <script src="firebase.js"></script>
        <script src="indevcx.js"></script>
    
    </body>

</html>