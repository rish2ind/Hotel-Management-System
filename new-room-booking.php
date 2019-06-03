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
            .details{
                border: 1px solid black;
                background-color: white;
                box-shadow: 2px 3px 10px;
                height: 364.39px;
                transition: transform .4s;
                position: absolute;
                top: -200px;
                margin-left: 10px;
            }
            .details:hover{
                transform: scale(1.1);
            }
            .rooms{
                font-size: 20px;
                font-weight: 700;
                color: red;
                letter-spacing: 10px;
                background-color: lightpink;
            }
            .rooms-inner{
                padding: 10px;
                text-align: justify;
                font-size: 16px;
            }
            @media screen AND (max-width: 720px){
                .details{
                    margin-top: 50px;
                    height: 500px;
                    width: 400px;
                    margin-left: 30px;
                    position: relative;
                    top: 10px;
                }
                .details:hover{
                    transform: scale(.9);
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
        </div>
        <div class="container-fluid"><img src="Images/background1.jpg" alt="" class="img-responsive" height="200px;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="details"><p class="rooms">Standard</p><a href="superior-rooms.php"><img src="Images/Superior.jpg" alt="" class="img-responsive"></a><p class="rooms-inner">These executive rooms are well suited for business travelers. The rooms are voguish and tastefully designed with the sole aim of making it a perfect business suite..</p></div>
        </div>
        <div class="col-md-3">
            <div class="details"><p class="rooms">Delux</p><a href="delux-rooms.php"><img src="Images/delux.jpg" alt="" class="img-responsive"></a><p class="rooms-inner">The deluxe rooms come equipped with all the luxury facilities with a very personal touch which makes them a favourite amongst our corporate guests.</p></div>
        </div>
        <div class="col-md-3">
            <div class="details"><p class="rooms">Single Rooms</p><a href="single-rooms.php"><img src="Images/Single.jpg" alt="" class="img-responsive"></a><p class="rooms-inner">A single room is a room intended for one person to stay in. Choose from twin or single rooms, all of which are comfortable. Each guest has her own single room, or shares a double room.</p></div>
        </div>
        <div class="col-md-3">
            <div class="details"><p class="rooms">Luxury Rooms</p><a href="luxury-rooms.php"><img src="Images/luxury.jpg" alt="" class="img-responsive"></a><p class="rooms-inner">A perfect blend of luxury and comfort, Luxury Room provides a soothing and warm turquoise ambiance to each guests with carefully chosen.</p></div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
  <script src="Personal-Validation.js"></script>
    </body>
</html>