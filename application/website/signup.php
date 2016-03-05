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

<?php
//if($_SERVER["REQUEST_METHOD"] == "POST") {
//    require_once("function/connection.php");
//    $submit = $_POST['submit'];
//    $fname = $_POST['fname'];
//    $lname = $_POST['lname'];
//    $uname = $_POST['uname'];
//    $index = $_POST['index'];
//    $email = $_POST['email'];
//    $remail = $_POST['remail'];
//    $faculty = $_POST['faculty'];
//    $course = $_POST['course'];
//    $batch = $_POST['batch'];
//    $password = $_POST['pass'];
//    $repass = $_POST['repass'];
//    $date = date('Y-m-d');
//}
//if($submit)
//{
//    if($fname && $lname && $uname && $index && $email && $remail && $faculty && $course && $batch && $password && $repass)
//    {
//        if($email == $remail)
//        {
//            if(strlen($password)<6 || strlen($password)>20)
//            {
//                echo "Your Password Should Be 6-10 Characters";
//            }
//            else
//            {
//                if($password == $repass)
//                {
//                    if(user_exist($email)== false)
//                    {
//                        $password=md5($password);
//                        $conn = CreateConnection();
//                        //echo "INSERT INTO student_signup (f_name, l_name, email, password, faculty, course, batch, `index`, `date`, `active`) VALUES ('$fname', '$lname', '$email','$password','$faculty','$course','$batch','$index','$date',0)";
//                        $action=mysqli_query($conn, "INSERT INTO student_signup (f_name, l_name, uname, email, password, faculty, course, batch, `index`, `date`, `active`) VALUES ('$fname', '$lname', '$uname', '$email','$password','$faculty','$course','$batch','$index','$date',0)");
//                        echo "You are Sucessfully Registed, Please Activate Your Account Now";
//                    }
//                    else
//                    {
//                        echo "User Already Exist";
//                    }
//                }
//                else
//                {
//                    echo "Passwords Do Not Match";
//                }
//            }
//        }
//        else
//        {
//            echo "E Mail Do Not Match";
//        }
//    }
//
//    else
//    {
//        echo"Please Fill All The Fields";
//    }
//}
//
//?>

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
                    <form class="form-horizontal" method="post" role="form" action="loginAndSignup/signup.php">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter last name">
                        <label>User Name:</label>
                        <input type="text" class="form-control" name="uname" placeholder="Enter user name">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                        <label>Confirm Email Address:</label>
                        <input type="email" class="form-control" name="remail" placeholder="Re enter email">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="pass" placeholder="Enter password">
                        <label>Comfirm Password:</label>
                        <input type="password" class="form-control" name="repass" placeholder="Re enter password">
                        <label>Index Number:</label>
                        <input type="text" class="form-control" name="index" placeholder="Enter index number">
                        <label>Faculty:</label>
                        <select class="form-control"  name="faculty">
                            <option disabled selected> Choose The Faculty </option>
                            <option>Faculty of Computing</option>
                            <option>Faculty of Management</option>
                            <option>Faculty of Engineering</option>
                        </select>
                        <label>Course:</label>
                        <select class="form-control" required name="course">
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
                        <select class="form-control" name="batch">
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