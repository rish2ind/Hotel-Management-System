<html>
    <head>
        <title>Add new services</title>
        
        <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <style type="text/css">
            .form{
                width: 500px;
                margin-top: 30px;
                background-color: #f1f1f1;
                padding: 20px;
                box-shadow: 2px 3px 15px;
                border-radius: 10px;
            }
            .form lable{
                font-size: 18px;
                margin-top: 10px;        
            }
            .form input, textarea{
                margin-top: 10px;
                font-size: 18px;
            }
            .form input[type=submit]{
                padding: 15px;
                font-size: 18px;
                border-radius: 10px;
            }
            .jumbo{
               
                background: linear-gradient(lightblue, #2170ef );
                padding: 10px;
                margin-top: 20px;
                font-size: 20px;
                border-radius: 10px;
                font-family: 'Century Gothic'; 
                font-weight: 500;
            }
            body{
                background: linear-gradient(#8a2be2, #ff00ff, #9400d3);
            }
        </style>
    </head>
    
    <body>
        
        <div class="container">
         <div class="row">
         <div class="col-md-4">
             
         </div>
         <div class="col-md-4">
          <div class="jumbotron jumbo">
              New Services
          </div>
           <div class="form">
            <form action="" method="post">
               
                <div class="form-group">
                    <lable><b>Name of service : </b></lable>
                    <input type="text" class="form-control" placeholder="Add new services" name="service" required="">
                </div>
                
                <div class="form-group">
                    <lable><b>Icon : </b></lable>
                    <input type="text" class="form-control" placeholder="Enter the class name of icon" name="icon" required="">
                </div>
                <div class="form-group">
                    <lable><b>Description : </b></lable>
                    <textarea placeholder="Enter the description of service......" name="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <center>    <input type="submit" class="btn btn-success" value="Submit" name="submit"></center>
                
            </form>
            </div>
            </div>
            
            <div class="col-md-4">
                
            </div>
            </div>
        </div>       
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>