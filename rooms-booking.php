
    <html>
      <head>
          <title>Bookings</title>
          
          <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
    
    <!-- External CSS Link  -->        
        <link rel="stylesheet" href="style.css">
      </head>
      
      <body style="background-image: url('Images/jaisel.jpg');" onload="document.registration.fname.focus()">
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
                                <li><a href="index.php" >About</a></li>
                                <li><a href="index.php" >Services</a></li>
                                <li><a href="index.php" >Gallery</a></li>
                                <li><a href="index.php" >Contact</a></li>
                                <li><a href="user-login.php">Login / Sign up</a></li>
                            </ul>
                        </div>
                        
                        
                        
                    </nav>
                </div>
            </div>
        </div>
      </body>
    </html>           
                <!---------------------------------------------        Personal Details   --------------------------------->
                
                
   <div class="container">
       <div class="row block" >
           <div class="col-md-6">
               <center><h1>Personal Details</h1></center>
               <form action="" name="registration" onSubmit="return formValidation();" method="post">
           <div class="form-group">
               <lable><b>Name : </b></lable>
               <input type="text" class="form-control" name="fname" placeholder="Enter Name" required="">
               <p id="name"></p>
           </div>
           <div class="form-group">
               <lable><b>Email Id : </b></lable>
               <input type="email" class="form-control" name="email" placeholder="Enter Email" required="">
               <p id="email"></p>
           </div>
           <div class="form-group">
               <lable><b>Mobile Number : </b></lable>
               <input type="text" class="form-control" name="mobiles" placeholder="Enter Mobile No." required="">
               <p id="mobile"></p>
           </div>
               </div>
               <div class="col-md-6">
                  <center><h1>Rooms Details</h1></center>
                   <div class="form-group">
                       <lable><B>Types of Rooms</B> <sup style="color: red;">*</sup></lable>
                        <select name="room-type" id="" class="form-control">
                            <option selected="" value="default">Select a room</option>
                            <option value="">SUPIRIER ROOM</option>
                            <option value="">DELUX ROOM</option>
                            <option value="">SINGLE ROOM</option>
                            <option value="">GUEST HOUSE</option>
                            
                        </select>       
                   </div>
                   <div class="form-group">
                       <lable><b>No. of Rooms</b> <sup style="color: red;">*</sup></lable>
                       <select name="Room-No" id="" class="form-control">
                           <option value="default" selected="">  </option>
                           <option value="">1</option>
                           <option value="">2</option>
                           <option value="">3</option>
                           <option value="">4</option>
                           <option value="">5</option>
                       </select>
                   </div>
                   <div class="form-group">
                       <lable><b>Check-in</b></lable>
                       <input type="date" class="form-control" name="cin">
                   </div>
                   <div class="form-group">
                       <lable><b>Check-out</b></lable>
                       <input type="date" class="form-control" name="cout">
                   </div>
           <input type="submit" name="submit" class="btn btn-info">
           
       </form>
               </div>
           
       </div>
   </div>
  
<?php

  include('footer.php');
?>