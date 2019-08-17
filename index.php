<?php
//including the database connection file
include_once("inc/config.php");

//fetching data in descending order (latest entry first)
$result = mysqli_query($mysqli,"SELECT *FROM posts ORDER BY id  DESC");//mysql_query is deprecated 


?>


<!DOCTYPE html>
<html lang="en">

  <head>
  <title>
        NVIDIA GEFORCE
    </title>
    <link rel="icon" type="image/ico" href="nvicog.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <style>
    .cont{
      margin:auto; 
    }
    
    </style>

  </head>

  <body class="bg-dark">

    <!-- Navigation -->

    <nav class="navbar  navbar-dark bg-success fixed-top">
  
 
        <a class="navbar-brand cont" href="index.php"><img src = "nvico.png" height = "30" width="50">NVIDIA GEFORCE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">SignUp</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


        <!-- /.col-lg-3 -->

        <div class="col-lg-10 cont">
        	<div id="demo" class="carousel slide cont" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
 
  <div class="carousel-inner  mx-auto  ">
    <div class="carousel-item active ">
      <img src="img/nv1.jpg " alt="img" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/nv2.jpg" alt="img" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/nv3.jpg" alt="img" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/nv4.jpg" alt="img" width="100%" height="500">
    </div>
  </div></div>


  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

 <br><br>
          <div class="row">

          <?php 
    while($res = mysqli_fetch_array($result)){
?>
            <div class="col-lg-3 col-md-2 mb-4">
              <div class="card h-100">
                <!--<a href="post 1.html"><img class="card-img-top" src="image1.jpg" alt="post1" width="75" height="150"></a>-->
                
                  <h4 class="card-title">
   
                    <a class="text-success" href="fullpost.php?id=<?php echo $res['id'] ?>"><?php echo $res['Title'] ?></a>

    
                  </h4>
                  <?php 
            $img = $res['Image'];
            echo"<img src='img/$img'>"; ?>
              
                  <p class="card-text"><?php  echo $res['Body'] ?></p>

               
                <div class="mb-1">
                <button type="button" class="btn btn-success"><a href="fullpost.php?id=<?php echo $res['id'] ?>"><font color = #ffffff>View</font></a></button>
                </div>
              </div>
            </div>
            <?php }
    ?>     

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


    <!-- Footer -->
    <footer class="py-5 bg-success">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
