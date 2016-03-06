<?php

require_once("../class/class.db.php");
$database=new DB();

$f_name             = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
$l_name             = filter_var($_POST["lastName"], FILTER_SANITIZE_STRING);
$email             = filter_var($_POST["emailAdd"], FILTER_SANITIZE_STRING);
$password             = filter_var($_POST["password"], FILTER_SANITIZE_STRING);


$result = $database->query("INSERT INTO `login` (`F_NAME`, `L_Name`,`Email`,`Password`,`Level`) VALUES ('$f_name', '$l_name','$email','$password','0')");



echo "Uploaded Successful";