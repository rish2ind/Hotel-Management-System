<?php
    include('header-other.php');
?>
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