<?php

require_once('../../class/class.db.php');
$database = new DB();

$username = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['pass']);

session_start();

$result = $database->query("SELECT * FROM `login` WHERE `Email` = '$username'");

if (count($result) == 1){
    $_SESSION['username'] = $username;
    if ($result[0]["Level"] == 0){
        header( 'Location: ../../lms/admin/adminHome.php' );
    }
    else{
        header( 'Location: ../../lms/home/lmsHome.php' );
    }

}
else{
    header( 'Location: ../login.php' );
}