<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    //session is set
    header('Location: /index.php');
}
?>