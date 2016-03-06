<?php

require_once('../../class/class.db.php');
$database = new DB();


$f_name = htmlspecialchars($_POST['fname']);
$l_name = htmlspecialchars($_POST['lname']);
$u_name = htmlspecialchars($_POST['uname']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['pass']);

$result = $database->query("UPDATE `login` SET `F_NAME` = '$f_name', `L_Name` = '$l_name', `U_Name` = '$u_name', `Email` = '$email', `Password` = '$password' WHERE `Email` = '$email'");


session_start();
session_destroy();

header( 'Location: ../login.php?edit=1' );

