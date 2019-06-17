<html>
    <head>
        <title>Hotel Name</title>
    <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
    <!-- jQuery Link       -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    
    <!-- External CSS Link  -->        
        <link rel="stylesheet" href="style.css">
        
        <style>
            
            #hover{
               
                overflow: hidden;
                width: 300px;
                border-radius: 25%;
                
            }
            #hover img{
                width: 100%;
                height: 300px;
                transition: transform .4s;
            }
            #hover:hover img{
                transform: scale(1.3);
            }
            @media screen and (max-width: 992px){
                #hover{
                    overflow: hidden;
                    margin-left: 20%;
                    width: 300px;
                }
                #hover img{
                    margin-top: 15px;
                    width: 100%;
                    height: 300px;
                    transition: transform .4s;
                }
                #hover:hover img{
                transform: scale(1.3);
            }
            }
            
        </style>

    </head>
    <body>
                        <!------------------------------------   Header Section   ------------------------->
                        
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
        </div><div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image1.jpg"  class="img-responsive" width="300px" alt="">
    
      </div>
      </div>
      <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image2.jpg" class="img-responsive" width="300px" alt="">
    
      </div>
      </div>
      <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image3.jpg" class="img-responsive" width="300px" alt="">
      </div>
      </div>
      <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image4.jpg" class="img-responsive" width="300px" alt="">
      </div>
      </div>
      </div>
       </div>

       


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
  <script src="Personal-Validation.js"></script>
   
   <!--<script>
        $(function(){
            $("img").mouseenter(function(){
                $(".slideup").slideDown();
            });
            $("img").mouseleave(function(){
                $(".slideup").hide();
            });
        });
        </script>-->
    </body>
</html>
