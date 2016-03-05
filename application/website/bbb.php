<?php
$submit=$_POST['submit'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$index=$_POST['index'];
$email=$_POST['email'];
$remail=$_POST['remail'];
$school=$_POST['school'];
$course=$_POST['course'];
$batch=$_POST['batch'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$date=date("y-m-d");
//generating random number for email activation
$emailcode=rand(23456789 , 98765432);


$check_email=mysql_query("SELECT email FROM student_signup WHERE email='$email'");
$count=mysql_num_rows($check_email);

if($submit)
{
    if($fname && $lname && $index && $email && $remail && $school && $course && $batch && $pass && $repass)
    {
        if(strlen($fname)>20)
        {
            echo "Max value for first name is 20 characters";
        }

        else
        {
            if(strlen($lname)>30)
            {
                echo "Max value for last name is 30 characters";
            }
            else
            {
                if(strlen($index)>20)
                {
                    echo "Max value for index number is 20 characters";
                }
                else
                {
                    if(strlen($email)>50)
                    {
                        echo "Max value for Email is 50 characters";
                    }
                    else
                    {
                        if($email != $remail)
                        {
                            echo "Emails do not match";
                        }
                        else
                        {
                            if($count != 0)
                            {
                                echo "Email has already taken";
                            }
                            else
                            {
                                if(strlen($pass)>20 || strlen($pass)<6)
                                {
                                    echo "Password must between 6-20 characters";
                                }
                                else
                                {
                                    if($pass != $repass)
                                    {
                                        echo "Passwords do not match";
                                    }
                                    else
                                    {
                                        $pass=md5($pass);

                                        //query

                                        $insert=mysql_query("INSERT INTO student_signup VALUES ('' , '$fname' , '$lname' , '$index' , '$email' , '$school' , '$course' , '$batch' , '$pass' , '$emailcode' , '' , '$date')");
                                        echo "Success. Check your email to activate your account!";

                                        //this gives us last id we entered to the database
                                        $last_id=mysql_insert_id();

                                        //sending email for the activation code

                                        $to=$email;
                                        $subject = "Email Activation";
                                        $header="FROM: LMS.COM";
                                        $body="Hello $fname \n\n You need to activate your account with the link below:\n\n http://localhost/nsbm_lms_assignment/activate.php?id=$last_id&mailcode=$emailcode";

                                        //function to send the email
                                        mail($to, $subject, $body, $header);

                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    else
    {
        echo "please fill all fields";
    }

}
?>