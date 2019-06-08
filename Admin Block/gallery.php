<?php
    include('connect.php');
    $sql = "select * from gallery";
    $run = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($run);
?>
   <html>
    <head>
        <title>Gallery</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="Gallery/<?php echo $data['pic']; ?>" class="img-responsive" alt="">
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </body>
</html>