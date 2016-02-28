<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../function/connection.php");
    $submit = $_POST['submit'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $index = $_POST['index'];
    $email = $_POST['email'];
    $remail = $_POST['remail'];
    $faculty = $_POST['faculty'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $password = $_POST['pass'];
    $repass = $_POST['repass'];
    $date = date('Y-m-d');
}
if($submit)
{
    if($fname && $lname && $uname && $index && $email && $remail && $faculty && $course && $batch && $password && $repass)
    {
        if($email == $remail)
        {
            if(strlen($password)<6 || strlen($password)>20)
            {
                echo "Your Password Should Be 6-10 Characters";
            }
            else
            {
                if($password == $repass)
                {
                    if(user_exist($email)== false)
                    {
                        $password=md5($password);
                        $conn = CreateConnection();
                        //echo "INSERT INTO student_signup (f_name, l_name, email, password, faculty, course, batch, `index`, `date`, `active`) VALUES ('$fname', '$lname', '$email','$password','$faculty','$course','$batch','$index','$date',0)";
                        $action=mysqli_query($conn, "INSERT INTO student_signup (f_name, l_name, uname, email, password, faculty, course, batch, `index`, `date`, `active`) VALUES ('$fname', '$lname', '$uname', '$email','$password','$faculty','$course','$batch','$index','$date',0)");
                        echo "You are Sucessfully Registed, Please Activate Your Account Now";
                    }
                    else
                    {
                        echo "User Already Exist";
                    }
                }
                else
                {
                    echo "Passwords Do Not Match";
                }
            }
        }
        else
        {
            echo "E Mail Do Not Match";
        }
    }

    else
    {
        echo"Please Fill All The Fields";
    }
}

?>