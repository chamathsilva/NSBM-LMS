<html>
<head>

    <title>LogIn</title>
<link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">

 <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <style type="text/css">
        .navbar-custom{
            background-color: #4c1a1a;
            border: none;
          }
        body{
            background-color:#f9ecec;
        }

  </style>

</head>
<body>

<!--Navbar-->
<?php
include_once'includes/navbar.php';
?>

<div class="container-fluid">
    <ul class="breadcrumb" style="background-color: #f9ecec;">
        <li>Home</li>
        <li>Login</li>
    </ul>
</div>

<div class="container"> <!--LogIn Body-->
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="heading"><h2 align="center"><font color="black">- Log In -</font></h2></div>
    <?php

    if (isset($_GET["fail"])){
        echo'<div class="heading"><h3 align="center"><font color="red">User Name Or Password incorrect</font></h3></div>';
    }

    if(isset($_GET["edit"])){
        echo'<div class="heading"><h3 align="center"><font color="red">Update Complete Please Login </font></h3></div>';
    }
    ?>


<div class="panel-body">
  <form class="form-horizontal"method="post" role="form" action="loginAndSignup/login.php" >
   <label>Email:</label>
  <input type="email" class="form-control" name="email" placeholder="Enter email" required >
   <label>Password:</label>
  <input type="password" class="form-control" name="pass" placeholder="Enter password" required>

    <label>
  <input type="checkbox">Remember Me
    </label><br><br>

  <button type="submit" class="btn btn-primary">Log In</button><br><br>
  <a href="">Forgot Password?</a><br><br>
  
  </form>
</div>
</div>
</div>
</div>
</div>

<!--footer-->
<?php
include_once'includes/footer.php';
?>

  <script src="../../assets/js/jquery-1.11.3.min.js"></script>
  <script src="../../assets/js/bootstrap.js"></script>

</body> 
</html>