<?php
require '../function/connection.php';
?>
<html>
<head>

    <title>Edit</title>
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

session_start();

require_once('../class/class.db.php');
$database = new DB();
$username = $_SESSION['username'];

$result = $database->query("SELECT * FROM `login` WHERE `Email` = '$username'");

?>

<!--signup body-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="heading"><h2 align="center"><font color="Black">- Sign Up -</font></h2></div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="loginAndSignup/edit.php">
                    <label>First Name:</label>
                    <input type="text" class="form-control" name="fname" value = "<?php echo $result[0]['F_Name'] ?>" placeholder="Enter first name" required="true">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="lname" value = "<?php echo $result[0]['L_Name'] ?>"placeholder="Enter last name" required="true">
                    <label>User Name:</label>
                    <input type="text" class="form-control" name="uname" value = "<?php echo $result[0]['U_Name'] ?>" placeholder="Enter user name" required="true">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" name="email" value = "<?php echo $result[0]['Email'] ?>" placeholder="Enter email" required="true">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="pass" value = "<?php echo $result[0]['Password'] ?>" placeholder="Enter password" required="true">
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


<!--Footer-->
<?php
include_once'includes/footer.php';
?>

<script src="../../assets/js/jquery-1.11.3.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>

</body>
</html>