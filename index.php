<?php
    include('header.php');
    include('user-connect.php');

    $sql = "select * from services";
    $run = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($run);
?>
                                <!-----------------------------------   Carousel Section   ---------------------->
           
            <div class="carousel slide" id="image" data-ride="slide">
                <ol class="carousel-indicators">
                    <li data-target="#image" data-slide-to="0" class="active"></li>
                    <li data-target="#image" data-slide-to="1" ></li>
                    <li data-target="#image" data-slide-to="2" ></li>
                </ol>
                <div class="carousel-inner">
                   <a name="Home"></a>
                    <div class="item active">
                        <img src="Images/new.jpg" alt="Image">
                    </div>
                    <div class="item">
                        <img src="Images/nick-fewings-1241333-unsplash.jpg" alt="Image">
                    </div>
                    <div class="item">
                        <img src="Images/nicolas-cool-1592503-unsplash.jpg" alt="Image">
                    </div>
                </div>
                <a href="#image" class="carousel-control left" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a href="#image" class="carousel-control right" role="button"data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
                <a name="Booking"></a>  
            </div>
            
       <div class="jumbotron jumbo">
         <a href="new-room-booking.php">Book your Rooms</a>
       </div>
       
                            <!--------------------------------  About Section    --------------------------->
                            
        <div class="container" >
            <h1><a name="About"></a>About Our Hotel</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam illum perspiciatis tempore earum in ut dolores ipsum quae voluptate omnis dignissimos eum eius, a perferendis tempora eligendi ullam pariatur veritatis!</p>
            <div class="row">
            <div class="col-md-4 about"><img src="Images/Oberoi%20(1).jpg" alt="" class="img-responsive images"></div>
                <div class="col-md-4 about"><img src="Images/bar1.jpg" alt="" class="img-responsive images"></div>
                <div class="col-md-4 about"><img src="Images/Oberoi1.jpg" alt="" class="img-responsive images"></div>
            </div>    
        </div><br><br>
        
                                    <!---------------------   Services   ----------------------->
                                    
        <div class="container-fluid" style="background-image: url(Images/supriya-s-447048-unsplash.jpg);">
            <a name="Services"></a><h1 style="text-align: center; font-family: 'Arial'; color: gold;">Our Services</h1>
            <div class="row">
              
                <div class="col-md-3 services">
                    <i class="far fa-clock icons"></i><h4>24 Hours Restaursnt</h4><p class="service-details">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.                      
                    </p>
                     <i class="fas fa-check" style="color: gold;"></i> &nbsp;<span style="color: white;"> Vegitarian</span> <br>
                    <i class="fas fa-check" style="color: gold;"></i> &nbsp;<span style="color: white;"> Non Vegitarian </span><br>
                    <i class="fas fa-check" style="color: gold;"></i> &nbsp;<span style="color: white;"> 24 Hours Room Service </span> <br>
                </div>
                <div class="col-md-3 services">
                    <i class="<?php echo $data['class']; ?> icons"></i><h4><?php echo $data['name']; ?></h4><p class="service-details">
                        <?php echo $data['description']; ?>
                    </p>
                </div>
                <div class="col-md-3 services">
                    <i class="fas fa-wifi icons"></i><h4>Free wifi</h4><p class="service-details">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="col-md-3 services">
                    <i class="fas fa-parking icons"></i><h4>Parking</h4>
                    <i class="fas fa-check" style="color: gold;"></i> &nbsp; <span style="color: white;"> 3 Flour Parking </span> <br>
                    <i class="fas fa-check" style="color: gold;"></i> &nbsp; <span style="color: white;"> Vellet Parking available </span> <br>
                </div>
            </div>
        </div><br><br>
        
                            <!--------------------------------    Gallery Section   ------------------------->
                            
        <div class="container-fluid">
           <a name="Gallery"></a>
            <h1 style="text-align: center; font-family: 'Arial';">Gallery</h1>
            <div class="row">
                <div class="col-md-3 gallery">
                    <img src="Images/Inside.jpg" alt="" class="img-responsive">
                       <div class="box">
                    <p style="margin-top: 40px; border-top: 3px solid white;
                border-bottom: 3px solid white;">Bar</p>
                </div>
                
                </div>
             
                
                <div class="col-md-3 gallery" >
                    <img src="Images/inside1.jpg" alt="" class="img-responsive">
                    
                       <div class="box">
                    <p style="margin-top: 40px; border-top: 3px solid white;
                border-bottom: 3px solid white;"> Dinning Area</p>
                </div>
                </div>
                
            
                <div class="col-md-3 gallery">
                    <img src="Images/inside2.jpg" alt="" class="img-responsive">
                    
                    <div class="box">
                     <p style="margin-top: 40px; border-top: 3px solid white;
                border-bottom: 3px solid white;">Hall</p>
                </div>
                </div>
                <div class="col-md-3 gallery">
                    <img src="Images/inside3.jpg" alt="" class="img-responsive" >
                    
                    <div class="box">
                     <p style="margin-top: 40px; border-top: 3px solid white;
                border-bottom: 3px solid white;">Waiting Room</p>
                </div>
                </div>
            </div>
        </div><br><br>
        
                                <!----------------------------    Contact Us Section     --------------------------->
                                
        <div class="container-fluid" style="background-image: url(Images/jaiselmer1.jpg); background-size: cover;">
           <div class="row">
               
           <div class="col-md-6 contact">
         <a name="Contact"></a>   <h1 style="text-align: center; font-family: 'Arial'; color: white;">Contact Us</h1>
            
                <span style="color: gold;">Phone :<v/span> <span style="color: white;">+91 8560XXXXXX </span><br><br>
                <span style="color: gold;">Email :</span><span style="color: white;"> INFO@HOTEL.COM </span> <br><br>
                <span style="color: gold;">Address :</span><span style="color: white;"> Jacob Rd, Civil Lines, Jaipur, Rajasthan 302006 </span> <br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.727619630101!2d75.78298191452059!3d26.912138266594702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db40b6ed16f5f%3A0x902e85e7d6dc03fb!2sJai+Mahal+Palace!5e0!3m2!1sen!2sin!4v1558615764072!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 contact">
                <h1 style="color: white; font-family: 'Arial'; text-align: center;">Feedback</h1>
                <p style="text-align: center; color: gold;">Give your feedback</p>
                
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
                        <lable style="color: gold;">Feedback : </lable>
                        <textarea name="feedback" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Submit" name="submit" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
            </div>
        </div>
        </div>                        
   <?php include('footer.php');
   ?>