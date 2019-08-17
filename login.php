<?php 
include_once("inc/server.php");
?>

<html>
<head>
<title>
        ADMIN LOGIN
    </title>
    <link rel="icon" type="image/ico" href="nvicog.png" />
 <!-- Bootstrap core CSS -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/shop-homepage.css" rel="stylesheet">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

  .cont{
      margin:auto; 
    }
   


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body class="bg-dark">

<nav class="navbar  navbar-dark bg-success fixed-top">
  
 
        <a class="navbar-brand cont" href="index.php"><img src = "nvico.png" height = "30" width="50">NVIDIA GEFORCE</a>

        </div>
      </div>
    </nav>

<form action="login.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Admin Login</h1>
   <hr>

    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter User name" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

   

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="login_user" class="signupbtn">Login</button>
    </div>
  </div>
</form>

</body>
</html>
