<?php

require_once('../../class/class.db.php');
$database = new DB();

$result = $database->query("SELECT * FROM `test`");

echo '<pre>';
var_dump($result);

echo '</pre>';

//$result = $database->query("INSERT INTO `NSBM_LMS`.`test` (`id`, `name`, `tele`, `address`) VALUES (NULL, 'rr', 'r', 'err')");


//var_dump($result);

