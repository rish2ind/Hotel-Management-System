<html>
    <head>
        <title>Admin Panel</title>
        
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
            body{
                background-color: #ffeded;
            }
            .register{
                padding: 25px;
                background-color: black;
                opacity: .9;
            }
        </style>
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 logo">
                    <img src="Images/Hotel.jpg" alt="" height="100px" >
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-default navigation">
                        <div class="navbar-header ">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navb">
                                <i class="glyphicon glyphicon-align-center"></i>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse" id="navb">
                            <ul class="nav navbar-nav navbar-left lists">
                                <li><a href="index.php" >Home</a></li>
                                <li><a href="index.php" >Booking</a></li>
                                <li><a href="index.php" >About</a></li>
                                <li><a href="index.php" >Services</a></li>
                                <li><a href="index.php" >Gallery</a></li>
                                <li><a href="index.php" >Contact</a></li>
                                <li><a href="user-login.php">Sign In / Sign Up</a></li>
                            </ul>
                        </div>
                        
                        
                        
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-image: url('Images/jaiselmer1.jpg');
                background-size: cover;">
              <div class="row register">
              <div class="col-md-6 ">
               <h2 style="color: white; text-align: center;">Sign In</h2>
               <p style="color: gold; text-align: center;">Sign in to your account</p>
            <div class="form-container">
                <form action="" class="contact-form">
                    
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Password : </lable>
                        <input type="password" class="form-control" required="" name="password">
                    </div>
                    
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign In" name="signin" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
            </div>  
                  </div>
                  
                        <!-----------------------------   Sign Up    ------------------------->
                        
                        
                <div class="col-md-6 ">
                   <h2 style="color: white; text-align: center;">Sign Up</h2>
                       <p style="text-align: center; color: gold;">Sign up to become our customer</p>
                    <form action="" class="contact-form">
                    <div class="form-group ">
                        <lable style="color: gold;">Full Name : </lable>
                        <input type="text" class="form-control" required="" name="name">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Password : </lable>
                        <input type="password" class="form-control" required="" name="password">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Phone Number : </lable>
                        <input type="text" class="form-control" required="" name="phone">
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign Up" name="signup" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
                </div>  
             </div>       
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>