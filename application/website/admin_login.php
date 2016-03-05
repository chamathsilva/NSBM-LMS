<html>
<head>
    <title>Student Manage</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>

<!--Adminbar-->
<?php
include_once'includes\adminbar.php';
?>

<div class="container"> <!--LogIn Body-->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="heading"><h2 align="center"><font color="black">- Log In -</font></h2></div>
            <div class="panel-body">
                <form class="form-horizontal"method="post" role="form" action="">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="pass" placeholder="Enter email">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Enter password">

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

<script src="../../assets/js/jquery-1.11.3.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
</body>
</html>