<?php
include_once("inc/config.php");

$a=$_GET["id"];

$result = mysqli_query($mysqli,"DELETE FROM posts where id=$a");

?>


<!DOCTYPE html>
<html lang="en">

  <head>
  <title>
        ADMIN NVIDIA
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

  </head>

  <body>

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
              <a class="nav-link" href="addpost.php">Add Post</a>
              
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="remove_post.php">remove Post</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <h2>Sucesss</h2>