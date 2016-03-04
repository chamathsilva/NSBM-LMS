<?php

/*

$result = $database->query("SELECT * FROM `lesson`");

echo '<pre>';
var_dump($result);

echo '</pre>';

$result = $database->query("INSERT INTO lesson (`lessonTitle`,`description`, `yearr`, `fileName`, `extension`) VALUES (""kbdwje',kjewk,wedbw,academic_calendar_no37.pdf,pdf)" );


var_dump($result);*/

require_once('../../class/class.db.php');
$database = new DB();




$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$u_name = $_POST['uname'];
$email = $_POST['email'];
$index = $_POST['index'];
$faculty = $_POST['faculty'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$password = $_POST['pass'];

$result = $database->query("INSERT INTO `login` (`F_NAME`, `L_Name`, `U_Name`, `Email`, `Index_No`, `Faculty`, `Course`, `Batch`, `Password`) VALUES ('$f_name', '$l_name', '$u_name', '$email', '$index', '$faculty', '$course', '$batch', '$password')");

header( 'Location: ../login.php' );