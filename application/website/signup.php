<?php
require '../function/connection.php';
?>
<html>
<head>

    <title>Sign Up</title>
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
        <li>Signup</li>
    </ul>
</div>

<!--signup body-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="heading"><h2 align="center"><font color="Black">- Sign Up -</font></h2></div>
            <div class="panel-body">
                    <form class="form-horizontal" method="post" role="form" action="loginAndSignup/signup.php" required>
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter first name" required>
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter last name" required>
                        <label>User Name:</label>
                        <input type="text" class="form-control" name="uname" placeholder="Enter user name" required>
                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                        <label>Confirm Email Address:</label>
                        <input type="email" class="form-control" name="remail" placeholder="Re enter email" required>
                        <label>Password:</label>
                        <input type="password" class="form-control" name="pass" placeholder="Enter password" required>
                        <label>Comfirm Password:</label>
                        <input type="password" class="form-control" name="repass" placeholder="Re enter password" required>
                        <label>Index Number:</label>
                        <input type="text" class="form-control" name="index" placeholder="Enter index number" required>
                        <label>Faculty:</label>
                        <select class="form-control"  name="faculty" required>
                            <option disabled selected> Choose The Faculty </option>
                            <option>Faculty of Computing</option>
                            <option>Faculty of Management</option>
                            <option>Faculty of Engineering</option>
                        </select>
                        <label>Course:</label>
                        <select class="form-control" required name="course" required>
                            <option disabled selected>Choose Your Course</option>
                            <option>BSc(Hons)in Human Resource Management</option>
                            <option>BSc(Hons)in Logistics Management</option>
                            <option>BSc(Hons)in Project Management</option>
                            <option>BSc(Hons)in Marketing Management</option>
                            <option>BSc(Hons)in Tourism Management</option>
                            <option>BSc(Hons)in Management Information Systems</option>
                            <option>BSc(Hons)in Computer Science</option>
                            <option>BSc(Hons)in Software Engineering</option>
                            <option>BSc(Hons)in Computer Networks</option>
                            <option>BSc(Hons)in Computer Security</option>
                            <option>BSc(Eng)in Civil Engineering</option>
                            <option>BSc(Eng)in Electrical & Electronic Engineering</option>
                            <option>BSc(Eng)in Materials Engineering</option>
                            <option>BSc(Eng)in Mechanical Engineering</option>
                            <option>BSc(Eng)in Mechatronics Engineering</option>
                        </select>

                        <label>Batch:</label>
                        <select class="form-control" name="batch" required>
                            <option disabled selected>Choose Your Batch</option>
                            <option>14.1</option>
                            <option>14.2</option>
                            <option>15.1</option>
                            <option>15.2</option>
                        </select>
                        <br>
                    <button type="submit" name="submit" class="btn btn-primary">Log In</button>

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