<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Grid - SoldWheel</title> 
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Plugin CSS-->
        <link href="dist/css/plugins.min.css" rel="stylesheet">

        <!--main Css-->
        <link href="dist/css/main.min.css" rel="stylesheet">
    </head>
    <body> 
  <!-- Header-->
  <?php include 'header.php' ?>
<!-- End Header-->
        
        <!-- Page Inner-->
        <section>
            <div class="background-image-maker gradient gradient-lr"></div>
            <div class="holder-image">
                <img src="dist/images/bg2.jpg" alt="" class="img-fluid d-none" />
            </div>
            <div class="black-overlay overlay-full"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 justify-content-center text-center">
                        <h1 class="text-white c-font-weight-700">Grid Cars Listing</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Inner-->
        
        <!-- Breadcrumb -->
        <section class="py-0 h-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-5 col-lg-3 text-center">
                        <ol class="breadcrumb justify-content-center mb-0 c-bg-primary text-white py-3 position-relative">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Car Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->
        
        <!-- Grid Without Sidebar -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card c-brd-light car-box mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Select City</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="">--- Select City ---</option>
                                                <option value="Ratnagiri">Ratnagiri</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Body Type</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="Sedan">Sedan</option>
                                                <option value="Hatchback">Hatchback</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Minivan">Minivan</option>
                                                <option value="Pickup">Pickup</option>
                                                <option value="Coupe Car">Coupe Car</option>
                                                <option value="Convertible">Convertible</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Budget ($)</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="20,000 - 1,00,000">20,000 - 1,00,000</option>
                                                <option value="5,00,000 - 10,00,000">5,00,000 - 10,00,000</option>
                                                <option value="10,00,000 - 20,00,000">10,00,000 - 20,00,000</option>
                                                <option value="20,00,000 - 50,00,000">20,00,000 - 50,00,000</option>
                                                <option value="50,00,000 - 100,00,000">50,00,000 - 100,00,000</option>
                                                <option value="above-1-crore">Above 1 Crore</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Brand</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
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
                                    </div> 
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Model</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
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
                                    </div> 
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Make Year</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="2016">2016 </option>
                                                <option value="2015">2015 </option>
                                                <option value="2014">2014 </option>
                                                <option value="2013">2013 </option>
                                                <option value="2012">2012 </option>
                                                <option value="2011">2011 </option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Killometers Driven</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="50,000 km">50,000 km</option>
                                                <option value="20,000 km">20,000 km</option>
                                                <option value="15,000 km">15,000 km</option>
                                                <option value="60,000 km">60,000 km</option>
                                                <option value="70,000 km">70,000 km</option>
                                                <option value="30,000 km">30,000 km</option>
                                                <option value="80,000 km">80,000 km</option>
                                                <option value="90,000 km">90,000 km</option>
                                                <option value="100,000 km">100,000 km</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Fuel Type</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="Petrol">Petrol</option>
                                                <option value="Diesal">Diesal</option>
                                                <option value="CNG">CNG</option>
                                                <option value="Electric">Electric</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Transmission</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                        <label class="c-dark">Colors</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="Gray">Gray</option>
                                                <option value="White">White</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Green">Green</option>
                                                <option value="Black">Black</option>
                                                <option value="Pink">Pink</option>
                                                <option value="Red">Red</option>
                                                <option value="Yellow">Yellow</option>
                                                <option value="More Colors">More Colors</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-2">
                                        <label class="mb-4"></label>
                                        <div class="form-group mb-0">
                                            <a href="#" class="btn btn-primary btn-md btn-block text-uppercase">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row mb-4">
                            <div class="col-12 col-md-5 col-xl-6 align-self-center">
                                <p class="mb-0">9 Vehicles Matching</p>
                            </div>
                            <div class="col-12 col-md-7 col-xl-6 text-right">
                                <div class="d-inline-block pr-md-3 mt-3 mt-md-0">
                                    <div class="selector form-group mb-0 position-relative">
                                        <select class="form-control border-0 pl-4">                                                
                                            <option> Price (High to Low) </option>
                                            <option> Price (Low to High) </option>
                                            <option> Kms (Low to High) </option>
                                            <option> Model (Newest to Oldest) </option>
                                        </select>
                                        <div class="filter position-absolute">
                                            <i class="fa fa-sliders c-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-inline-block mt-3 mt-md-0">
                                    <div class="listing-filter">
                                        <ul class="nav nav-pills justify-content-md-end mb-0" id="myTab" role="tablist">
                                            <li class="nav-item mr-2">
                                                <a class="nav-link redial-light rounded" data-toggle="tab" href="#id1" role="tab" aria-selected="true" aria-expanded="true"><i class="fa fa-th-list"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link redial-light rounded active" data-toggle="tab" href="#id2" role="tab" aria-selected="false" aria-expanded="false"><i class="fa fa-th"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-4 mb-4">
                                <a href="listing-details.html"><img src="dist/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
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
                            <div class="col-12 col-md-6 col-xl-4 mb-4">
                                <a href="listing-details.html"><img src="dist/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
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
                            <div class="col-12 col-md-6 col-xl-4 mb-4">
                                <a href="listing-details.html"><img src="dist/images/img7.jpg" alt="" class="img-fluid rounded-top"></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Land Rover Discovery XXV</a></h6>
                                        <ul class="list-unstyled mb-0 c-line-height-2_5">
                                            <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹41,3000,00 </h6></li>
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
                            <div class="col-12 col-md-6 col-xl-4 mb-4">
                                <a href="listing-details.html"><img src="dist/images/img10.jpg" alt="" class="img-fluid rounded-top" /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html">Ford Mustang</a></h6>
                                        <ul class="list-unstyled mb-0 c-line-height-2_5">
                                            <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹32,700,00 </h6></li>
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
                            <div class="col-12 col-md-6 col-xl-4 mb-4">
                                <a href="listing-details.html"><img src="dist/images/img7.jpg" alt="" class="img-fluid rounded-top"></a>
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
                            <div class="col-12 col-md-6 col-xl-4 mb-4">
                                <a href="listing-details.html"><img src="dist/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
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
                            <div class="col-12 col-md-6 col-xl-4 mb-4 mb-xl-0">
                                <a href="listing-details.html"><img src="dist/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
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
                            <div class="col-12 col-md-6 col-xl-4 mb-4 mb-md-0">
                                <a href="listing-details.html"><img src="dist/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
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
                            <div class="col-12 col-md-6 col-xl-4">
                                <a href="listing-details.html"><img src="dist/images/img7.jpg" alt="" class="img-fluid rounded-top"></a>
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
                        <div class="row mt-4">
                            <div class="col-12 col-sm-12">
                                <ul class="pagination mb-0 text-center text-uppercase justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left pr-1"></i> Prev</a></li>
                                    <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item d-none d-sm-inline-block active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"> Next <i class="fa fa-angle-right pl-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Grid Without Sidebar -->
                
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
        
        <!-- Login /Register Form--> <div id="signup" class="popupContainer bg-white">
            <header class="popupHeader p-3 text-uppercase">
                <span class="header_title font-weight-bold c-dark">Login</span>
                <span class="modal_close float-right"><i class="fa fa-times"></i></span>
            </header>
            <div class="card-body">
                <!-- Social Login -->						
                <!-- Username & Password Login form -->
                <div class="user_login">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" placeholder="username or email address" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control rounded-0" placeholder="password" />
                        </div>
                        <div class="checkbox form-group">
                            <input id="remember" type="checkbox" />
                            <label for="remember">Remember me on this computer</label>
                        </div>
                        <div class="action_btns form-group">
                            <a href="#" class="btn btn-primary btn-md btn-block">Login</a>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <p>Sign in with your social network</p>
                            <ul class="list-inline footer-social mb-2">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <div class="border border-top-0 c-brd-light my-3"></div>
                            Don't have an account <a href="#" class="register_form c-primary">Sign Up</a>
                        </div>  
                    </form>
                </div>

                <!-- Register Form -->
                <div class="user_register">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control rounded-0" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control rounded-0" placeholder="Password" />
                        </div>
                        <div class="checkbox form-group">
                            <input id="send_updates" type="checkbox" />
                            <label for="send_updates">Send me occasional email updates</label>
                        </div>
                        <div class="action_btns form-group">
                            <a href="#" class="btn btn-primary btn-md btn-block">Register</a>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <p>Register with your social network</p>
                            <ul class="list-inline footer-social mb-2">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p pr-3"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <div class="border border-top-0 c-brd-light my-3"></div>
                            Already have an account <a href="#" class="login_form c-primary">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Login /Register Form-->
        
        <!-- jQuery -->
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
    </body>

/html>