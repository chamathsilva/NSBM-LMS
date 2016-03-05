<?php

require_once("../class/class.db.php");
$database=new DB();

//check if this is an ajax request
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    die();
}

if (isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"] == UPLOAD_ERR_OK) {

    //check if this is an ajax request
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        die();
    }
}
else {
    die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}



//upload files separately into the unique folder of the uploads folder
$UploadDirectory = '../../data/uploads/';

$File_Name = strtolower($_FILES['FileInput']['name']);


//if not directly by above name create it.
if(!file_exists($UploadDirectory)){
    mkdir($UploadDirectory,0755, true);
}
//move temporary uploaded file into the folder created above
if (move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory . $File_Name)) {
    //  die('Success! File Uploaded.');

} else {
    die('error uploading File!');
}

echo "Uploaded Successful";

$lesson_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$description = filter_var($_POST["description"], FILTER_SANITIZE_STRING);
$year = filter_var($_POST["course"], FILTER_SANITIZE_STRING);

$path = $_FILES['FileInput']['name'];
$extension = pathinfo($path, PATHINFO_EXTENSION);

$sql=$database->query("INSERT INTO lesson (`lessonTitle`,`description`, `course`, `fileName`, `extension`) VALUES ('$lesson_name','$description','$year','$File_Name','$extension')");



?>