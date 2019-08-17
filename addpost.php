<!DOCTYPE html>
<html lang="en">

  <head>
  <title>
        ADMIN NVIDIA
    </title>
    <link rel="icon" type="image/ico" href="nvicog.png" />
    <link rel="icon" type="image/ico" href="nvicog.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>


  <body class="bg-dark">
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="admin.php"><img src = "nvico.png" height = "30" width="50">NVIDIA ADMIN PANEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">User Layout
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="remove_post.php">remove Post</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>



 <!-- Form Section -->


 <form action="inc/addpost.php" method="post">
  <div class="form-group text-success">
    <label for="exampleFormControlInput1 text-success" >Title</label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter Title">
  </div>
  
  <div class="form-group text-success">
    <label for="exampleFormControlTextarea1 text-success">Post Body</label>
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group text-success">
    <label for="exampleFormControlInput1 text-success">Posted By</label>
    <input type="text" class="form-control" name="posted_by" id="exampleFormControlInput1" placeholder="Posted By">
  </div>
  <div class="form-group text-success ">
    <label for="exampleFormControlInput1">Upload an Image</label>
    <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
  </div>
  

  <button type="submit" class="btn btn-success">Submit</button>
</form>