
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
        <link href="../dist/css/plugins.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--main Css-->
        <link href="../dist/css/main.min.css" rel="stylesheet">
        <link href="../stylee.css" rel="stylesheet">
        <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js"></script>
    </head>
    <body> 

     <div class="container mt-5">
         <div class="row" style="justify-content:space-around">
             <div class="col-md-6 offset-col-md-3"  style="border: 1px solid #313131; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                 <h1 class="mt-3">Admin Panel Login</h1> 
                    <form onsubmit="login()" id="loginForm" style="margin:20px 5px">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control"  id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
                    location.replace('Home.php');
                } else {
                    console.log("user not found");
                }
})
        </script>
        <script src="index.js"></script>
      
    </body>
    </body>

</html>