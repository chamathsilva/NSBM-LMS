<?php
require_once('../class/class.db.php');
$database = new DB();
$item_per_page = 4;

//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
    header('HTTP/1.1 500 Invalid page number!');
    exit();
}

//get current starting point of records
$position = ($page_number * $item_per_page);

//Limit our results within a specified range.
$updates = $database->query('SELECT * FROM latest_update ORDER BY updateID DESC LIMIT '."$position".','."$item_per_page");


foreach ($updates as $row) {
    $id                 = $row['updateID'];
    $heading            = $row['heading'];
    $short_description  = $row['short_description'];
    $image_src            = $row['image_src'];
    $src_path           = '../../assets/images/'.$image_src;

    echo '<div class="col-md-4">';
    echo '<h4 align="center" class="text-warning">'."$heading".'</h4>';
    echo '<img src="../../assets/images/open_day.jpg" class="Thumbnail" width="100%" height="40%">';
    echo '<p align="justify" style="min-height: 100px" font-family="Arial">'."$short_description".'</p>';
    echo '<a href="read_more.php?id='.$id.'" style="text-decoration:none; color:white;"> <button type="button" class="btn btn-primary btn-block"style=" background-color: #4c1a1a; border:none;"> Read More>></button></a>';
    echo'</div>';
}
?>

