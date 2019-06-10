<?php session_start(); 
    include('user-connect.php');
//    $sql = "select * from user_signup where email = '".$_SESSION["email"]."'";
//    $run = mysqli_query($conn, $sql);
//    $data = mysqli_fetch_array($run);
?>
   <html>
    <head>
        <title>Hotel Name</title>
    <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
    
    <!-- External CSS Link  -->        
        <link rel="stylesheet" href="style.css">
        
        <style type="text/css">
            .box{
                background-color: black;
                opacity: .5;
                height: 155px;
                width: 307px;
                display: none;
                position: absolute;
                top: -1px;
                color: white;
                font-size: 20px;
                text-align: center;
                padding: 15px;

                
            }
            .gallery:hover .box{
                display: block;
                height: 149.62px;
                background-color: black;
                z-index: 2;
                width: 307px;
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
                                <li><a href="#Home" >Home </a></li> 
                                <li><a href="#Booking" >Booking</a></li>
                                <li><a href="#About" >About</a></li>
                                <li><a href="#Services" >Services</a></li>
                                <li><a href="#Gallery" >Gallery</a></li>
                                <li><a href="#Contact" >Contact</a></li>
                                <?php
                                    
                                    if(isset($_SESSION['email']))
                                    {
                                           
                                ?>      
                                <li><a href="">Welcome : <?php echo $data['name']; ?></a></li>
                                <?php
                                    }
                                else
                                {  
                                ?>
                                    <li><a href="user-login.php">Signup/Sign In</a></li>   
                                    <?php                                     
                                }
                                ?>
                            </ul>
                        </div>
                      
                        
                        
                        
                    </nav>
                </div>
            </div>
        </div>