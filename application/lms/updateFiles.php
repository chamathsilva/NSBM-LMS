<?php

require_once("../class/class.db.php");
$database=new DB();

//check if this is an ajax request
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    die();
}

if (isset($_FILES["FileInput1"]) && $_FILES["FileInput1"]["error"] == UPLOAD_ERR_OK) {

    //check if this is an ajax request
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        die();
    }
    //allowed file type Server side check
    switch (strtolower($_FILES['FileInput1']['type'])) {
        //allowed file type is mp4

        case 'image/jpeg':
            break;
        default:
            die('Unsupported File Please upload jpeg file!'); //Output error,Stops at this point
    }
}
else {
    die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}



//upload files separately into the unique folder of the uploads folder
$UploadDirectory = '../../data/updates/';

$File_Name = strtolower($_FILES['FileInput1']['name']);


//if not directly by above name create it.
if(!file_exists($UploadDirectory)){
    mkdir($UploadDirectory,0755, true);
}
//move temporary uploaded file into the folder created above
if (move_uploaded_file($_FILES['FileInput1']['tmp_name'], $UploadDirectory . $File_Name)) {
    //  die('Success! File Uploaded.');

} else {
    die('error uploading File!');
}

echo "Uploaded Successfuly";

$heading = filter_var($_POST["heading"], FILTER_SANITIZE_STRING);
$longdescription = filter_var($_POST["longdescription"], FILTER_SANITIZE_STRING);
$shortdescription = filter_var($_POST["shortdescription"], FILTER_SANITIZE_STRING);


$sql=$database->query("INSERT INTO latest_update (`heading`,`short_description`, `long_description`, `image_src`) VALUES ('$heading','$shortdescription','$longdescription','$File_Name')");



?>