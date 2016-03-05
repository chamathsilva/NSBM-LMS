<?php

require_once('../../class/class.db.php');
$database = new DB();

$username = $_POST['email'];
$password = $_POST['pass'];

$result = $database->query("SELECT * FROM `login` WHERE `Email` = '$username'");

if (count($result) == 1){
    $_SESSION['username'] = $username;
    header( 'Location: ../index.php' );
}
else{
    header( 'Location: ../login.php' );
}

