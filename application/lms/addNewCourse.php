<?php

require_once("../class/class.db.php");
$database=new DB();


$name               = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$year               = filter_var($_POST["year"], FILTER_SANITIZE_STRING);
$cate             = filter_var($_POST["cate"], FILTER_SANITIZE_STRING);



$sql=$database->query("INSERT INTO course (`title`,`year`,`cate`) VALUES ('$name','$year','$cate')");


echo "Uploaded Successful";