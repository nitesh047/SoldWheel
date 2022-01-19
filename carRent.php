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
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4DDBKNPWJ9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4DDBKNPWJ9');
</script>
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
   <!-- Header-->
   <?php include 'header.php' ?>

<!-- End Header--> 
<!-- Modal Form -->

<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rent Your Car</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Car Modal</label>
                  <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Owner Name</label>
                    <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
                  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact Details</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Add Car Photo</label>
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

  
<!-- End -->
<!-- Driver Details Modal -->
<div class="modal fade" id="driverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Car Detail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <center><h3>Volvo X3</h3></center><br>
         <ul style="list-style-type: none;">
          <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹13 Kilometer per hour</h6></li><hr>
         <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li><hr>
         <li><h6 class="c-primary mb-0"><small class="c-light">Capacity : </small> 4 </h6></li> <hr>
         <li><h6 class="c-primary mb-0"><small class="c-light">fuel type :  </small> CNG </h6></li>
        </ul>
        <hr>
        <center><h5>Mr. John Deo</h5></center>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <button class="btn btn-primary btn-block">Call Now</button>
                </div>
                <div class="col-md-6">
               <button class="btn btn-primary btn-block">Whatsapp Now</button>  
                </div>
            </div>
        </div>

        </div>
        <div class="modal-footer">
          <!-- <p> Rent Your Car and earn a good profit!</p> -->
        </div>
      </div>
    </div>
  </div>


<!-- End Driver Modal -->





<!-- <div class="modal fade bd-example-modal-lg" id="empModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div id="owl-demo" style="margin-left: -15px;" class="owl-carousel owl-theme">
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
            </div>
            <div class="col-md-5">
                <center><h3 class="mt-5">Volvo X3</h3></center><br><hr>
                <ul style="list-style-type: none; margin-top: 118px;">
                 <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹13 Kilometer per hour</h6></li><hr>
                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li><hr>
                <li><h6 class="c-primary mb-0"><small class="c-light">Capacity : </small> 4 </h6></li> <hr>
                <li><h6 class="c-primary mb-0"><small class="c-light">fuel type :  </small> CNG </h6></li>
               </ul>
               <hr>
               <center><h5>Mr. John Deo</h5></center>
               <div class="container">
                   <div class="row">
                       <div class="col-md-6">
                       <button class="btn btn-primary btn-block">Call Now</button>
                       </div>
                       <div class="col-md-6">
                      <button class="btn btn-primary btn-block">Whatsapp Now</button>  
                       </div>
                   </div>
               </div>  
            </div>
        </div>
    </div>
    </div>
  </div>
</div> -->
<div class="modal fade bd-example-modal-lg" id="empModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        </div>
    </div>
</div>

<!-- Large Modal End! -->

        
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
                        <h1 class="text-white c-font-weight-700">Rent Your Car</h1>
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >Know More</button>
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
        
          <!-- Search Type -->
        <div class="container">
          <div class="form-row mt-5" style="margin-left: 160px;">
              
            <div class="form-group col-md-3">
              <label for="inputCity">Body Type</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">City</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputZip">Budget</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
                <button style="margin-top: 35px;" class="btn btn-primary" >Search</button>
              </div>
        
          </div>
          </div>
              
        <!-- End! -->
        <!-- Grid Without Sidebar -->
         <br>
        <center><p><?php echo $num  ?> Vehicles matching</p></center>
        <div class="container">
        <div class="row">
            <?php
             while($row = mysqli_fetch_array($result)){?>
                <div class="col-12 col-md-6 col-xl-4 mb-4">
                                <a href="listing-details.html"><img  src=<?php echo $row['images'] ?> alt="" class="img-fluid rounded-top" style="width:100%; height:18vw;object-fit:cover " /></a>
                                <div class="card c-brd-light car-box">
                                    <div class="card-body">
                                        <h6 class="mb-2"><a href="listing-details.html"><?php echo $row['carName'] ?></a></h6>
                                        <ul class="list-unstyled mb-0 c-line-height-2_5">
                                            <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> ₹<?php echo $row['carPrice'] ?></h6></li>
                                            <li><i class="fa fa-map-marker pr-1"></i> <?php echo $row['location'] ?></li>
                                            <button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-primary">Know More</button>
                                        </ul>
                                    </div>
                                </div>
                </div>
            <?php 
            }
            ?>
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
                        </div><br><br>
              
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
        
        <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'carDetails.php',
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
        <!-- jQuery -->
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-analytics.js"></script> --> 
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
        <!-- <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js"></script> -->
        <script src="firebase.js"></script>
        <script src="index.js"></script>
    </body>

</html>