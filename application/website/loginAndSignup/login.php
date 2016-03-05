<?php

require_once('../../class/class.db.php');
$database = new DB();

$username = $_POST['email'];
$password = $_POST['pass'];

session_start();

$result = $database->query("SELECT * FROM `login` WHERE `Email` = '$username'");

if (count($result) == 1){
    $_SESSION['username'] = $username;
<<<<<<< HEAD
    header( 'Location: ../index.php' );
=======
    if ($result[0]["Level"] == 0){
        header( 'Location: ../../lms/admin/adminHome.php' );
    }
    else{
        header( 'Location: ../../lms/home/lmsHome.php' );
    }

>>>>>>> origin/master
}
else{
    header( 'Location: ../login.php' );
}

