 <!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Details-SoldWheel</title>

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
                        <h1 class="text-white c-font-weight-700">Single Cars Listing</h1>
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

        <!-- List Details -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                        <div class="car-listing">
                            <div class="flexslider c-bg-dark mb-4">
                                <ul class="slides">
                                    <li class="position-relative"  data-thumb="dist/images/img1.jpg">
                                        <img src="dist/images/img1.jpg" alt="" class="img-fluid" />
                                        <div class="fullscreen position-absolute text-center">
                                            <a href="dist/images/img1.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </li>
                                    <li class="position-relative" data-thumb="dist/images/img2.jpg">
                                        <img src="dist/images/img2.jpg" alt="" class="img-fluid" />
                                        <div class="fullscreen position-absolute text-center">
                                            <a href="dist/images/img2.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </li>
                                    <li class="position-relative" data-thumb="dist/images/img3.jpg">
                                        <img src="dist/images/img3.jpg" alt="" class="img-fluid" />
                                        <div class="fullscreen position-absolute text-center">
                                            <a href="dist/images/img3.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </li>
                                    <li class="position-relative" data-thumb="dist/images/img4.jpg">
                                        <img src="dist/images/img4.jpg" alt="" class="img-fluid" />
                                        <div class="fullscreen position-absolute text-center">
                                            <a href="dist/images/img4.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </li>
                                    <li class="position-relative" data-thumb="dist/images/img5.jpg">
                                        <img src="dist/images/img5.jpg" alt="" class="img-fluid" />
                                        <div class="fullscreen position-absolute text-center">
                                            <a href="dist/images/img5.jpg" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-bg-dark rounded-top">
                                <ul class="nav nav-tabs border-0 flex-column flex-sm-row text-white" id="myTab" role="tablist">
                                    <li class="nav-item mb-0 rounded-left">
                                        <a class="nav-link redial-light border-0 py-3 active" data-toggle="tab" href="#overview" role="tab" aria-expanded="true">Overview</a>
                                    </li>
                                    <li class="nav-item mb-0">
                                        <a class="nav-link redial-light rounded-0 border-0 py-3" data-toggle="tab" href="#specifications" role="tab" aria-expanded="false">Specifications</a>
                                    </li>
                                    <li class="nav-item mb-0">
                                        <a class="nav-link redial-light rounded-0 border-0 py-3" data-toggle="tab" href="#features" role="tab" aria-expanded="false">Features</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade active show" id="overview" role="tabpanel" aria-expanded="true">
                                    <div class="border c-brd-light border-top-0">
                                        <div class="card-body pt-5">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                            <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                            <p class="mb-0">Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Sed fringilla mauris sit amet nibh.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="specifications" role="tabpanel" aria-expanded="false">
                                    <div class="border c-brd-light border-top-0">
                                        <div class="pt-4"></div>
                                        <div class="list-header p-3">
                                            <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#engine"><i class="flaticon-engine pr-1"></i> Engine</a>
                                        </div>
                                        <div id="engine" class="collapse show widget-content">
                                            <table class="table table-striped mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Engine Type</td>
                                                        <td>U2 CRDI Diesel Engine</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Displacement</td>
                                                        <td>1120</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Max Power</td>
                                                        <td>71bhp @ 4000rpm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Max Torque</td>
                                                        <td>180.4Nm @ 1750-2500rpm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Of Cylinder</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Valves Per Cylinder</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Valve Configuration</td>
                                                        <td>DOHC</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fuel Supply System</td>
                                                        <td>CRDI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Turbo Charger</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Super Charger</td>
                                                        <td>No</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="list-header p-3">
                                            <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#dimensions"><i class="flaticon-transport-7 pr-1"></i> Dimensions</a>
                                        </div>
                                        <div id="dimensions" class="collapse show widget-content">
                                            <table class="table table-striped mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Length</td>
                                                        <td>3995mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Width</td>
                                                        <td>1660mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Height</td>
                                                        <td>1520mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ground Clearance</td>
                                                        <td>165mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wheel Base</td>
                                                        <td>2425mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Front Tread</td>
                                                        <td>1479mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rear Tread</td>
                                                        <td>1493mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seating Capacity</td>
                                                        <td>5 Comfortable</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cargo Volume</td>
                                                        <td>460-Litres Maximum</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Number of Doors</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tyre Type</td>
                                                        <td>Tubeless, Radial</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wheel Type</td>
                                                        <td>Alloy Wheel</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fuel Tank Capacity</td>
                                                        <td>65 Litres</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="features" role="tabpanel" aria-expanded="false">
                                    <div class="border c-brd-light border-top-0">
                                        <div class="card-body pt-4">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <ul class="list-unstyled c-line-height-3 mb-0">
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Automatic Climate Control</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Floor Mats</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> ParkAssist</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Adaptive Cruise Control</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Rear Camera</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Seat Ventilation</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Tire Pressure Monitoring</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Brake Assist</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> 4-Wheel Disc Brakes</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Heated Rear Seats</li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <ul class="list-unstyled c-line-height-3 mb-0">
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Aluminum Wheels</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Seat beal</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Child seat</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> GPS</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Power steering</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Low fuel warning light</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Vanity mirror</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Cup holders front</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Digital clock</li>
                                                        <li><i class="fa fa-check c-primary pr-2"></i> Navigation system</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card c-brd-light mb-4">
                            <div class="card-body">
                                <h4>Volvo xc90 inscription</h4>
                                <ul class="list-unstyled c-line-height-2_5 mb-0">
                                    <li><small class="c-light">Price</small> <h4 class="d-inline-block c-primary mb-1">₹43,600,00 </h4></li>
                                    <li><i class="fa fa-map-marker pr-1"></i> panval, Ratnagiri</li>
                                </ul>
                            </div>
                            <table class="table mb-0 c-line-height-1_5 c-brd-light">
                                <tbody>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-calendar pr-1"></i> Body Type:</td>
                                        <td>2015</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-fuel pr-1"></i> Fuel:</td>
                                        <td>Diesel</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-transport-2 pr-1"></i> Transmission:</td>
                                        <td>Automatic</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-ammunition pr-1"></i> Color:</td>
                                        <td>White</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-clock pr-1"></i> Driven:</td>
                                        <td>50,000 km</td>
                                    </tr>
                                    <tr>
                                        <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-engine pr-1"></i> Engine:</td>
                                        <td>3500 cc</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card c-brd-light mb-4">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <h6 class="mb-0">Contact Seller</h6>
                                </div>
                            </div>
                            <div class="card-body py-4 bg-white">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                                <a href="#" class="btn btn-primary btn-lg text-uppercase"> Send Message</a>
                            </div>
                        </div>
                        <div class="card c-brd-light mb-4 right-sidebar-widget">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <h6 class="mb-0">EMI Calculator</h6>
                                </div>
                            </div>
                            <div class="card-body py-4 bg-white">
                                <label class="c-dark">Vehicle Price</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="$6,52,000" />
                                </div>
                                <label class="c-dark">Down Payment</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="$2,50,000" />
                                </div>
                                <label class="c-dark mb-3">Interest Rate (%)</label>
                                <div class="form-group">
                                    <input data-ui-slider="" type="text" value="" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="8" data-slider-orientation="horizontal" class="slider slider-horizontal">
                                </div>
                                <label class="c-dark mb-3">Loan Period (month)</label>
                                <div class="form-group">
                                    <input data-ui-slider="" type="text" value="" data-slider-min="1" data-slider-max="50" data-slider-step="1" data-slider-value="36" data-slider-orientation="horizontal" class="slider slider-horizontal">
                                </div>
                                <div class="form-group">
                                    <a href="#" class="btn btn-primary btn-lg text-uppercase"> Calculate Emi</a>
                                </div>
                                <dl class="row mb-0">
                                    <dt class="col-sm-8 font-weight-normal">Total Loan Amount:</dt>
                                    <dd class="col-sm-4 c-dark text-sm-right">$4,02,238</dd>

                                    <dt class="col-sm-8 font-weight-normal">Payable Amount:</dt>
                                    <dd class="col-sm-4 c-dark text-sm-right">$4,53,780</dd>

                                    <dt class="col-sm-8 font-weight-normal">Total Interest Payable:</dt>
                                    <dd class="col-sm-4 c-dark text-sm-right">$51,542</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End List Details -->

        <!-- Car Featured-->
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-7">
                        <h3>Related Cars</h3>
                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                    </div>
                </div>
                <div class="slider multiple-items2">
                    <div>
                        <a href="#"><img src="dist/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                        <div class="card c-brd-light car-box">
                            <div class="card-body">
                                <h6 class="mb-2"><a href="#">Aston Martin DB5</a></h6>
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
                                <h6 class="mb-2"><a href="#">Chevrolet camaro SS</a></h6>
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
                                <h6 class="mb-2"><a href="#">Land Rover Discovery XXV</a></h6>
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
                                <h6 class="mb-2"><a href="#">Aston Martin DB5</a></h6>
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
                                <h6 class="mb-2"><a href="#">Chevrolet camaro SS</a></h6>
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
                                <h6 class="mb-2"><a href="#">Land Rover Discovery XXV</a></h6>
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

</html>