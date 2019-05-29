
   <html>
    <head>
        <title>Dashboard</title>
        
         <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        
        <style type="text/css">
            .head{
                background-color:  #050565;
                color: gold;
            }
            .aside{
                background-color: #f5c32c;
                padding: 15px;
                height: 100%;
            }
            .aside ul li a{
                color: black;
                text-decoration: none;
/*                text-shadow: 2px 2px 19px ;*/
            }
            .aside ul li a:hover{
                color: red;
            }
            #dropdown{
                display: none;
                list-style-type: none;
                font-size: 20px;
                font-family: 'Helvetica';
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 head">
                    <h1>Admin Panel</h1>
                </div>
                <div class="col-md-6 head">
                    <h2 style="float: right; height: 39px;">Logout</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 aside" >
                    <ul style="list-style-type: none;">
                        <li><h2><a class="active" href="new-bookings.php" target="demo"  >Dashboard</a></h2></li>
                        <li><h3><a href="room-availabilty.php" target="demo" >Rooms Availabilty</a></h3></li>
                        <li><h3><a href="#" onclick="myFunction();" >Services</a></h3>
                            <ul id="dropdown">
                                <li><a href="new-services.php" target="demo">Add Services</a></li>
                                <li><a href="#" >Delete Services</a></li>
                            </ul>
                        </li>
                    </ul>                 
                </div>
                <div class="col-md-9">
                    <iframe src="iframe-default.php" name="demo" width="100%" height="100%" scrolling="no" frameborder="no"></iframe>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            function myFunction(){
                var x = document.getElementById('dropdown');
                if(x.style.display === 'none'){
                    x.style.display = 'block';
                }
                else{
                    x.style.display = 'none';
                }
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>