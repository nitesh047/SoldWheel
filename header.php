   

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
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"  aria-expanded="false">Company</a>
                            <ul class="dropdown-menu rounded-0 border-0 py-0">
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="coming-soon.php">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="grid-without-sidebar.php">Cars List</a></li>
                        <li class="nav-item"><a class="nav-link" href="carRent.php">Car Rent</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog-grid.php">Blog</a></li>       
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                            <a href="sell-car.php" class="btn btn-primary my-2 my-sm-0 btn-sm">Sell Car</a>
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
          
    </body>

</html>