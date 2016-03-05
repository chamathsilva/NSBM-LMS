<?php

require_once('../../class/class.db.php');
$database = new DB();


$f_name = htmlspecialchars($_POST['fname']);
$l_name = htmlspecialchars($_POST['lname']);
$u_name = htmlspecialchars($_POST['uname']);
$email = htmlspecialchars($_POST['email']);
$index = htmlspecialchars($_POST['index']);
$faculty = htmlspecialchars($_POST['faculty']);
$course = htmlspecialchars($_POST['course']);
$batch = htmlspecialchars($_POST['batch']);
$password = htmlspecialchars($_POST['pass']);

$result = $database->query("INSERT INTO `login` (`F_NAME`, `L_Name`, `U_Name`, `Email`, `Index_No`, `Faculty`, `Course`, `Batch`, `Password`) VALUES ('$f_name', '$l_name', '$u_name', '$email', '$index', '$faculty', '$course', '$batch', '$password')");

header( 'Location: ../login.php' );

